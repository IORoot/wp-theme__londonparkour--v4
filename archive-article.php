<?php

    /**
     * Archive Page
     * 
     * PAGE: londonparkour.com/article
     * 
     */

get_header();
?>

    <!-- #content -->
    <div class="content-area">
        <div class="site-main">
            <?php include get_template_directory().'/components/_search.php'; ?>
            <?php  do_shortcode('[andyp_grid_posts slug="essential_articles"]'); ?>
            <?php  do_shortcode('[andyp_grid_posts slug="featured_article"]'); ?>
            <?php  do_shortcode('[andyp_grid_tax slug="latest_tutorials"]'); ?>
            <?php  do_shortcode('[andyp_grid_posts slug="library_updates"]'); ?>
            <?php  do_shortcode('[andyp_tax_lister tax="articlecategory" title="Tutorial Categories"]'); ?>
        </div>
    </div>

    <!-- #sidebar -->
    <aside id="secondary" class="widget-area">
        <?php  do_shortcode('[andyp_responsive_menus menu="Tutorials" sidebar="sidebar-tutorials"]'); ?>
    </aside>

<?php get_footer(); ?>