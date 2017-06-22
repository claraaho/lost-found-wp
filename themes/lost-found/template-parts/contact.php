<?php
/**
    * Template Name: Contact Page
    *
    * @package Lost + Found
    */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-banner">
				<h2>Lost x Found</h2>
				<h3>with KatexCee</h3>
			</div>

			<div class="contact-content-container">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="contact-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="instagram-container">
	<h2>Instagram</h2>
	<?php echo do_shortcode('[instagram-feed]'); ?>
</div>
<?php get_footer(); ?>
