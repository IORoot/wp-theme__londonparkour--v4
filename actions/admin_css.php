<?php

add_action('admin_head', 'my_custom_css');

function my_custom_css() {

    $path = get_template_directory();
    $css = file_get_contents( $path . '/admin.css');

    echo '<style>'.$css.'</style>';

}