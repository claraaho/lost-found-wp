<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-banner">
				<h2>Lost x Found</h2>
				<h3>with KatexCee</h3>
			</div>

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops!' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php echo esc_html( "What you're looking for cannot be found" ); ?></p>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="instagram-container">
	<h2>Instagram</h2>
	<?php echo do_shortcode('[instagram-feed]'); ?>
</div>
<?php get_footer(); ?>
