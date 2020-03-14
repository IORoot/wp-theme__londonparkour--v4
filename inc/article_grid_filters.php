<?php

/**
 * Tidy up the titles on the dashboard
 */
function andyp_grid_cell_title($title) {

    $title = preg_replace( "/ - SlowMo/", "", $title );
    $title = preg_replace( "/ - side view/", "", $title );
    $title = preg_replace( "/ - back view/", "", $title );
    $title = preg_replace( "/ - front view/", "", $title );

    return $title;
}

add_filter('andyp-grid__cell-title', 'andyp_grid_cell_title');


/**
 * Append ' Videos' to the end of the count.
 */
function andyp_grid_cell_count($count) {

    return $count . ' videos';
}

add_filter('andyp-grid__cell-count', 'andyp_grid_cell_count');
