<?php

function londonparkourv4_scripts() {

	/**
	 * The default CSS file
	 */
	wp_enqueue_style(  'default', get_template_directory_uri() . '/src/assets/css/style.css' );

	/**
	 * Custom Top Progress Bar
	 */
	// wp_enqueue_script( 'londonparkourv4-progressbar', get_template_directory_uri() . '/src/assets/js/progress_bar.js', array(), null, true );

	/**
	 * Lazyloading images.
	 * https://github.com/aFarkas/lazysizes
	 * 
	 * bgset 	   = allow responsive background images (https://github.com/aFarkas/lazysizes/tree/gh-pages/plugins/bgset)
	 * unveilhooks = background images, videos/posters and scripts 
	 */
	wp_enqueue_script( 'londonparkourv4-lazysizes-bgset', get_template_directory_uri() . '/src/assets/js/lazysizes_plugins/ls.bgset.min.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lazysizes-unveil', get_template_directory_uri() . '/src/assets/js/lazysizes_plugins/ls.unveilhooks.min.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lazysizes', get_template_directory_uri() . '/src/assets/js/lazysizes.min.js', array(), null, true );
	
	/**
	 * Youtube video loading
	 */
	wp_enqueue_script( 'londonparkourv4-lite-yt', get_template_directory_uri() . '/src/assets/js/youtube-lite/lite-yt-embed.js', array(), null, true );

	/**
	 * Google Tag Manager
	 */
	wp_enqueue_script( 'londonparkourv4-tagmanager', get_template_directory_uri() . '/src/assets/js/google_tag_manager.js', array(), null, false );

}
add_action( 'wp_enqueue_scripts', 'londonparkourv4_scripts' );