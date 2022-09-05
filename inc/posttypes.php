<?php

// Register Custom Post Type
function register_cpt_post_type() {

	$labels = array(
			'name'                => _x( 'Postype name', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Post type singular name', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Post type menu name', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Items', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);	
	$args = array(
			'label'               => __( 'Post type label', 'text_domain' ),
			'description'         => __( 'Post Type Description', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array('title', 'editor', 'thumbnail'),
			'taxonomies'          => array( 'tent_type' ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-admin-home',
			'can_export'          => true,
			'has_archive'         => 'post-type-archive',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,			
			'capability_type'     => 'post',
	);
	// register_post_type( 'post_type', $args );
	

}

// Hook into the 'init' action
// add_action( 'init', 'register_cpt_post_type', 0 );
