<?php

    /**
     * Taxonomy / Category Page
     * 
     * PAGE: londonparkour.com/article/articlecategory
     * 
     */

    get_header();

    //RANKMATH
	if( function_exists( 'rank_math_get_breadcrumbs' ) ) {
		echo '<div class="article__breadcrumbs"><p id="breadcrumbs">' . rank_math_get_breadcrumbs() . '</p></div>';
	}
    
?> 

    <!-- #content -->
    <div class="content-area">
        <div class="site-main">
            <?php //include get_template_directory().'/components/_search.php'; ?>
            <?php  do_shortcode('[andyp_grid_posts slug="taxonomy_latest" tax="articlecategory" term="'.$wp_query->query['articlecategory'].'"]'); ?>
            <?php  do_shortcode('[andyp_grid_posts slug="taxonomy_popular" tax="articlecategory" term="'.$wp_query->query['articlecategory'].'"]'); ?>
        </div>
    </div>

    <!-- #sidebar -->
    <aside id="secondary" class="widget-area">
        <?php  do_shortcode('[andyp_responsive_menus menu="Tutorials" sidebar="sidebar-tutorials"]'); ?>
    </aside>

<?php get_footer(); ?>
    
