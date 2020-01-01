<?php

/* 
Template Name: Blank Page Type 
Template Post Type: page
*/

get_header();
?>

<style>
	.site-content {margin:87px;}
	.site-footer {display:none;}
</style>

<main class="blank">

        <?php
        while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
        ?>

</main><!-- #main -->

<?php
get_footer();