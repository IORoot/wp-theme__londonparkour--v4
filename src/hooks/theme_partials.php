<?php


/**
 * searchform.php location
 * https://wordpress.org/support/topic/change-location-of-searchform-php/
 */
function custom_get_search_form( $search_form ) {

    $template_filename = custom_get_partial_path('searchform');

    ob_start();
    include($template_filename);
    $template=ob_get_contents(); 
    ob_end_clean();

    return $template;
}

function custom_get_partial_path( $type ) {
    $templates[] = "src/views/partials/{$type}.php";
    $templates[] = "{$type}.php";
    $template = locate_template( $templates, false, false );
    return $template;
}


add_filter("get_search_form", 'custom_get_search_form');