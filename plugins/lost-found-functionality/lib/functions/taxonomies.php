<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Entry Type Taxonomy
function lf_tax_entry_type() {

	$labels = array(
		'name'                       => 'Entry Types',
		'singular_name'              => 'Entry Type',
		'menu_name'                  => 'Entry Type',
		'all_items'                  => 'All Entry Types',
		'parent_item'                => 'Parent Entry Type',
		'parent_item_colon'          => 'Parent Entry Type:',
		'new_item_name'              => 'New Entry Type',
		'add_new_item'               => 'Add New Entry Type',
		'edit_item'                  => 'Edit Entry Type',
		'update_item'                => 'Update Entry Type',
		'view_item'                  => 'View Entry Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Entry Types',
		'search_items'               => 'Search Entry Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Entry Type list',
		'items_list_navigation'      => 'Entry Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'entry_type', array( 'lifestyle', 'travel', 'advice' ), $args );

}
add_action( 'init', 'lf_tax_entry_type', 0 );

