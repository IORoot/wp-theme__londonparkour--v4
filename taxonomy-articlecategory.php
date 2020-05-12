<?php

    /**
     * Taxonomy / Category Page
     * 
     * PAGE: londonparkour.com/article/articlecategory
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
                if ($wp_query->query['articlecategory'] == 'reference-library'){ 
                    do_shortcode('[andyp_flickity slug="reference_library_popular" tax="articlecategory" term="'.$wp_query->query['articlecategory'].'"]');
                    do_shortcode('[andyp_isotope slug="reference_library_default" tax="articlecategory" term="'.$wp_query->query['articlecategory'].'"]'); 

                // ┌─────────────────────────────────────────────────────────────────────────┐
                // │                                                                         │
                // │                           All other Categories                          │
                // │                                                                         │
                // └─────────────────────────────────────────────────────────────────────────┘
                } elseif ($wp_query->query['articlecategory'] == 'tutorials') {
                    do_shortcode('[andyp_isotope slug="category_listing" tax="articlecategory"]'); 
                
                // ┌─────────────────────────────────────────────────────────────────────────┐
                // │                                                                         │
                // │                           All other Categories                          │
                // │                                                                         │
                // └─────────────────────────────────────────────────────────────────────────┘
                } else {
                    do_shortcode('[andyp_flickity slug="taxonomy_latest" tax="articlecategory" term="'.$wp_query->query['articlecategory'].'"]');
                    do_shortcode('[andyp_flickity slug="taxonomy_popular" tax="articlecategory" term="'.$wp_query->query['articlecategory'].'"]');
                    do_shortcode('[andyp_isotope slug="taxonomy_default" tax="articlecategory" term="'.$wp_query->query['articlecategory'].'" ]'); 
                }
                
            ?>
        </div>
    </div>

    <!-- #sidebar -->
    <aside id="secondary" class="widget-area">
        <?php  do_shortcode('[andyp_responsive_menus menu="Tutorials" sidebar="sidebar-tutorials"]'); ?>
    </aside>

<?php get_footer(); ?>
    
