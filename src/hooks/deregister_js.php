<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_js_scripts', 100 );


function ldnpk_deregister_js_scripts() {

    global $wp_scripts;

    // Deregister JS Scripts
    // wp_deregister_script( "es6-shim" );
    // wp_deregister_script( "es7-shim" );
    // wp_deregister_script( "devowl-wp-utils" );
    // wp_deregister_script( 'wp-embed' );
    // wp_deregister_script( 'thickbox' );
    // wp_deregister_script( 'wpb_composer_front_js' );
    // wp_deregister_script( "react" );
    // wp_deregister_script( "react-dom" );
    // wp_deregister_script( "mobx" );
    // wp_deregister_script( "jquery-ui-core" );
    // wp_deregister_script( "jquery-touch-punch" );
    // wp_deregister_script( "vendor-devowl-wp-utils" );
    // wp_deregister_script( "underscore" );
    // wp_deregister_script( "utils" );
    // wp_deregister_script( "hoverintent-js" );
}