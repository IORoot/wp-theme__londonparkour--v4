<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_stripe', 102 );

function ldnpk_deregister_stripe() {

    if ( is_page( 'classes' ) ) {
        return;   
    }

    // If this is the frontend, dequeue it.
    if ( !is_admin() ) {
        wp_dequeue_script('stripe-handler-ng');
        wp_dequeue_script('stripe-script');
        wp_dequeue_script('stripe-handler');

        wp_dequeue_style('stripe-handler-ng-style');
    }

}