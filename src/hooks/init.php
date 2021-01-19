<?php

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/src/hooks/register_nav_menus.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/src/hooks/enqueue_scripts.php';

/**
 * Register Sidebars and Widgets.
 */
require get_template_directory() . '/src/hooks/defer_all_js.php';

/*
 * Remove Gutenberg bullshit
 */
require get_template_directory() . '/src/hooks/disable_gutenberg.php';

/**
 * DEqueue jQuery
 */
require get_template_directory() . '/src/hooks/dequeue_jQuery.php';

/**
 * Remove Frontend Styles & Scripts
 */
require get_template_directory() . '/src/hooks/dequeue_deregister.php';

/**
 * Remove <p> tags automatically added by wordpress
 */
require get_template_directory() . '/src/hooks/remove_p_tags.php';

/**
 * Remove VC meta tags
 */
require get_template_directory() . '/src/hooks/remove_vc_meta_tags.php';

/**
 * Remove W3TC footer comment
 */
require get_template_directory() . '/src/hooks/remove_W3TC_footer.php';

/**
 * Enable SVGs to be uploaded and used.
 */
require get_template_directory() . '/src/hooks/svg_enable.php';

/**
 * Turn off notifications for ACF and Forms Pro
 */
require get_template_directory() . '/src/hooks/turn_off_plugin_updates.php';

/**
 * Add custom menu locations
 */
require get_template_directory() . '/src/hooks/menu_locations.php';
