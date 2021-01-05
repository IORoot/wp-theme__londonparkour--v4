<?php

    /**
     * Taxonomy / Category Page
     * 
     * PAGE: londonparkour.com/tutorial/tutorialcategory
     * 
     */

    get_header();

?> 

    <!-- #content -->
    <div class="content-area">
        <div class="site-main">
            <?php //include get_template_directory().'/components/_search.php'; ?>
            <?php  

                // ┌─────────────────────────────────────────────────────────────────────────┐
                // │                                                                         │
                // │                   Reference Library (looks different)                   │
                // │                                                                         │
                // └─────────────────────────────────────────────────────────────────────────┘
                if ($wp_query->query['tutorial_category'] == 'reference-library'){ 
                    do_shortcode('[andyp_flickity slug="reference_library_popular" tax="tutorial_category" term="'.$wp_query->query['tutorial_category'].'"]');
                    do_shortcode('[andyp_isotope slug="reference_library_default" tax="tutorial_category" term="'.$wp_query->query['tutorial_category'].'"]'); 

                // ┌─────────────────────────────────────────────────────────────────────────┐
                // │                                                                         │
                // │                           All other Categories                          │
                // │                                                                         │
                // └─────────────────────────────────────────────────────────────────────────┘
                } elseif ($wp_query->query['tutorial_category'] == 'tutorials') {
                    do_shortcode('[andyp_isotope slug="category_listing" tax="tutorial_category"]'); 
                
                // ┌─────────────────────────────────────────────────────────────────────────┐
                // │                                                                         │
                // │                           All other Categories                          │
                // │                                                                         │
                // └─────────────────────────────────────────────────────────────────────────┘
                } else {
                    do_shortcode('[andyp_flickity slug="taxonomy_latest" tax="tutorial_category" term="'.$wp_query->query['tutorial_category'].'"]');
                    do_shortcode('[andyp_flickity slug="taxonomy_popular" tax="tutorial_category" term="'.$wp_query->query['tutorial_category'].'"]');
                    do_shortcode('[andyp_isotope slug="taxonomy_default" tax="tutorial_category" term="'.$wp_query->query['tutorial_category'].'" ]'); 
                }
                
            ?>
        </div>
    </div>

    <!-- #sidebar -->
    <aside id="secondary" class="widget-area">
        <?php  do_shortcode('[andyp_responsive_menus menu="Tutorials" sidebar="sidebar-tutorials"]'); ?>
    </aside>

<?php get_footer(); ?>
    
