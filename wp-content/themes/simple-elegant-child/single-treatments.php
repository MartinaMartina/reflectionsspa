<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Simple & Elegant
 * @since Simple & Elegant 1.0
 * @modified since 2.0
 * @added side navigation
 */

get_header(); ?>

<div id="page-wrapper">

    <div class="container">
        <div id="primary">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
				$how_it_works = get_field('how_it_works');
				$what_to_expect = get_field('what_to_expect');
				$after_your_treatment = get_field('after_your_treatment');
				$description = get_field('description'); ?>
			
				<div class="treatmentspage">
					<h1><?php the_title(); ?></h1>
						<?php echo $description; ?>
				
					<h2>How it Works</h2>
						<?php echo $how_it_works; ?>
				
					<h2>What to Expect</h2>
						<?php echo $what_to_expect; ?>
				
					<h2>After Your Treatment</h2>
						<?php echo $after_your_treatment; ?>
				
				</div>
				
			<?php endwhile; ?>
			
			<p><br /><br /><a href="https://clients.mindbodyonline.com/classic/home?studioid=191303" class="apptbutton">Make an Appointment</a><br /><i>Book on MindBody Online</i></p>
        </div><!-- #primary -->

		<div id="secondary">
						<h2 class="sidetitle">All Treatments</h2>
			<?php dynamic_sidebar( 'treatments-sidebar' ); ?>
            
		</div>
        
    </div><!-- .container -->

</div><!-- #page-wrapper -->
    
<?php get_footer(); ?>
