<?php

function andyp_grid_cell_title($title) {

    // Remove ' - Si'
    $title = preg_replace( "/ - SlowMo/", "", $title );
    $title = preg_replace( "/ - side view/", "", $title );
    $title = preg_replace( "/ - back view/", "", $title );
    $title = preg_replace( "/ - front view/", "", $title );

    // Remove ' - Parkour Reference'
    // $title = preg_replace( "/ - Parkour Reference/", "", $title );

    return $title;
}

add_filter('andyp-grid__cell-title', 'andyp_grid_cell_title');
