<?php


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