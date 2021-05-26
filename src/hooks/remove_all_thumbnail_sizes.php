<?php

// add_filter( 'intermediate_image_sizes', '__return_empty_array', 999);
add_filter( 'intermediate_image_sizes', 'intermediate_images', 999);

function intermediate_images($images) 
{
    return [ 'thumbnail' ];
}
