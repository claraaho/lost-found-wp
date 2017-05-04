<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Lifestyle Posts Post Type
function lf_lifestyle_post() {

	$labels = array(
		'name'                  => 'Lifestyle Posts',
		'singular_name'         => 'Lifestyle Post',
		'menu_name'             => 'Lifestyle Posts',
		'name_admin_bar'        => 'Lifestyle Posts',
		'archives'              => 'Lifestyle Post Archives',
		'attributes'            => 'Lifestyle Post Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Posts',
		'add_new_item'          => 'Add Lifestyle Post',
		'add_new'               => 'Add Lifestyle Post',
		'new_item'              => 'New Lifestyle Post',
		'edit_item'             => 'Edit Lifestyle Post',
		'update_item'           => 'Update Lifestyle Post',
		'view_item'             => 'View Lifestyle Post',
		'view_items'            => 'View Lifestyle Posts',
		'search_items'          => 'Search Lifestyle Post',
		'not_found'             => 'Lifestyle Post not found',
		'not_found_in_trash'    => 'Lifestyle Post not found in Trash',
		'featured_image'        => 'Featured Lifestyle Post Image',
		'set_featured_image'    => 'Set featured Lifestyle Post image',
		'remove_featured_image' => 'Remove featured Lifestyle Post image',
		'use_featured_image'    => 'Use as featured Lifestyle Post image',
		'insert_into_item'      => 'Insert into Lifestyle Post',
		'uploaded_to_this_item' => 'Uploaded to this Lifestyle Post',
		'items_list'            => 'Lifestyle Posts list',
		'items_list_navigation' => 'Lifestyle Posts list navigation',
		'filter_items_list'     => 'Filter Lifestyle Posts list',
	);
	$args = array(
		'label'                 => 'Lifestyle Post Post Type',
		'description'           => 'Lifestyle Post Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'lifestyle', $args );

}
add_action( 'init', 'lf_lifestyle_post', 0 );

// Register Travel Posts Post Type
function lf_travel_post() {

	$labels = array(
		'name'                  => 'Travel Posts',
		'singular_name'         => 'Travel Post',
		'menu_name'             => 'Travel Posts',
		'name_admin_bar'        => 'Travel Posts',
		'archives'              => 'Travel Post Archives',
		'attributes'            => 'Travel Post Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Posts',
		'add_new_item'          => 'Add Travel Post',
		'add_new'               => 'Add Travel Post',
		'new_item'              => 'New Travel Post',
		'edit_item'             => 'Edit Travel Post',
		'update_item'           => 'Update Travel Post',
		'view_item'             => 'View Travel Post',
		'view_items'            => 'View Travel Posts',
		'search_items'          => 'Search Travel Post',
		'not_found'             => 'Travel Post not found',
		'not_found_in_trash'    => 'Travel Post not found in Trash',
		'featured_image'        => 'Featured Travel Post Image',
		'set_featured_image'    => 'Set featured Travel Post image',
		'remove_featured_image' => 'Remove featured Travel Post image',
		'use_featured_image'    => 'Use as featured Travel Post image',
		'insert_into_item'      => 'Insert into Travel Post',
		'uploaded_to_this_item' => 'Uploaded to this Travel Post',
		'items_list'            => 'Travel Posts list',
		'items_list_navigation' => 'Travel Posts list navigation',
		'filter_items_list'     => 'Filter Travel Posts list',
	);
	$args = array(
		'label'                 => 'Travel Post Post Type',
		'description'           => 'Travel Post Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'travel', $args );

}
add_action( 'init', 'lf_travel_post', 0 );

// Register Advice Post Type
function lf_advice_post() {

	$labels = array(
		'name'                  => 'Advice Posts',
		'singular_name'         => 'Advice Post',
		'menu_name'             => 'Advice Posts',
		'name_admin_bar'        => 'Advice Posts',
		'archives'              => 'Advice Post Archives',
		'attributes'            => 'Advice Post Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Posts',
		'add_new_item'          => 'Add Advice Post',
		'add_new'               => 'Add Advice Post',
		'new_item'              => 'New Advice Post',
		'edit_item'             => 'Edit Advice Post',
		'update_item'           => 'Update Advice Post',
		'view_item'             => 'View Advice Post',
		'view_items'            => 'View Advice Posts',
		'search_items'          => 'Search Advice Post',
		'not_found'             => 'Advice Post not found',
		'not_found_in_trash'    => 'Advice Post not found in Trash',
		'featured_image'        => 'Featured Advice Post Image',
		'set_featured_image'    => 'Set featured Advice Post image',
		'remove_featured_image' => 'Remove featured Advice Post image',
		'use_featured_image'    => 'Use as featured Advice Post image',
		'insert_into_item'      => 'Insert into Advice Post',
		'uploaded_to_this_item' => 'Uploaded to this Advice Post',
		'items_list'            => 'Advice Posts list',
		'items_list_navigation' => 'Advice Posts list navigation',
		'filter_items_list'     => 'Filter Advice Posts list',
	);
	$args = array(
		'label'                 => 'advice',
		'description'           => 'Advice Post Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-thumbs-up',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'advice', $args );

}
add_action( 'init', 'lf_advice_post', 0 );