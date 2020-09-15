<?php

/**
 * Plugin Name: WP Simple Pay - Conditionally dequeue scripts & styles
 * Plugin URI: https://wpsimplepay.com
 * Description: Conditionally dequeue scripts & styles based on set conditions.
 * Version: 1.1
 */

/**
 * From:
 * https://github.com/wpsimplepay/WP-Simple-Pay-Snippet-Library/blob/master/plugins/remove-scripts-styles.php
 * 
 * In this example, we remove all plugin scripts & styles unless the current page slug is "payment-page", "donate" or "subscribe". 
 * Available WP conditional tags: https://codex.wordpress.org/Conditional_Tags
 * Use priority greater than 10 when using with WP Simple Pay Pro.
 *
 * ​Please note that this also prevents Stripe.js from loading on the non-payment form pages.
 * From https://stripe.com/docs/stripe-js/reference#including-stripejs
 * To best leverage Stripe’s advanced fraud functionality, include this script on every page of your site, not just the checkout page.
 * This allows Stripe to detect anomalous behavior that may be indicative of fraud as customers browse your website.
 */

// The $scripts parameter is an array of all the scripts that need to be loaded for Simple Pay
function simpay_custom_remove_scripts( $scripts ) {

	$one = 1;

	if ( ! is_page( array( 'classes', 'bookings', 'youth' ) ) ) {
		// If we don't want to load any scripts then we can just return an empty array.
		return array();
	}

	// By default we return the $scripts array that is setup through the plugin
	return $scripts;
}

add_filter( 'simpay_before_register_public_scripts', 'simpay_custom_remove_scripts', 20 );



// The $style parameter is an array of all the styles that need to be loaded for Simple Pay
function simpay_custom_remove_styles( $styles ) {
	if ( ! is_page( array( 'classes', 'bookings', 'youth' ) ) ) {
		// If we don't want to load any styles then we can just return an empty array.
		return array();
	}

	// By default we return the $styles array that is setup through the plugin
	return $styles;
}

add_filter( 'simpay_before_register_public_styles', 'simpay_custom_remove_styles', 20 );



//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │   Dequeue & Deregister CSS Styles    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

add_action( 'wp_enqueue_scripts', 'ldnpk_deregister_stripe', 102 );

function ldnpk_deregister_stripe() {

    // match '/classes/' and '/class/adult'    
    if (preg_match('/\/class/', $_SERVER['REQUEST_URI']) )
    {
        return;
    }

    if ( is_page('bookings') ) {
        return;   
    }
    
    if ( is_page('youth') ) {
        return;   
    }

    // If this is the frontend, dequeue it.
    if ( !is_admin() ) {
        wp_dequeue_script('stripe-handler-ng');
        wp_dequeue_script('stripe-script');
        wp_dequeue_script('stripe-handler');
        wp_dequeue_script('mec-stripe');    // modern-events-calendar

        wp_dequeue_style('stripe-handler-ng-style');
    }

}