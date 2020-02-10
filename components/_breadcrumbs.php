<?php
/*                                                                              
*   ┌─────────────────────────────────────────────────────────────────────────┐ 
*   │                                                                         │░
*   │                               Breadcrumbs                               │░
*   │                                                                         │░
*   │                            Used on /articles                            │░
*   │                                                                         │░
*   └─────────────────────────────────────────────────────────────────────────┘░
*    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
*/                                                                              

//YOAST
if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div class="article__breadcrumbs"><p id="breadcrumbs">','</p></div>' );
}

//RANKMATH
if( function_exists( 'rank_math_get_breadcrumbs' ) ) {
    echo '<div class="article__breadcrumbs"><p id="breadcrumbs">' . rank_math_get_breadcrumbs() . '</p></div>';
}

?>
