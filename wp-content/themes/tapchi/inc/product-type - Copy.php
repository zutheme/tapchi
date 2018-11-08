<?php

// Our custom post type function

function create_posttype() {



	register_post_type( 'product',

	// CPT Options

		array(

			'labels' => array(

				'name' => __( 'sản phẩm' ),

				'singular_name' => __( 'sản phẩm' )

			),

			'public' => true,

			'menu_icon' => 'dashicons-id-alt',

			'has_archive' => true,

			'rewrite' => array('slug' => 'product'),

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

		'name'                => _x( 'sản phẩm', 'Post Type General Name', 'hatazu' ),

		'singular_name'       => _x( 'sản phẩm', 'Post Type Singular Name', 'hatazu' ),

		'menu_name'           => __( 'sản phẩm', 'hatazu' ),

		'parent_item_colon'   => __( 'Parent product', 'hatazu' ),

		'all_items'           => __( 'All product', 'hatazu' ),

		'view_item'           => __( 'View product', 'hatazu' ),

		'add_new_item'        => __( 'Add New product', 'hatazu' ),

		'add_new'             => __( 'Add New', 'hatazu' ),

		'edit_item'           => __( 'Edit product', 'hatazu' ),

		'update_item'         => __( 'Update product', 'hatazu' ),

		'search_items'        => __( 'Search product', 'hatazu' ),

		'not_found'           => __( 'Not Found', 'hatazu' ),

		'not_found_in_trash'  => __( 'Not found in Trash', 'hatazu' ),

	);

	

// Set other options for Custom Post Type

	

	$args = array(

		'label'               => __( 'sản phẩm', 'hatazu' ),

		'description'         => __( 'sản phẩm news and reviews', 'hatazu' ),

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

	register_post_type( 'product', $args );



}



/* Hook into the 'init' action so that the function

* Containing our post type registration is not 

* unnecessarily executed. 

*/



add_action( 'init', 'custom_post_type', 0 );





/* Create product Type Taxonomy */

if (!function_exists('create_product_department_taxonomy')) {

    function create_product_department_taxonomy()

    {

        $department_labels = array(

            'name' => __( 'Nhóm', 'hatazu' ),

            'singular_name' => __( 'Nhóm', 'hatazu' ),

            'search_items' =>  __( 'Search Departments', 'hatazu' ),

            'popular_items' => __( 'Popular Departments', 'hatazu' ),

            'all_items' => __( 'Tất cả', 'hatazu' ),

            'parent_item' => __( 'Parent Department', 'hatazu' ),

            'parent_item_colon' => __( 'Parent Department:', 'hatazu' ),

            'edit_item' => __( 'Edit Department', 'hatazu' ),

            'update_item' => __( 'Update Department', 'hatazu' ),

            'add_new_item' => __( 'Add New Department', 'hatazu' ),

            'new_item_name' => __( 'New Department Name', 'hatazu' ),

            'separate_items_with_commas' => __( 'Separate Departments with commas', 'hatazu' ),

            'add_or_remove_items' => __( 'Add or remove Departments', 'hatazu' ),

            'choose_from_most_used' => __( 'Choose from the most used Departments', 'hatazu' ),

            'menu_name' => __( 'Nhóm', 'hatazu' )

        );



        register_taxonomy(

            'department',

            array( 'product' ),

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



add_action('init', 'create_product_department_taxonomy', 0);