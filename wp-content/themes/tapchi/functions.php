<?php
/**
 * tapchi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tapchi
 */

if ( ! function_exists( 'tapchi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tapchi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tapchi, use a find and replace
		 * to change 'tapchi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tapchi', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'tapchi' ),
			'menu-top' => esc_html__( 'Menu top', 'tapchi' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tapchi_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tapchi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tapchi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tapchi_content_width', 640 );
}
add_action( 'after_setup_theme', 'tapchi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tapchi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tapchi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tapchi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tapchi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tapchi_scripts() {
	wp_enqueue_style( 'tapchi-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'tapchi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'tapchi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tapchi_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
//require_once ( dirname( __FILE__ ) . '/wp-bootstrap-navwalker.php') ;
require_once ( dirname( __FILE__ ) . '/class-wp-bootstrap-navwalker.php') ;
//require_once ( dirname( __FILE__ ) . '/wpdocs_walker_nav_menu.php') ;
//require_once ( dirname( __FILE__ ) . '/wpdocs_walker_nav_lists.php') ;
//require_once ( dirname( __FILE__ ) . '/wpdocs_walker_nav_list.php') ;
require_once(get_template_directory() . '/inc/' . 'process.php');
require get_template_directory() . '/inc/breadcrumb.php';
require get_template_directory(). '/inc/count-view.php';
require get_template_directory(). '/inc/count_comment.php';
require get_template_directory(). '/inc/popular_post.php';
require get_template_directory(). '/inc/getbanner.php';
//require get_template_directory(). '/inc/get_curent_cat.php';
require get_template_directory(). '/inc/get_curent_cat.php';
//require get_template_directory(). '/inc/custom-box.php';
//require get_template_directory(). '/inc/event-type.php';
require get_template_directory(). '/inc/custom_number_page.php';
function get_the_excerpt_max($charlength) {
	$excerpt = get_the_content();
	 $cleanText = filter_var($excerpt, FILTER_SANITIZE_STRING);
    $introCleanText = strip_tags($cleanText);
	$charlength++;

	if ( mb_strlen( $introCleanText ) > $charlength ) {
		$subex = mb_substr( $introCleanText, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			return mb_substr( $subex, 0, $excut );
		} else {
			return $subex;
		}
		return '...';
	} else {
		return $introCleanText;
	}
	return $introCleanText;
}

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category()) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
     if (is_archive() && is_tax()) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});
// add_filter( "the_excerpt", "add_class_to_excerpt" );
// function add_class_to_excerpt( $excerpt ) {
//     return str_replace('<p', '', $excerpt);
// }