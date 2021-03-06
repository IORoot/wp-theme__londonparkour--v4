<?php

/*
Template Name: PulsePage - Page Type
Template Post Type: page
*/
do_shortcode('[andyp_spinner]');
get_header();
?>

    <?php
        // Add a form for the admin
        if (current_user_can('edit_posts')) {

            $url = '/pulse';
            if (isset($_SERVER['REDIRECT_URL'])) {
                $url = $_SERVER['REDIRECT_URL'];
            }

            echo '<form id="parkourpulse_admin" name="parkourpulse_admin" method="post" action="'.$url.'">';
        }
    ?>

    <?php do_shortcode('[andyp_flickity slug="'.get_field('header_flickity_slug').'"]'); ?>

    <!-- #sidebar -->
    <aside id="secondary" class="pulse-sidebar">
        <?php do_shortcode('[andyp_pulse_sidemenus menu="'.get_field('pulse_sidemenu_id').'"]'); ?>

        <?php
            if (current_user_can('edit_posts')) {
                echo '<iframe width="90%" height="100px" src="https://datastudio.google.com/embed/reporting/2efc6de3-d05f-4a12-9152-183511b97d4f/page/d4qbB" frameborder="0" style="border:0" allowfullscreen></iframe>';
            }
        ?>
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

    <?php
        // close form if an admin.
        if (current_user_can('edit_posts')) {
            echo '</form>';
        }

    ?>



<?php get_footer(); ?>