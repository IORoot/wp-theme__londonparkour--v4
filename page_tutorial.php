<?php 

/* 
Template Name: Tutorial Page Type 
Template Post Type: tutorial
*/ 

get_header();
?>

	<div class="content-area tutorial">
    
		<main class="tutorial__content">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();