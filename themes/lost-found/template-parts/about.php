<?php
/**
    * Template Name: About Page
    *
    * @package Lost + Found
    */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="about-picture">
					<?php the_post_thumbnail('full'); ?>
				</div>
				
				<div class="about-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php echo do_shortcode('[jr_instagram id="2"]'); ?>
<?php get_footer(); ?>
