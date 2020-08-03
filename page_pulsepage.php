<?php

/*
Template Name: PulsePage - Page Type
Template Post Type: page
*/
do_shortcode('[andyp_spinner]');
get_header();
?>


    <?php do_shortcode('[andyp_flickity slug="'.get_field('header_flickity_slug').'"]'); ?>

    <!-- #sidebar -->
    <aside id="secondary" class="pulse-sidebar">
        <?php do_shortcode('[andyp_pulse_sidemenus menu="'.get_field('pulse_sidemenu_id').'"]'); ?>
    </aside>

    <!-- #content -->
    <div class="content-area">
        <div class="site-main">
            <?php
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', 'pulsepage');
            endwhile;
            ?>
        </div>
    </div>


<?php get_footer(); ?>