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
	wp_enqueue_script( 'londonparkourv4-navigation', get_template_directory_uri() . '/js/navigation_new.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-progressbar', get_template_directory_uri() . '/js/progress_bar.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lazysizes-bgset', get_template_directory_uri() . '/js/lazysizes_plugins/ls.bgset.min.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lazysizes-unveil', get_template_directory_uri() . '/js/lazysizes_plugins/ls.unveilhooks.min.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lazysizes', get_template_directory_uri() . '/js/lazysizes.min.js', array(), null, true );

	// DESKTOP ONLY SCRIPTS
	if ( ! wp_is_mobile() ) { 
		wp_enqueue_script( 'londonparkourv4-animejs', get_template_directory_uri() . '/js/anime.3.1.0.min.js', array(), null, false );
		wp_enqueue_script( 'londonparkourv4-animefx', get_template_directory_uri() . '/js/anime_fx.js', array(), null, false );

		// Specific JS for HEROS on specific pages
		if (is_page('homepage')){
			wp_enqueue_script( 'londonparkourv4-animefx-homepage', get_template_directory_uri() . '/js/page_specific/homepage_fx.js', array(), null, true );
		}
		if (is_page('classes')){
			wp_enqueue_script( 'londonparkourv4-animefx-classes', get_template_directory_uri() . '/js/page_specific/classes_fx.js', array(), null, true );
		}
		if (is_page('privatesessions')){
			wp_enqueue_script( 'londonparkourv4-animefx-private', get_template_directory_uri() . '/js/page_specific/private_fx.js', array(), null, true );
		}
		if (is_page('pt')){
			wp_enqueue_script( 'londonparkourv4-animefx-pt', get_template_directory_uri() . '/js/page_specific/pt_fx.js', array(), null, true );
		}
		if (is_page('contact')){
			wp_enqueue_script( 'londonparkourv4-animefx-contact', get_template_directory_uri() . '/js/page_specific/contact_fx.js', array(), null, true );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'londonparkourv4_scripts' );

if (!(is_admin())) {
    function defer_js($url) {
        if (FALSE === strpos($url, '.js')) return $url;
        if (strpos($url, 'jquery.js')) return $url;
        return "$url' defer onload='";
    }
    add_filter('clean_url', 'defer_js', 11, 1);
}

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

/**
 * Remove VC meta tags
 */
require get_template_directory() . '/inc/remove_vc_meta_tags.php';

/**
 * Remove W3TC footer comment
 */
require get_template_directory() . '/inc/remove_W3TC_footer.php';

/**
 * Remove W3TC footer comment
 */
require get_template_directory() . '/inc/remove_YOAST_head_comments.php';