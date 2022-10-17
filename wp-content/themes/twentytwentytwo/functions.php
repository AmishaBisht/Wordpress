<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Register Custom Post Type
function hfm_register_custom_post_type() { 

    $supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
		);
		 
		$labels = array(
		'name' => _x('Resource', 'plural'),
		'singular_name' => _x('Resource', 'singular'),
		'menu_name' => _x('Resource', 'admin menu'),
		'name_admin_bar' => _x('Resource', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New resource'),
		'new_item' => __('New resource'),
		'edit_item' => __('Edit resource'),
		'view_item' => __('View resource'),
		'all_items' => __('All resource'),
		'search_items' => __('Search resource'),
		'not_found' => __('No resource found.'),
		);
		 
		$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'description' => 'Holds our resource and specific data',
		'public' => true,
		'taxonomies' => array( 'location' ),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'can_export' => true,
		'capability_type' => 'post',
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'resource'),
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-megaphone',
		);
    register_post_type( 'resource', $args );

}
add_action( 'init', 'hfm_register_custom_post_type' );

//Add custom taxonomies
function add_custom_taxonomies() {
	register_taxonomy('location', 'resource', array(
	  'hierarchical' => true,
	  'labels' => array(
		'name' => _x( 'Locations', 'taxonomy general name' ),
		'singular_name' => _x( 'Location', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Locations' ),
		'all_items' => __( 'All Locations' ),
		'parent_item' => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'publicly_queyable' => true,
		'show_in_rest' => true,
		'edit_item' => __( 'Edit Location' ),
		'update_item' => __( 'Update Location' ),
		'add_new_item' => __( 'Add New Location' ),
		'new_item_name' => __( 'New Location Name' ),
		'menu_name' => __( 'Locations' ),
	  ),
	  'rewrite' => array(
		'slug' => 'locations', // This controls the base slug that will display before each term
		'with_front' => false, // Don't display the category base before "/locations/"
		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	  ),
	));
  }
  add_action( 'init', 'add_custom_taxonomies', 0 );
