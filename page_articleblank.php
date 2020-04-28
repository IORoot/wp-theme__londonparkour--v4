<?php 

/* 
Template Name: ArticleBlank - Page Type 
Template Post Type: page
*/

get_header();
?>

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

<?php get_footer(); ?>