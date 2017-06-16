<?php
/**
 * The template for displaying archive pages.
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

			<header class="page-header">
                <h1 class="page-title">Browsing Category: <?php
				the_archive_title( '<span class="post-type-category">', '</span>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?></h1>
			</header>

			<div class="archive-content-container">
				<?php if ( have_posts() ) : ?>
					<?php echo do_shortcode('[ajax_load_more id="5642903314" container_type="div" css_classes="newest-post-container" post_type="lifestyle" posts_per_page="3" scroll="false" button_label="Load More"]'); ?>
				<?php endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
