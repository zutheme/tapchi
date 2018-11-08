<?php
// Our custom post type function
function create_posttype() {

	register_post_type( 'coachs',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'coachs' ),
				'singular_name' => __( 'coach' )
			),
			'public' => true,
			'menu_icon' => 'dashicons-id-alt',
			'has_archive' => true,
			'rewrite' => array('slug' => 'coachs'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'coachs', 'Post Type General Name', 'hatazu' ),
		'singular_name'       => _x( 'coach', 'Post Type Singular Name', 'hatazu' ),
		'menu_name'           => __( 'coachs', 'hatazu' ),
		'parent_item_colon'   => __( 'Parent coach', 'hatazu' ),
		'all_items'           => __( 'All coachs', 'hatazu' ),
		'view_item'           => __( 'View coach', 'hatazu' ),
		'add_new_item'        => __( 'Add New coach', 'hatazu' ),
		'add_new'             => __( 'Add New', 'hatazu' ),
		'edit_item'           => __( 'Edit coach', 'hatazu' ),
		'update_item'         => __( 'Update coach', 'hatazu' ),
		'search_items'        => __( 'Search coach', 'hatazu' ),
		'not_found'           => __( 'Not Found', 'hatazu' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'hatazu' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'coachs', 'hatazu' ),
		'description'         => __( 'coach news and reviews', 'hatazu' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies' => array( 'post_tag', 'category'), 
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'coachs', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );


/* Create blog Type Taxonomy */
if (!function_exists('create_blog_department_taxonomy')) {
    function create_blog_department_taxonomy()
    {
        $department_labels = array(
            'name' => __( 'Department', 'hatazu' ),
            'singular_name' => __( 'Department', 'hatazu' ),
            'search_items' =>  __( 'Search Departments', 'hatazu' ),
            'popular_items' => __( 'Popular Departments', 'hatazu' ),
            'all_items' => __( 'All Departments', 'hatazu' ),
            'parent_item' => __( 'Parent Department', 'hatazu' ),
            'parent_item_colon' => __( 'Parent Department:', 'hatazu' ),
            'edit_item' => __( 'Edit Department', 'hatazu' ),
            'update_item' => __( 'Update Department', 'hatazu' ),
            'add_new_item' => __( 'Add New Department', 'hatazu' ),
            'new_item_name' => __( 'New Department Name', 'hatazu' ),
            'separate_items_with_commas' => __( 'Separate Departments with commas', 'hatazu' ),
            'add_or_remove_items' => __( 'Add or remove Departments', 'hatazu' ),
            'choose_from_most_used' => __( 'Choose from the most used Departments', 'hatazu' ),
            'menu_name' => __( 'Departments', 'hatazu' )
        );

        register_taxonomy(
            'department',
            array( 'coachs' ),
            array(
                'hierarchical' => true,
                'labels' => $department_labels,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array('slug' => __('department', 'hatazu'))
            )
        );
    }
}

add_action('init', 'create_blog_department_taxonomy', 0);