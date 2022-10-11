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
		'taxonomies' => array( 'category', 'post_tag' ),
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