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
				<h2>Lost x Found</h2>
				<h3>with KatexCee</h3>
			</div>

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php echo do_shortcode('[jr_instagram id="2"]'); ?>
<?php get_footer(); ?>
