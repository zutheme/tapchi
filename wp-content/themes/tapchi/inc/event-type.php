<?php

// Our custom post type function

function create_event_type() {
	register_post_type( 'event',

	// CPT Options

		array(

			'labels' => array(

				'name' => __( 'Sự kiện' ),

				'singular_name' => __( 'Sự kiện' )

			),

			'public' => true,

			'menu_icon' => 'dashicons-dashboard',

			'has_archive' => true,

			'rewrite' => array('slug' => 'event'),

		)

	);

}

// Hooking up our function to theme setup

add_action( 'init', 'create_event_type' );



/*

* Creating a function to create our CPT

*/



function custom_event_type() {



// Set UI labels for Custom Post Type

	$labels = array(

		'name'                => _x( 'Sự kiện', 'Post Type General Name', 'hatazu' ),

		'singular_name'       => _x( 'Sự kiện', 'Post Type Singular Name', 'hatazu' ),

		'menu_name'           => __( 'Sự kiện', 'hatazu' ),

		'parent_item_colon'   => __( 'Parent event', 'hatazu' ),

		'all_items'           => __( 'All event', 'hatazu' ),

		'view_item'           => __( 'View event', 'hatazu' ),

		'add_new_item'        => __( 'Add New event', 'hatazu' ),

		'add_new'             => __( 'Add New', 'hatazu' ),

		'edit_item'           => __( 'Edit event', 'hatazu' ),

		'update_item'         => __( 'Update event', 'hatazu' ),

		'search_items'        => __( 'Search event', 'hatazu' ),

		'not_found'           => __( 'Not Found', 'hatazu' ),

		'not_found_in_trash'  => __( 'Not found in Trash', 'hatazu' ),

	);

	

// Set other options for Custom Post Type

	

	$args = array(

		'label'               => __( 'Sự kiện', 'hatazu' ),

		'description'         => __( 'Sự kiện news and reviews', 'hatazu' ),

		'labels'              => $labels,

		// Features this CPT supports in Post Editor

		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

		// You can associate this CPT with a taxonomy or custom taxonomy. 

		'taxonomies' => array('post_tag'), 

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

	register_post_type( 'event', $args );



}



/* Hook into the 'init' action so that the function

* Containing our post type registration is not 

* unnecessarily executed. 

*/



add_action( 'init', 'custom_event_type', 0 );





/* Create event Type Taxonomy */

if (!function_exists('create_event_department_taxonomy')) {

    function create_event_department_taxonomy()

    {

        $department_labels = array(

            'name' => __( 'Nhóm', 'hatazu' ),

            'singular_name' => __( 'Nhóm', 'hatazu' ),

            'search_items' =>  __( 'Search Loại Sự kiện', 'hatazu' ),

            'popular_items' => __( 'Popular Loại Sự kiện', 'hatazu' ),

            'all_items' => __( 'Tất cả', 'hatazu' ),

            'parent_item' => __( 'Parent Nhóm Sự kiện', 'hatazu' ),

            'parent_item_colon' => __( 'Parent Nhóm Sự kiện:', 'hatazu' ),

            'edit_item' => __( 'Edit Nhóm Sự kiện', 'hatazu' ),

            'update_item' => __( 'Update Nhóm Sự kiện', 'hatazu' ),

            'add_new_item' => __( 'Add New Nhóm Sự kiện', 'hatazu' ),

            'new_item_name' => __( 'New Nhóm Sự kiện Name', 'hatazu' ),

            'separate_items_with_commas' => __( 'Separate Loại Sự kiện with commas', 'hatazu' ),

            'add_or_remove_items' => __( 'Add or remove Loại Sự kiện', 'hatazu' ),

            'choose_from_most_used' => __( 'Choose from the most used Loại Sự kiện', 'hatazu' ),

            'menu_name' => __( 'Nhóm', 'hatazu' )

        );

        register_taxonomy(

            'group-event',

            array( 'event' ),

            array(

                'hierarchical' => true,

                'labels' => $department_labels,

                'show_ui' => true,

                'query_var' => true,

                'rewrite' => array('slug' => __('group-event', 'hatazu'))

            )

        );

    }

}



add_action('init', 'create_event_department_taxonomy', 0);