<?php
/**
 * The template for displaying all single posts.
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

		<?php while ( have_posts() ) : the_post(); ?>
            <div class="blog-content-container">
			<div class="blog-article-container">
				<div class="blog-article-wrapper">  
					<?php the_post_thumbnail('full'); ?>
					<div class="blog-article-content">
                        <h2><?php the_title(); ?></h2> 
						<?php the_date(); ?> 
						<?php the_content(); ?>
					</div>
				</div>
				<div class="blog-picture-container">
					<?php $photos = CFS()->get( 'blog_photos' );
					if(!empty($photos)) : ?>
						<h3>pictures</h3>
						<div class="blog-picture-wrapper">
							<?php $count = count($photos);
							for($i = 0; $i < $count; $i++) :
								echo '<a href="' . $photos[$i]['blog_photo_uploads'] . '" class="thickbox"><img src="' . $photos[$i]['blog_photo_uploads'] . '"></a>';
							endfor; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
            </div>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>