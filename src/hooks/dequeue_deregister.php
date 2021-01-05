<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_styles', 100 );

function ldnpk_deregister_styles() {

    // Admin Bar needs this:
    // wp_deregister_style( 'dashicons' );                 // Wordpress dashicons / adminbar
    wp_dequeue_style( 'dashicons' );            // Wordpress dashicons


    // Dequeue CSS Styles
    wp_dequeue_style( 'font-awesome' );
    wp_dequeue_style( 'super-font-awesome' );   // Super Forms
    wp_dequeue_style( 'rs-icon-set-pe-7s-' );   // revslider Icon-7
    wp_dequeue_style( 'font-awesome-fa' );      // real-media-library
    wp_dequeue_style( 'smile_fonts' );          // Ultimate_VC_Addons
    wp_dequeue_style( 'wp-block-library' );     // Guttenburg blocks
    wp_dequeue_style( 'js_composer_custom_css' );   // WPBakery - custom

    // Deregister CSS Styles
    wp_deregister_style( 'font-awesome' );
    wp_deregister_style( 'super-font-awesome' );        // Super Forms
    wp_deregister_style( 'rs-icon-set-pe-7s-' );        // revslider Icon-7
    wp_deregister_style( 'font-awesome-fa' );           // real-media-library
    wp_deregister_style( 'smile_fonts' );               // Ultimate_VC_Addons\
    wp_deregister_style( 'wp-block-library' );          // Guttenburg blocks
    wp_deregister_style( 'js_composer_custom_css' );    // WPBakery - custom
    wp_deregister_style( 'wp-my-instagram' );           // Instagram plugin

    // This is replaced in the sass/vendor/js_composer.sass file so we
    // can remove bits not needed.
    wp_deregister_style( 'js_composer_front' );       // WPBakery - frontend

    // Deregister JS Scripts
    wp_deregister_script( 'wp-embed' );
    wp_deregister_script( 'thickbox' );
    wp_deregister_script( 'wpb_composer_front_js' );
}


//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │ Dequeue & Deregister jQuery Migrate  │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );


//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │     Dequeue & Deregister XMLRPC      │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
remove_action ('wp_head', 'rsd_link');
add_filter('xmlrpc_enabled', '__return_false');


//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │       Remove Wordpress Version       │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
function ldnpk_remove_version() {
	return '';
}
add_filter('the_generator', 'ldnpk_remove_version');

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │     Remove Wordpress Emoji shit      │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │         Remove DNS-Prefetch          │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
remove_action( 'wp_head', 'wp_resource_hints', 2 );