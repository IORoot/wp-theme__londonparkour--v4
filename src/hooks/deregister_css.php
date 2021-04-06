<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_css_styles', 100 );


function ldnpk_deregister_css_styles() {

    // global $wp_styles;
    global $wp_query;

    // Deregister CSS Styles      
    wp_deregister_style( 'wp-block-library' );          
    wp_deregister_style( 'af-form-style' );          

}