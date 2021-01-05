<?php

function londonparkourv4_scripts() {
	wp_enqueue_style( 'londonparkourv4-style', get_stylesheet_uri() . '/css/style.css' );
	wp_enqueue_script( 'londonparkourv4-navigation', get_template_directory_uri() . '/js/navigation.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-progressbar', get_template_directory_uri() . '/js/progress_bar.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lazysizes-bgset', get_template_directory_uri() . '/js/lazysizes_plugins/ls.bgset.min.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lazysizes-unveil', get_template_directory_uri() . '/js/lazysizes_plugins/ls.unveilhooks.min.js', array(), null, true );
    wp_enqueue_script( 'londonparkourv4-lazysizes', get_template_directory_uri() . '/js/lazysizes.min.js', array(), null, true );
	wp_enqueue_script( 'londonparkourv4-lite-yt', get_template_directory_uri() . '/js/youtube-lite/lite-yt-embed.js', array(), null, true );
	
	wp_enqueue_script( 'londonparkourv4-tagmanager', get_template_directory_uri() . '/js/google_tag_manager.js', array(), null, false );

}
add_action( 'wp_enqueue_scripts', 'londonparkourv4_scripts' );