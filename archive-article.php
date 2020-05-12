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
            <?php  do_shortcode('[andyp_flickity slug="featured_article"]'); ?>
            <?php  do_shortcode('[andyp_flickity slug="essential_articles"]'); ?>
            <?php  do_shortcode('[andyp_flickity slug="library_updates"]'); ?>
            <?php  do_shortcode('[andyp_isotope slug="category_listing" tax="articlecategory"]');  ?>
        </div>
    </div>

    <!-- #sidebar -->
    <aside id="secondary" class="widget-area">
        <?php  do_shortcode('[andyp_responsive_menus menu="Tutorials" sidebar="sidebar-tutorials"]'); ?>
    </aside>

<?php get_footer(); ?>