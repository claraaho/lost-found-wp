<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
* Ininite navigation looping
*/
function lf_infinite_navigation() {
	if( get_adjacent_post(false, '', true)  ) { 
		previous_post_link('%link', 'last');
	} else { 
    	$first = new WP_Query('posts_per_page=1&order=DESC&post_type=travel'); $first->the_post();
    	echo '<a href="' . get_permalink() . '">last</a>';
  		wp_reset_query();
	}; 
    
	if( get_adjacent_post(false, '', false) ) { 
		next_post_link('%link', 'next');
	} else { 
		$last = new WP_Query('posts_per_page=1&order=ASC&post_type=travel'); $last->the_post();
    	echo '<a href="' . get_permalink() . '">next</a>';
    	wp_reset_query();
	};
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Changing product archive title.
 */
function blog_archive_title($title) {
	if(is_post_type_archive()) {
		$title = post_type_archive_title( '', false );
	}
	return $title;
}
add_filter('get_the_archive_title', 'blog_archive_title');
