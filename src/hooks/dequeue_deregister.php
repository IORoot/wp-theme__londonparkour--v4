<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_styles', 100 );


function ldnpk_deregister_styles() {

    global $wp_scripts;
    // global $wp_styles;

    
    // Admin Bar needs this:
    // wp_deregister_script( "jquery" );
    // wp_deregister_style( 'dashicons' );                 // Wordpress dashicons / adminbar

    // Deregister CSS Styles
    wp_deregister_style( 'font-awesome-fa' );           
    wp_deregister_style( 'wp-block-library' );          
    wp_deregister_style( 'buttons' );          
    wp_deregister_style( 'imgareaselect' );         
    wp_deregister_style( 'thickbox' );          
    wp_deregister_style( 'react' );          
    wp_deregister_style( "rml-font" );          
    wp_deregister_style( "react-aiot.vendor" );          
    wp_deregister_style( "react-aiot" );          
    wp_deregister_style( "real-media-library-rml" );          
    wp_deregister_style( "wp-block-library" );          
    wp_deregister_style( "media-views" );          
    wp_deregister_style( "imgareaselect" );          
    wp_deregister_style( "wp-media-picker" );          

    // Deregister JS Scripts
    wp_deregister_script( "es6-shim" );
    wp_deregister_script( "es7-shim" );
    wp_deregister_script( "devowl-wp-utils" );
    wp_deregister_script( 'wp-embed' );
    wp_deregister_script( 'thickbox' );
    wp_deregister_script( 'wpb_composer_front_js' );
    wp_deregister_script( "react" );
    wp_deregister_script( "react-dom" );
    wp_deregister_script( "mobx" );
    wp_deregister_script( "jquery-ui-core" );
    wp_deregister_script( "jquery-touch-punch" );
    wp_deregister_script( "vendor-devowl-wp-utils" );
    wp_deregister_script( "underscore" );
    wp_deregister_script( "utils" );
    wp_deregister_script( "hoverintent-js" );
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