<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero-banner">
				<div class="hero-title-p1">
					<h2>Lost</h2>
				</div>
				<div class="hero-title-p2">
					<h2>X</h2>
				</div>
				<div class="hero-title-p3">
					<h2>Found</h2>
				</div>
				<h3>with KatexCee</h3>
			</div>

			<div class="homepage-content-container">

			<!-- BLOG POSTS -->
			<div class="blog-post-container">
				
				<?php $lifestyles = get_posts(array( 'posts_per_page'=> 1, 'post_type' => 'lifestyle', 'order' => 'DSC' )); ?>
				<div class="lifestyle-feature-post">
					<?php foreach ( $lifestyles as $lifestyle ): ?>
                    	<div class="feature-picture-container">
							<img src="<?php echo get_the_post_thumbnail_url($lifestyle); ?>">
							<h2 class="feature-category-title">Lifestyle</h2>
						</div>
                    	<p><a class="lifestyle-title" href='<?php echo get_permalink($lifestyle);?>'><?php echo get_the_title($lifestyle); ?></a></p>
                    	<p><a href='<?php echo get_permalink($lifestyle);?>'>Read More</a></p>
            		<?php endforeach; wp_reset_postdata(); ?>
				</div>

				<?php $travels = get_posts(array( 'posts_per_page'=> 1, 'post_type' => 'travel', 'order' => 'DSC' )); ?>
				<div class="travel-feature-post">
					<?php foreach ( $travels as $travel ): ?>
						<div class="feature-picture-container">
                    		<img src="<?php echo get_the_post_thumbnail_url($travel); ?>">
							<h2 class="feature-category-title">Travel</h2>
						</div>
                    	<p><a class="travel-title" href='<?php echo get_permalink($travel);?>'><?php echo get_the_title($travel); ?></a></p>
                    	<p><a href='<?php echo get_permalink($travel);?>'>Read More</a></p>
            		<?php endforeach; wp_reset_postdata(); ?>
				</div>

				<?php $advices = get_posts(array( 'posts_per_page'=> 1, 'post_type' => 'advice', 'order' => 'DSC' )); ?>
				<div class="advice-feature-post">
					<?php foreach ( $advices as $advice ): ?>
						<div class="feature-picture-container">
                    		<img src="<?php echo get_the_post_thumbnail_url($advice); ?>">
							<h2 class="feature-category-title">Advice</h2>
						</div>
                    	<p><a class="advice-title" href='<?php echo get_permalink($advice);?>'><?php echo get_the_title($advice); ?></a></p>
                    	<p><a href='<?php echo get_permalink($advice);?>'>Read More</a></p>
            		<?php endforeach; wp_reset_postdata(); ?>
				</div>

			</div><!-- .blog-post-container -->

			<!-- MOST RECENT BLOG ENTRY -->
			<div class="recent-blog-container">
				<?php $entries = wp_get_recent_posts(array('post_type'=>'blog-entry'));?>
				<?php foreach ( $entries as $entry ):
					echo '<a href="' . get_permalink($entry["ID"]) . '" title="Look '.esc_attr($entry["post_title"]).'" >' .   $entry["post_title"].'</a>';
            	endforeach; ?>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			</div><!-- .homepage-content-container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="instagram-container">
	<h2>Instagram</h2>
	<?php echo do_shortcode('[instagram-feed]'); ?>
</div>
<?php get_footer(); ?>
