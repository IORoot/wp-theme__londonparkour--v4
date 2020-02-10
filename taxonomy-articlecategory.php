<?php

    /**
     * Taxonomy / Category Page
     * 
     * PAGE: londonparkour.com/article/articlecategory
     * 
     */

    get_header();
	
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<div class="article__breadcrumbs"><p id="breadcrumbs">','</p></div>' );
    }

    //RANKMATH
	if( function_exists( 'rank_math_get_breadcrumbs' ) ) {
		echo '<div class="article__breadcrumbs"><p id="breadcrumbs">' . rank_math_get_breadcrumbs() . '</p></div>';
	}
    
?> 

<div class="articlecategory__hero">
    <H1 class="articlecategory__title"><?php echo ucfirst($articlecategory); ?></H1>
    <h2 class="articlecategory__subtitle">
        <?php echo wp_trim_words($wp_query->queried_object->description, 30); ?>
        <?php echo '<div class="articlecategory__postcount">'.$wp_query->post_count . ' Posts.</div>' ;?>
    </H2>
    <?php
        $playlistID = get_field('youtube_playlist_id', 'articlecategory_'.$wp_query->queried_object->term_id);
        if ($playlistID != ''){
            echo '<a class="articlecategory__youtube-link" target="_blank" href="https://www.youtube.com/playlist?list='.$playlistID.'" ><span>Watch Playlist on YouTube</span></a>';
        }
    ?>
</div>

<div class="articlecategory__content">
    <ul class="articlecategory-list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
            <li class="articlecategory-list__listitem liftup">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php 
                        // Post index
                        echo '<div class="articlecategory-list__index">';
                            echo $wp_query->current_post+1 ;
                        echo '</div>';
                        
                        // Post image
                        the_post_thumbnail(null, ['class' => 'articlecategory-list__image']);

                        // Post Title
                        the_title( '<div class="articlecategory-list__title">', '</div>' );

                        // Post Category
                        $tax = get_the_terms($wp_query->post->ID, 'articlecategory');
                        echo  '<div class="articlecategory-list__tax">'. $tax[0]->name .'</div>';

                        // Arrow
                        echo '<div class="articlecategory-list__arrow"><i class="material-icons icon icon--lavender"></i></div>'; 
                    ?>
                </a> 
            </li>
        <?php endwhile; endif; ?>
    </ul>
</div>

<?php get_footer(); ?>
    
