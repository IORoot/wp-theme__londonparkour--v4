<?php 

/* 
Template Name: ArticlePage - Page Type 
Template Post Type: page
*/

get_header();
?>

    <?php  do_shortcode('[andyp_flickity slug="pulse_header"]'); ?>

    <!-- #content -->
    <div class="content-area">
        <div class="site-main">
            <?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'articlepage' );
			endwhile;
			?>
        </div>
    </div>

    <!-- #sidebar -->
    <aside id="secondary" class="widget-area">
        <?php  
            // 'menu' is the mobile menu
            // 'sidebar' is the widget sidebar. (see theme /inc/register_sidebars.php)
            do_shortcode('[andyp_responsive_menus menu="141" sidebar="sidebar-pulse"]'); 
        ?>
    </aside>

<?php get_footer(); ?>