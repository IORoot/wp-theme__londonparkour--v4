<?php

// Add a DEFER parameter into all JS scripts.
if (!(is_admin())) {
    function defer_js($url) {
        if (FALSE === strpos($url, '.js')) return $url;
        if (strpos($url, 'jquery.js')) return $url;
        return "$url' defer onload='";
    }
    add_filter('clean_url', 'defer_js', 11, 1);
}
