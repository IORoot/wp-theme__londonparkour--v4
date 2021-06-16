<?php

    /**
     * The default search from the URL
     */
    global $wp_query;
    $args = $wp_query->query_vars;

    /**
     * Add taxonomy to the search.
     */
    if ($_GET['glyph_cat']){
        $tax_query = [
            'relation' => 'OR',
            [
                'taxonomy' => 'tutorial_category',
                'field'    => 'slug',
                'terms'    => $_GET['glyph_cat'],
            ],
            [
                'taxonomy' => 'demonstration_category',
                'field'    => 'slug',
                'terms'    => $_GET['glyph_cat'],
            ],
            [
                'taxonomy' => 'blog_category',
                'field'    => 'slug',
                'terms'    => $_GET['glyph_cat'],
            ],
        ];
        
        $args['tax_query'] = $tax_query;
    }


    if(isset($args['s']))
    {
        $wp_query = new WP_Query($args);
    }