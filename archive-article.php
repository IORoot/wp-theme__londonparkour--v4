<?php

    /**
     * Archive Page
     * 
     * PAGE: londonparkour.com/article
     * 
     */

    get_header();

    include get_template_directory().'/components/_breadcrumbs.php';

    // Get the taxonomy's terms
    $terms = get_terms( 
        array( 
            'taxonomy'   => 'articlecategory', 
            'hide_empty' => false,
        ) 
    );

    // Check for pagination.
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 0;

    // Get Posts
    $articles = get_posts([
        'post_type'         => 'article',
        'post_status'       => 'publish',
        'numberposts'       => 12,
        'offset'            => $paged * 12,
        'order'             => 'DESC'
    ]);

?>

<div class="articlelatest__hero">
    <H1 class="articlelatest__title">Articles, Videos & Tutorials</H1>
    <h2 class="articlelatest__subtitle">
        <?php echo '<span class="articlelatest__postcount">'. count($terms) . ' Playlists &bull; </span>' ;?>
        <?php echo '<span class="articlelatest__postcount">'. wp_count_posts( 'article' )->publish . ' Posts</span>' ;?>
    </H2>
</div>


<div class="articlelatest__content">

    <?php include get_template_directory().'/components/_search.php'; ?>

    <h2 class="archiveheader">All Categories</h2>

    <ul class="articlearchive-list">
        <?php
        // Check if any term exists
        if ( ! empty( $terms ) && is_array( $terms ) ) {

            foreach ( $terms as $term ) {
                // Colour
                $colour = get_field('taxonomy_colour', 'articlecategory_'.$term->term_id);
                $style = 'style="background-color:'.$colour.'"';

                echo '<li class="articlearchive-list__listitem liftup" '.$style.'>';
                    echo '<a href="' . esc_url( get_term_link( $term ) ) . '">';

                        // Category name
                        echo '<div class="articlearchive-list__title">'.$term->name.'</div>';

                        // Category items
                        echo '<div class="articlearchive-list__count">'.$term->count.'</div>';

                        // Play Icon
                        echo '<div class="articlearchive-list__arrow"><i class="material-icons icon icon--night"></i></div>'; 

                    echo '</a>';
                echo '</li>';
            }

        } 
        ?>
    </ul>


    <h2 class="archiveheader">Latest Posts</h2>

    <ul class="articlelatest-list">
        <?php
        // Check if any term exists
        if ( ! empty( $articles ) && is_array( $articles ) ) {

            foreach ( $articles as $article ) {
                echo '<li class="articlelatest-list__listitem liftup" >';
                    echo '<a href="' . esc_url( get_post_permalink($article->ID) ) . '">';

                        // Top Image / Colour
                        echo '<div class="articlelatest-list__hero">'.get_the_post_thumbnail($article->ID, 'large').'</div>';

                        // Category name
                        echo '<div class="articlelatest-list__title">'.$article->post_title.'</div>';

                        // Category description
                        echo '<div class="articlelatest-list__description">'.wp_trim_words($article->post_content,20).'</div>';

                        // Post date
                        echo '<div class="articlelatest-list__date">'.human_time_diff( get_the_time( 'U', $article->ID ), current_time( 'timestamp' ) ).' ago.</div>';

                        // Play Icon
                        echo '<div class="articlelatest-list__arrow"><i class="material-icons icon icon--lavender"></i></div>'; 

                    echo '</a>';
                echo '</li>';
            }
        }
        ?>
    </ul>

    <?php include get_template_directory().'/components/_pagination.php'; ?>

</div>

<?php get_footer(); ?>