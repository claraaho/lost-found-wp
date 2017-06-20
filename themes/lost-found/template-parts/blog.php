<?php
/**
    * Template Name: Blog Page
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
        
            <div class="blog-page-content-container">
                <div class="blog-page-flex-container">

                    <div class="blog-page-left-container">

                        <div class="blog-lifestyle-container">
                            <?php $args1 = array( 'post_type' => 'lifestyle', 'posts_per_page' => 1, 'order' => 'DSC' );
                            $loop = new WP_Query( $args1 );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="blog-lifestyle-thumbnail-wrapper">
                                    <?php the_post_thumbnail('full'); ?>
                                    <h2>Lifestyle</h2>
                                </div>
                                <p><?php echo wp_trim_words(get_the_content(), 30, '... <a href="'. get_permalink() . '"> Read More</a>'); ?></p>
                            <?php endwhile; ?>
                        </div>

                    </div>

                    <div class="blog-page-right-container">

                        <div class="blog-advice-container">
                            <?php $args2 = array( 'post_type' => 'advice', 'posts_per_page' => 1, 'order' => 'DSC' );
                            $loop = new WP_Query( $args2 );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="blog-advice-thumbnail-wrapper">
                                    <?php the_post_thumbnail('full'); ?>
                                    <h2>Advice</h2>
                                </div>
                                <p><?php echo wp_trim_words(get_the_content(), 30, '... <a href="'. get_permalink() . '">Read More</a>'); ?></p>
                            <?php endwhile; ?>
                        </div>

                        <div class="blog-travel-container">
                            <?php $args3 = array( 'post_type' => 'travel', 'posts_per_page' => 1, 'order' => 'DSC' );
                            $loop = new WP_Query( $args3 );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="blog-travel-thumbnail-wrapper">
                                    <?php the_post_thumbnail('full'); ?>
                                    <h2>Travel</h2>
                                </div>
                                <p><?php echo wp_trim_words(get_the_content(), 30, '... <a href="'. get_permalink() . '"> Read More</a>'); ?></p>
                            <?php endwhile; ?>
                        </div>
                        
                    </div>

                </div><!-- .blog-page-flex-container -->
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="instagram-container">
	<h2>Instagram</h2>
	<?php echo do_shortcode('[instagram-feed]'); ?>
</div>
<?php get_footer(); ?>
