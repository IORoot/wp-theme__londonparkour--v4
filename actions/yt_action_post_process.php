<?php

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                                                                         │
// │                 Update the main menu 'pulse' image.                     │
// │                                                                         │
// └─────────────────────────────────────────────────────────────────────────┘

add_action('yt_action_post_process', 'update_main_menu_pulse_image');


/**
 * update_main_menu_pulse_image function
 * 
 * The scrape array is the entire contents of the scrape to do whatever you like with it.
 *
 * @param [type] $scrape
 * @return void
 */
function update_main_menu_pulse_image($scrape)
{
    if (!$scrape){
        return;
    }
    if ($scrape['yt_scrape_group']['yt_scrape_id'] != "YouTube - Curated")
    {
        return;
    }

    $wp_query = [
        'post_type' => 'youtube',
        'post_status' => 'publish',
        'order' => 'DESC',
        'numberposts' => 1,
        'tax_query' => [
            [
                'taxonomy' => 'scrapercategory',
                'field' => 'slug',
                'terms' => 'youtube-curated'
            ],
        ],
    ];

    $latest_post = get_posts($wp_query);

    // Get the latest curated post image.
    $image_id = get_post_thumbnail_id($latest_post[0]->ID);


    $menu = wp_get_nav_menu_object('main-menu');
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $pulse = null;
    foreach($menu_items as $item) {
        if ($item->post_name == 'parkour-pulse-3')     // post_name of parkour pulse.
        {
            $pulse = $item;
            break;
        }
    }
    
    // $pulse_meta = get_post_meta($pulse->ID);
    // $pulse_mc_image = $pulse_meta['mc_image'];

    if ($image_id && $pulse->ID){
        update_post_meta($pulse->ID, 'mc_image', $image_id);
    }

    return;
}