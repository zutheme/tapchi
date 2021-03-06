<?php

/*

 * Plugin Name: Report meta box

 * Plugin URI: http://hatazu.com

 * Description: Report meta box.

 * Version: 1.5.9

 * Author: hatazu

 * Author URI: http://hatazu.com

 * License: GPL2

 */

add_action('admin_menu', 'custom_meta_menu');

function custom_meta_menu() {

    add_menu_page('meta custom Settings', 'meta custom', 'administrator', 'custom-meta-settings', 'custom_meta_settings_page', 'dashicons-admin-generic');

}

function custom_meta_settings_page() {

    include('custom-meta-admin.php');

}

add_action( 'admin_init', 'custom_meta_settings' );

function custom_meta_settings() {

    register_setting( 'custom-meta-settings-group', 'meta_name' );

    register_setting( 'custom-meta-settings-group', 'meta_phone' );

    register_setting( 'custom-meta-settings-group', 'meta_email' );

}

/*

 * Adds a meta box to the post editing screen

 */

function prfx_custom_meta() {

    add_meta_box( 'prfx_meta', __( 'Meta Box Title', 'prfx-textdomain' ), 'prfx_meta_callback', 'product','normal', // $context

        'high');

}

add_action( 'add_meta_boxes', 'prfx_custom_meta' );

/*

 * Outputs the content of the meta box

 */

function prfx_meta_callback( $post ) {

    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );

    $prfx_stored_meta = get_post_meta( $post->ID ); ?>

    <p>

        <label for="meta-image" class="prfx-row-title"><?php _e( 'File Upload', 'prfx-textdomain' )?></label>

        <input type="text" name="meta-image" id="meta-image" value="<?php if ( isset ( $prfx_stored_meta['meta-image'] ) ) echo $prfx_stored_meta['meta-image'][0]; ?>" />

        <input type="button" id="meta-image-button" class="button" value="<?php _e( 'Choose or Upload an Image', 'prfx-textdomain' )?>" />

    </p>

    <?php

}

/*

 * Saves the custom meta input

 */

function prfx_meta_save( $post_id ) {

    // Checks save status

    $is_autosave = wp_is_post_autosave( $post_id );

    $is_revision = wp_is_post_revision( $post_id );

    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status

    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {

        return;

    }

    // Checks for input and sanitizes/saves if needed 

    $post_type = get_post_type($post_id);

    if ( "product" != $post_type ) return;   

    //gallery

    

    if( isset( $_POST['meta-image'] ) ) {

        update_post_meta( $post_id, 'meta-image', $_POST[ 'meta-image' ] );    

    }  

    //update_post_meta( $post_id, 'meta-test',"sql=".$sql.",");

    update_post_meta( $post_id, 'meta-test',"sql=".$sql);

}

add_action( 'save_post', 'prfx_meta_save' );

/*

 * Adds the meta box stylesheet when appropriate

 */

function prfx_admin_styles(){

    global $typenow;

    if( $typenow == 'product' ) {

        wp_enqueue_style( 'prfx_meta_box_styles', plugin_dir_url( __FILE__ ) . 'css/hatazu_custom_style.css' );

    }

}

add_action( 'admin_print_styles', 'prfx_admin_styles' );

//add distric

if ( is_admin() ) {

    //include('lib_script.php');

}

function post_published_notification( $ID, $post ) {
    $author = $post->post_author; /* Post author ID. */
    $name = get_the_author_meta( 'display_name', $author );
    $email = get_the_author_meta( 'user_email', $author );
    $title = $post->post_title;
    $permalink = get_permalink( $ID );
    $edit = get_edit_post_link( $ID, '' );
    $to[] = sprintf( '%s <%s>', $name, $email );
    $subject = sprintf( 'Published: %s', $title );
    $message = sprintf ('Congratulations, %s! Your article “%s” has been published.' . "\n\n", $name, $title );
    $message .= sprintf( 'View: %s', $permalink );
    $headers[] = '';
    wp_mail( $to, $subject, $message, $headers );
}
add_action( 'publish_post', 'post_published_notification', 10, 2 );

/*

* Loads the image management javascript

*/

function prfx_image_enqueue() {

    global $typenow;

    if( $typenow == 'product' ) {

        wp_enqueue_media();

        // Registers and enqueues the required javascript.

        wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . 'js/meta-box-image.js', array( 'jquery' ) );

        wp_localize_script( 'meta-box-image', 'meta_image',

            array(

                'title' => __( 'Choose or Upload an Image', 'prfx-textdomain' ),

                'button' => __( 'Use this image', 'prfx-textdomain' ),

            )

        );

        wp_enqueue_script( 'meta-box-image' );

    }

}

add_action( 'admin_enqueue_scripts', 'prfx_image_enqueue');

function hatazu_attach_file_script() 

{

    //css

    wp_enqueue_style( 'hatazu_file_style.css', plugin_dir_url(__FILE__) . 'css/hatazu_file_style.css',array(), '1.1.1', 'all');

    //jquery

    wp_enqueue_script( 'hatazu_attach_file.js', plugin_dir_url(__FILE__) .'js/hatazu_attach_file.js', array(), '2.1.6', true ); 

    wp_localize_script( 'hatazu_attach_file.js', 'MyAjax', array('ajaxurl' => admin_url( 'admin-ajax.php' ),'security' => wp_create_nonce( 'my-special-string' )));

 }

add_action("wp_enqueue_scripts", "hatazu_attach_file_script");

define('no_avatar',  plugin_dir_url(__FILE__) . 'images/no-avatar.jpg');
define('no_thumbnail',   plugin_dir_url(__FILE__) . 'images/no-thumbnail.jpg');
define('no_thumbnail_url',   plugin_dir_url(__FILE__) . 'images/');
?>