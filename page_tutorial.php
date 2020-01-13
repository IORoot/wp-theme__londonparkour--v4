<?php 

/* 
Template Name: Tutorial Page Type 
Template Post Type: tutorial
*/ 

get_header();
?>
	
	<!-- Breadcrumbs -->
	<?php 
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<div class="tutorial__breadcrumbs"><p id="breadcrumbs">','</p></div>' );
	}
	?>

	<?php
	while ( have_posts() ) :
		the_post();

		// Links to template-parts/content-tutorial.php
		get_template_part( 'template-parts/content', 'tutorial' );

	endwhile;
	?>
	
<?php
get_footer();