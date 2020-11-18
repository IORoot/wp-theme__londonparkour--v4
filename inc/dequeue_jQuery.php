<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_jQuery', 101 );

function ldnpk_deregister_jQuery() {

    if ( 
        is_page( 'classes' ) ||
        is_page( 'mec' ) ||
        is_page( 'custom' ) ||
        is_page( 'bookings' ) ||
        is_page( 'youth' ) ||
        
        is_singular( 'mec-events' ) ||
        is_page( 'mec-events' ) ||
        is_archive( 'mec-events' )

    ) {
        return;   
    }

    // If this is the frontend, dequeue it.
    if ( !is_admin() ) {
        wp_dequeue_script('jquery');  wp_deregister_script('jquery');
    }

}