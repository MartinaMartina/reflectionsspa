<?php
if ( ! function_exists('withemes_woocommerce_installed') ) :
function withemes_woocommerce_installed() {
    return class_exists( 'WooCommerce' );
}
endif;

if ( !class_exists( 'Withemes_WooCommerce' ) ) :
/**
 * WooCommerce class
 *
 * @since 1.3
 * @modified since 2.0
 */
class Withemes_WooCommerce
{   
    
    /**
	 * Construct
	 */
	public function __construct() {
	}
    
    /**
	 * The one instance of class
	 *
	 * @since 1.3
	 */
	private static $instance;

	/**
	 * Instantiate or return the one class instance
	 *
	 * @since 1.3
	 *
	 * @return class
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
    
    /**
     * Initiate the class
     * contains action & filters
     *
     * @since 1.3
     */
    public function init() {
        
        // .container wrapper
        add_action('woocommerce_before_main_content', array( $this, 'wrapper_start' ), 10);
        add_action('woocommerce_after_main_content', array( $this, 'wrapper_end' ), 10);
        
        add_action( 'woocommerce_before_shop_loop_item', array( $this, 'content_product_thumbnail_open' ), 9 );
        add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 11 );
        add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'content_product_thumbnail_close' ), 12 );
        
        // Add to cart button
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
        add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 11 );
        
        // Sale Flash
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
        add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 14 );
        
        // Custom title
        remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
        add_action( 'woocommerce_shop_loop_item_title', array( $this, 'content_product_title' ), 10 );
        
        // single images markup
        add_filter( 'woocommerce_product_thumbnails_columns', function( $column ) { return 4; } ) ;
        add_filter( 'woocommerce_single_product_image_html', array( $this, 'single_product_image_html' ), 10, 2 );
        add_filter( 'woocommerce_single_product_image_thumbnail_html', array( $this, 'single_product_image_thumbnail_html' ), 10, 2 );
        
        // WooCommerce Options
        add_filter( 'loop_shop_per_page', array( $this, 'products_per_page' ), 20 );
        add_filter('loop_shop_columns', array( $this, 'loop_columns' ), 999 );
        
        // Body Class
        if ( withemes_woocommerce_installed() ) {
            
            // WooCommerce Options
            add_filter( 'withemes_panels', array( $this, 'panels' ) );
            add_filter( 'withemes_sections', array( $this, 'sections' ) );
            add_filter( 'withemes_options', array( $this, 'options' ) );
        }
        
        add_filter( 'body_class', array( $this, 'body_class' ) );
    }
    
    function content_product_thumbnail_open() {
    
        echo '<div class="product-thumbnail"><div class="product-thumbnail-inner">';
        
    }
    
    function content_product_thumbnail_close() {
        
        echo '</div></div>';
        
    }
    
    function content_product_title() {
        
        echo '<h3 class="product-title"><a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a></h3>';
        
    }
    
    /**
     * Wrapper start
     *
     * @since 1.3
     */
    function wrapper_start() {
        
        echo '<div class="container">';
    
    }
    
    /**
     * Wrapper End
     *
     * @since 1.3
     */
    function wrapper_end() {
        
        echo '</div>';
    
    }
    
    /**
     * Single Product Image HTML
     *
     * We just wanna remove zoom class to replace it by iLightbox class
     *
     * @since 1.3
     */
    function single_product_image_html( $html, $post_id ) {
        
        global $post;
        
        $attachment_id    = get_post_thumbnail_id();
        $props            = wc_get_product_attachment_props( $attachment_id, $post );
        $image            = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
            'title'	 => $props['title'],
            'alt'    => $props['alt'],
        ) );
        
        // lightbox options
        $thumbnail_src = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' );
        $full_src = wp_get_attachment_image_src( $attachment_id, 'full' );
        $image_options = 'thumbnail:\'' . $thumbnail_src[0] . '\', width: ' . $full_src[1] . ', height:' . $full_src[2];
        
        $html = sprintf( 
            '<a href="%s" itemprop="image" class="woocommerce-main-image" title="%s" data-options="%s">%s</a>', 
            $props['url'], 
            $props['caption'],
            $image_options,
            $image 
        );
        
        return $html;
    
    }
    
    /**
     * Single Thumbnails HTML
     *
     * We just wanna remove zoom class to replace it by iLightbox class
     *
     * @since 1.3
     * Edited to compatible with WooCommerce 3.0
     */
    function single_product_image_thumbnail_html( $html, $attachment_id ) {
        
        $thumbnail_src = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' );
        $full_src = wp_get_attachment_image_src( $attachment_id, 'full' );
        
        // lightbox options
        $full_size_image = wp_get_attachment_image_src( $attachment_id, 'full' );
		$thumbnail       = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' );
		$image_title     = get_post_field( 'post_excerpt', $attachment_id );
        
        $attributes = array(
            'title'                   => $image_title,
			'data-src'                => $full_size_image[0],
			'data-large_image'        => $full_size_image[0],
			'data-large_image_width'  => $full_size_image[1],
			'data-large_image_height' => $full_size_image[2],
		);
        
        $image_options = 'thumbnail:\'' . $thumbnail_src[0] . '\', width: ' . $full_src[1] . ', height:' . $full_src[2];
        
        $html  = '<div data-thumb="' . esc_url( $thumbnail[0] ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_size_image[0] ) . '" class="lightbox-link" data-options="' . $image_options . '">';
		$html .= wp_get_attachment_image( $attachment_id, 'shop_single', false, $attributes );
 		$html .= '</a></div>';
        
        return $html;
    
    }
    
    /**
     * Custom number of products per page
     *
     * @since 2.0
     */
    function products_per_page( $ppp ) {
        
        $custom_ppp = absint( get_option( 'withemes_products_per_page' ) );
        if ( $custom_ppp > 0 ) return $custom_ppp;
        return $ppp;
        
    }
    
    /**
     * Custom shop column
     *
     * @since 2.0
     */
    function loop_columns() {
        $column = get_option( 'withemes_shop_column' );
        if ( '2' != $column && '3' != $column ) $column = '4';
		return absint( $column );
	}
    
    /**
     * Panels
     *
     * @since 2.0
     */
    function panels( $panels ) {
        
        // $panels[ 'woocommerce' ] = esc_html__( 'WooCommerce', 'simple-elegant' );
        
        return $panels;
    
    }
    
    /**
     * Sections
     *
     * @since 2.0
     */
    function sections( $sections ) {
        
        $sections[ 'woocommerce' ] = array(
            'title' => esc_html__( 'WooCommerce', 'simple-elegant' ),
            'priority' => 260,
        );
        
        return $sections;
    
    }
    
    /**
     * Options
     *
     * @since 2.0
     */
    function options( $options ) {
        
        $options[ 'products_per_page' ] = array(
            'name' => esc_html__( 'Custom number of products per page', 'simple-elegant' ),
            'type' => 'text',
            'section' => 'woocommerce',
        );
        
        $options[ 'shop_column' ] = array(
            'name' => esc_html__( 'Default Catalog Column Layout', 'simple-elegant' ),
            'type' => 'radio',
            'options' => array(
                '2' => esc_html__( '2 Columns', 'simple-elegant' ),
                '3' => esc_html__( '3 Columns', 'simple-elegant' ),
                '4' => esc_html__( '4 Columns', 'simple-elegant' ),
            ),
            'std' => '4',
            'section' => 'woocommerce',
        );
        
        $options[ 'header_cart' ] = array(
            'name' => esc_html__( 'Show header cart?', 'simple-elegant' ),
            'type' => 'radio',
            'options' => withemes_enable_options(),
            'std' => 'true',
            'section' => 'woocommerce',
        );
        
        return $options;
    
    }
    
    /**
     * Classes
     *
     * @since 2.0
     */
    function body_class( $classes ) {
    
        if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
            $key = array_search( 'sidebar-left', $classes );
            unset( $classes[ $key ] );
            $key = array_search( 'sidebar-right', $classes );
            unset( $classes[ $key ] );
            
            $column = get_option( 'withemes_shop_column' );
            if ( '2' != $column && '3' != $column ) $column = '4';
            $classes[] = 'columns-' . $column;
        }
        
        return $classes;
        
    }
    
}

Withemes_WooCommerce::instance()->init();

endif;