<?php
	
$labels = array(
	'name' => _x( 'Cherry Facilities', RCFA_TEXT_DOMAIN ),
	'singular_name' => _x( 'Cherry Facility', RCFA_TEXT_DOMAIN ),
	'add_new' => _x( 'Add New Facility', RCFA_TEXT_DOMAIN ),
	'add_new_item' => _x( 'Add New Facility', RCFA_TEXT_DOMAIN ),
	'edit_item' => _x( 'Edit Facility', RCFA_TEXT_DOMAIN ),
	'new_item' => _x( 'New Facility', RCFA_TEXT_DOMAIN ),
	'view_item' => _x( 'View Facility', RCFA_TEXT_DOMAIN ),
	'search_items' => _x( 'Search Facility', RCFA_TEXT_DOMAIN ),
	'not_found' => _x( 'No facility found', RCFA_TEXT_DOMAIN ),
	'not_found_in_trash' => _x( 'No facility found in trash', RCFA_TEXT_DOMAIN ),
	'parent_item_colon' => _x( 'Parent Facility:', RCFA_TEXT_DOMAIN ),
	'all_items' => __( 'All Cherry Facilities', RCFA_TEXT_DOMAIN ),
	'menu_name' => _x( 'Cherry Facilities', RCFA_TEXT_DOMAIN ),
);

$args = array(
	'labels' => $labels,
	'hierarchical' => false,
	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
	'public' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'menu_position' => 10,
	'menu_icon' => 'dashicons-format-gallery',
	'show_in_nav_menus' => false,
	'publicly_queryable' => false,
	'exclude_from_search' => true,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => false,
	'capability_type' => 'post'
);

register_post_type( RCFA_TEXT_DOMAIN, $args );
