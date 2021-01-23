<?php

function register_custom_theme_menus()
{
    register_nav_menus(
        array(
            'main-right' => 'Social Media',
            'sub-menu'   => 'Sub Menu'
        )
    );
}

add_action('init', 'register_custom_theme_menus');
