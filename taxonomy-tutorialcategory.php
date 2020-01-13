<?php

    /**
     * Taxonomy / Category Page
     * 
     * PAGE: londonparkour.com/tutorial/tutorialcategory
     * 
     */

    get_header();
	
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<div class="tutorial__breadcrumbs"><p id="breadcrumbs">','</p></div>' );
    }
    
    
?> 

<div class="tutorialcategory__hero">
    <H1 class="tutorialcategory__title"><?php echo ucfirst($tutorialcategory); ?></H1>
    <h2 class="tutorialcategory__subtitle">
        <?php echo wp_trim_words($wp_query->queried_object->description, 30); ?>
        <?php echo '<div class="tutorialcategory__postcount">'.$wp_query->post_count . ' Posts.</div>' ;?>
    </H2>
    <?php
        $playlistID = get_field('youtube_playlist_id', 'tutorialcategory_'.$wp_query->queried_object->term_id);
        if ($playlistID != ''){
            echo '<a class="tutorialcategory__youtube-link" target="_blank" href="https://www.youtube.com/playlist?list='.$playlistID.'" ><span>Watch Playlist on YouTube</span></a>';
        }
    ?>
</div>

<div class="tutorialcategory__content">
    <ul class="tutorialcategory-list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
            <li class="tutorialcategory-list__listitem liftup">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php 
                        // Post index
                        echo '<div class="tutorialcategory-list__index">';
                            echo $wp_query->current_post+1 ;
                        echo '</div>';
                        
                        // Post image
                        the_post_thumbnail(null, ['class' => 'tutorialcategory-list__image']);

                        // Post Title
                        the_title( '<div class="tutorialcategory-list__title">', '</div>' );

                        // Post Category
                        $tax = get_the_terms($wp_query->post->ID, 'tutorialcategory');
                        echo  '<div class="tutorialcategory-list__tax">'. $tax[0]->name .'</div>';

                        // Arrow
                        echo '<div class="tutorialcategory-list__arrow"><i class="material-icons icon icon--lavender"></i></div>'; 
                    ?>
                </a> 
            </li>
        <?php endwhile; endif; ?>
    </ul>
</div>

<?php get_footer(); ?>
    
