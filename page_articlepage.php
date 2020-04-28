<?php 

/* 
Template Name: ArticlePage - Page Type 
Template Post Type: page
*/

get_header();
?>

    <?php  do_shortcode('[andyp_grid_posts slug="pulse_header"]'); ?>

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
        <?php  do_shortcode('[andyp_responsive_menus menu="Tutorials" sidebar="sidebar-tutorials"]'); ?>
    </aside>

<?php get_footer(); ?>