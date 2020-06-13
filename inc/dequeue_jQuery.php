<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_jQuery', 101 );

function ldnpk_deregister_jQuery() {

    if ( is_page( 'booking-2' ) ) {
        return;   
    }
    if ( is_page( 'classes' ) ) {
        return;   
    }

    // If this is the frontend, dequeue it.
    if ( !is_admin() ) {
        wp_dequeue_script('jquery');  wp_deregister_script('jquery');
    }

}