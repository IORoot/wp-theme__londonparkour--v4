<?php

// add_filter( 'intermediate_image_sizes', '__return_empty_array', 999);
add_filter( 'intermediate_image_sizes', 'image_sizes_to_generate', 999);

function image_sizes_to_generate($default_sizes)
{
    $new_sizes = [
        'thumbnail',
        'medium',
        'large'
    ];
    return $new_sizes;
}