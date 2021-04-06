<?php

/**
 * Add featured Image support
 */
require get_template_directory() . '/src/hooks/featured_image_support.php';

/**
 * Register menus
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
 * Remove <p> tags automatically added by wordpress
 */
require get_template_directory() . '/src/hooks/remove_p_tags.php';

/**
 * Remove W3TC footer comment
 */
require get_template_directory() . '/src/hooks/remove_W3TC_footer.php';

/**
 * Enable SVGs to be uploaded and used.
 */
require get_template_directory() . '/src/hooks/svg_webp_enable.php';

/**
 * Turn off notifications for ACF and Forms Pro
 */
require get_template_directory() . '/src/hooks/turn_off_plugin_updates.php';

/**
 * Add custom menu locations
 */
require get_template_directory() . '/src/hooks/menu_locations.php';

/**
 * Remove Frontend HTML extras
 */
require get_template_directory() . '/src/hooks/remove_html_extras.php';

/**
 * Remove Frontend Styles
 */
require get_template_directory() . '/src/hooks/deregister_css.php';

/**
 * Remove Frontend Scripts
 */
require get_template_directory() . '/src/hooks/deregister_js.php';

/**
 * Remove jquery migrate
 */
require get_template_directory() . '/src/hooks/deregister_jquery_migrate.php';

/**
 * Remove Frontend Styles & Scripts
 */
// require get_template_directory() . '/src/hooks/deregister_acf_styles.php';

/**
 * Remove Frontend Styles & Scripts
 */
require get_template_directory() . '/src/hooks/remove_all_thumbnail_sizes.php';

/**
 * Add new custom folders for themes to look in.
 */
require get_template_directory() . '/src/hooks/theme_custom_structure.php';

/**
 * Add new custom folders for themes to look in.
 */
require get_template_directory() . '/src/hooks/theme_partials.php';

/**
 * Search filters
 */
require get_template_directory() . '/src/hooks/search.php';

/**
 * Create custom success message for contact form.
 * (the textarea in the advanceed-custom-forms puts <p> tags around everything and
 * messes up the HTML)
 */
require get_template_directory() . '/src/hooks/contact_success_message.php';