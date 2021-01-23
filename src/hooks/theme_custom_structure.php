<?php

function labs_add_template_folders( $templates ) {
    
    $custom_templates = [
        'src/views/404',
        'src/views/blog',
        'src/views/pages',
        'src/views/search',
    ];

    return array_merge($templates, $custom_templates);
}
add_filter( 'andyp_template_folders', 'labs_add_template_folders', 10, 1 );