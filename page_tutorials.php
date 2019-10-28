<?php 

/* 
Template Name: Tutorials Page Type 
Template Post Type: mobilepages, page
*/ 

get_header();
?>

	<div class="content-area tutorials">
    
        <aside class="tutorials__sidebar">
            <?php dynamic_sidebar( 'sidebar-tutorials' ); ?>
        </aside><!-- #tutorial-sidebar -->

		<main class="tutorials__content">

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