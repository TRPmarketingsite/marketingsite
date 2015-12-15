<?php 

/*
Plugin Name: Advisors Custom Post Type
Description: Advisors Custom Post Type
Version: 1.0
Author: Scalablepath
Author URI: https://www.scalablepath.com/
*/

// Define CPT
function create_advisor_post_type() {
	register_post_type( 'advisor',
		array(
			'labels' => array(
				'name' => __( 'Advisors' ),
				'singular_name' => __( 'Advisor' ),
				'add_new_item' => __( 'Add Advisor' ),
				'edit_item' => __( 'Edit Advisor' ),
				'new_item' => __( 'New Advisor' ),
				'view_item' => __( 'View Advisor' ),
				'items_archive' => __( 'Advisor Archive' ),
				'search_items' => __( 'Search Advisors' ),
				'not_found' => __( 'No Advisors found' ),
				'not_found_in_trash' => __( 'No Advisors found in trash' )
			),
			'description' => 'Advisors',
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
			'public' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-admin-users'
		)
	);
}
add_action( 'init', 'create_advisor_post_type' );