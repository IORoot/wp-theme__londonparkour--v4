<?php

/**
 * 
 * These hook into the andyp_theme_custom_Structure plugin.
 * Adds more template locations to look into.
 * 
 */
function labs_add_template_folders( $templates ) {
    
    $custom_templates = [
        'src/views/404',
        'src/views/search',
        'src/views/partials',
    ];

    return array_merge($templates, $custom_templates);
}
add_filter( 'andyp_template_folders', 'labs_add_template_folders', 10, 1 );