<?php

function svg_mime_types($mimes) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'svg_mime_types');