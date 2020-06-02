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
    if ($scrape['yt_scrape_group']['yt_scrape_id'] != "YouTube - 🔮Curated")
    {
        return;
    }

    $wp_query = "[
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
    ]";

    $wp_query = preg_replace( "/\r|\n/", "", $wp_query );
    $wp_query = eval("return $wp_query;");
    $latest_post = get_posts($wp_query);

    // Get the latest curated post image.
    $image_id = get_post_thumbnail_id($latest_post[0]->ID);

    if ($image_id){
        // Update the postmeta ID for the menu image.
        update_metadata_by_mid('post', 115599, $image_id);
    }

    return;
}