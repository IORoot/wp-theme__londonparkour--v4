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

	}
endif;
add_action( 'after_setup_theme', 'londonparkourv4_setup' );


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue_scripts.php';

/**
 * Register Sidebars and Widgets.
 */
require get_template_directory() . '/inc/defer_all_js.php';

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
 * DEqueue jQuery
 */
require get_template_directory() . '/inc/dequeue_jQuery.php';

/**
 * DEqueue jQUery
 */
require get_template_directory() . '/inc/dequeue_stripe.php';

/**
 * DEqueue MEC
 */
require get_template_directory() . '/inc/deregister_MEC.php';

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

/**
 * Fix The string “https://api.w.org/” is not a registered keyword
 */
require get_template_directory() . '/inc/fix_wp_api_discovery.php';

/**
 * Enable SVGs to be uploaded and used.
 */
require get_template_directory() . '/inc/svg_enable.php';

/**
 * Redesign the article grids.
 */
require get_template_directory() . '/inc/article_grid_filters.php';

/**
 * Turn off notifications for ACF and Forms Pro
 */
require get_template_directory() . '/inc/turn_off_plugin_updates.php';

/**
 * ACTIONS
 */
// require get_template_directory() . '/actions/yt_action_post_process.php';
require get_template_directory() . '/actions/admin_css.php';