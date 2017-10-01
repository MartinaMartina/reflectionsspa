<?php 

add_action( 'wp_enqueue_scripts', 'wi_child_enqueue_styles');
function wi_child_enqueue_styles() {
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function create_custom_post_types() {
    register_post_type( 'treatments',
        array(
            'labels' => array(
                'name' => __( 'Treatments' ),
                'singular_name' => __( 'Treatment' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'treatments' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

function wi_child_register_sidebars() {

    register_sidebar( array(
		'name'          => __( 'Treatments Sidebar', 'wi-child' ),
		'id'            => 'treatments-sidebar',
		'description'   => __( 'Sidebar on Treatments', 'wi-child' ),
		'before_widget' => '<aside id="treatment" class="treatmentside">',
		'after_widget'  => '</aside>',
	) );

}
add_action( 'widgets_init', 'wi_child_register_sidebars' );


?>