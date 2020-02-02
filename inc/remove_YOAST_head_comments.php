<?php

/**
 * Disable Yoast's Hidden love letter about using the WordPress SEO plugin.
 */
add_action( 'template_redirect', function () {
 
    if ( ! class_exists( 'WPSEO_Frontend' ) ) {
        return;
    }
 
    $instance = WPSEO_Frontend::get_instance();
 
    // make sure, future version of the plugin does not break our site.
    if ( ! method_exists( $instance, 'debug_mark') ) {
        return ;
    }
 
    // ok, let us remove the love letter.
     remove_action( 'wpseo_head', array( $instance, 'debug_mark' ), 2 );
}, 9999 );