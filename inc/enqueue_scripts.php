<?php

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