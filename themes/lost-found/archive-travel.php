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

		<?php $new_loop = new WP_Query( array('post_type' => 'travel',
        'posts_per_page' => 1) ); ?>

		<?php if ( $new_loop->have_posts() ) : ?>
    		<?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
				<h2><?php the_post_thumbnail('full'); ?></h2>
			<?php endwhile;?>
		<?php else: ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

		<div class='loop-nav-container'><?php lf_infinite_navigation(); ?></div>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
