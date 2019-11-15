<?php
/**
 * londonparkour.com_v4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package londonparkour.com_v4
 */

if ( ! function_exists( 'londonparkourv4_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function londonparkourv4_setup() {

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'londonparkourv4' ),
		) );


		// // Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'londonparkourv4_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

	}
endif;
add_action( 'after_setup_theme', 'londonparkourv4_setup' );


/**
 * Enqueue scripts and styles.
 */
function londonparkourv4_scripts() {
	wp_enqueue_style( 'londonparkourv4-style', get_stylesheet_uri() );
	wp_enqueue_script( 'londonparkourv4-navigation', get_template_directory_uri() . '/js/navigation_new.js', array(), '20151215', true );
	wp_enqueue_script( 'londonparkourv4-animejs', get_template_directory_uri() . '/js/anime.3.1.0.min.js', array(), '310', true );
	wp_enqueue_script( 'londonparkourv4-animefx', get_template_directory_uri() . '/js/anime_fx.js', array(), '010', true );
	wp_enqueue_script( 'londonparkourv4-progressbar', get_template_directory_uri() . '/js/progress_bar.js', array(), '001', true );
	wp_enqueue_script( 'londonparkourv4-lazysizes', get_template_directory_uri() . '/js/lazysizes.min.js', array(), '002', true );
}
add_action( 'wp_enqueue_scripts', 'londonparkourv4_scripts' );

/**
 * Register Sidebars and Widgets.
 */
require get_template_directory() . '/inc/register_sidebars.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

 /*
 * Remove Gutenberg bullshit
 */
require get_template_directory() . '/inc/disable_gutenberg.php';

/**
 * Remove Frontend Styles & Scripts
 */
require get_template_directory() . '/inc/dequeue_deregister.php';

/**
 * Remove <p> tags automatically added by wordpress
 */
require get_template_directory() . '/inc/remove_p_tags.php';

/**
 * Add custom classes to pages
 */
require get_template_directory() . '/inc/body_classes.php';

