<?php

// Add a DEFER parameter into all JS scripts.
if (!(is_admin())) {
    function defer_js($url) {
        if (FALSE === strpos($url, '.js')) return $url;

        // Exception list
        if (strpos($url, 'jquery.js')) return $url;                 // JQuery needed to be loaded up first.
        if (strpos($url, 'acf-input.min.js')) return $url;          // ACF needed to be loaded before the contact page scripts.
        if (strpos($url, 'acf-pro-input.min.js')) return $url;      // ACF needed to be loaded before the contact page scripts.
        
        return "$url' defer onload='";
    }
    add_filter('clean_url', 'defer_js', 11, 1);
}
