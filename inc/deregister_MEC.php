<?php

//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_MEC', 101 );

function ldnpk_deregister_MEC() {

    if ( 
        is_page( 'mec' )  ||
        is_singular( 'class' ) ||
        is_singular( 'classes' ) ||
        is_singular( 'mec-events' ) ||
        is_page( 'classes' ) ||
        is_page( 'mec-events' ) ||
        is_archive( 'mec-events' )
    ) {
        return;   
    }

    // If this is the frontend, dequeue it.
    if ( !is_admin() ) {
        wp_dequeue_script('jquery-ui-datepicker');
        wp_dequeue_script('mec-typekit-script');
        wp_dequeue_script('mec-featherlight-script');
        wp_dequeue_script('mec-select2-script');
        wp_dequeue_script('mec-frontend-script');
        wp_dequeue_script('mec-tooltip-script');
        wp_dequeue_script('mec-events-script');
        wp_dequeue_script('mec-lity-script');
        wp_dequeue_script('mec-colorbrightness-script');
        wp_dequeue_script('mec-owl-carousel-script');
        wp_dequeue_script('recaptcha');

        wp_dequeue_style( 'mec-font-icons' );
        wp_dequeue_style( 'mec-frontend-style' );
        wp_dequeue_style( 'mec-tooltip-style' );
        wp_dequeue_style( 'mec-tooltip-shadow-style' );
        wp_dequeue_style( 'mec-featherlight-style' );
        wp_dequeue_style( 'mec-frontend-rtl-style' );
        wp_dequeue_style( 'mec-google-fonts' );
        wp_dequeue_style( 'mec-dynamic-styles' );
        wp_dequeue_style( 'mec_gfont' );
        wp_dequeue_style( 'mec-lity-style' );
        wp_dequeue_style( 'mec-select2-style' );
    }

}