<?php

add_filter( 'body_class', 'add_body_classes');

function add_body_classes( $classes ) {
     if ( is_page(3071) ) $classes[] = 'main-navigation--white';
 
     return $classes; 
}