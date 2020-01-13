<?php

    /**
     * Archive Page
     * 
     * PAGE: londonparkour.com/tutorial
     * 
     */

    get_header();

    if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<div class="tutorial__breadcrumbs"><p id="breadcrumbs">','</p></div>' );
    }

    // Get the taxonomy's terms
    $terms = get_terms( 
        array( 
            'taxonomy'   => 'tutorialcategory', 
            'hide_empty' => false,
        ) 
    );

    $tutorials = get_posts([
        'post_type' => 'tutorial',
        'post_status' => 'publish',
        'numberposts' => 6,
        'order'    => 'DESC'
    ]);

    
?>

<div class="tutoriallatest__hero">
    <H1 class="tutoriallatest__title">Tutorials, Videos & Articles</H1>
    <h2 class="tutoriallatest__subtitle">
        <?php echo '<span class="tutoriallatest__postcount">'. count($terms) . ' Playlists &bull; </span>' ;?>
        <?php echo '<span class="tutoriallatest__postcount">'. count($posts) . ' Posts</span>' ;?>
    </H2>
</div>


<div class="tutoriallatest__content">

    <h2 class="archiveheader">All Categories</h2>

    <ul class="tutorialarchive-list">
        <?php
        // Check if any term exists
        if ( ! empty( $terms ) && is_array( $terms ) ) {

            foreach ( $terms as $term ) {
                // Colour
                $colour = get_field('taxonomy_colour', 'tutorialcategory_'.$term->term_id);
                $style = 'style="background-color:'.$colour.'"';

                echo '<li class="tutorialarchive-list__listitem liftup" '.$style.'>';
                    echo '<a href="' . esc_url( get_term_link( $term ) ) . '">';

                        // Category name
                        echo '<div class="tutorialarchive-list__title">'.$term->name.'</div>';

                        // Category items
                        echo '<div class="tutorialarchive-list__count">'.$term->count.'</div>';

                        // Play Icon
                        echo '<div class="tutorialarchive-list__arrow"><i class="material-icons icon icon--night"></i></div>'; 

                    echo '</a>';
                echo '</li>';
            }

        } 
        ?>

    </ul>

    <h2 class="archiveheader">Latest Posts</h2>

    <ul class="tutoriallatest-list">
        <?php
        // Check if any term exists
        if ( ! empty( $tutorials ) && is_array( $tutorials ) ) {

            foreach ( $tutorials as $tutorial ) {
                echo '<li class="tutoriallatest-list__listitem liftup" >';
                    echo '<a href="' . esc_url( get_post_permalink($tutorial->ID) ) . '">';

                        // Top Image / Colour
                        echo '<div class="tutoriallatest-list__hero">'.get_the_post_thumbnail($tutorial->ID, 'large').'</div>';

                        // Category name
                        echo '<div class="tutoriallatest-list__title">'.$tutorial->post_title.'</div>';

                        // Category description
                        echo '<div class="tutoriallatest-list__description">'.wp_trim_words($tutorial->post_content,20).'</div>';

                        // Post date
                        echo '<div class="tutoriallatest-list__date">'.human_time_diff( get_the_time( 'U', $tutorial->ID ), current_time( 'timestamp' ) ).' ago.</div>';

                        // Play Icon
                        echo '<div class="tutoriallatest-list__arrow"><i class="material-icons icon icon--lavender"></i></div>'; 

                    echo '</a>';
                echo '</li>';
            }
        }
        ?>
    </ul>

</div>

<?php get_footer(); ?>