<?php 

/* 
Template Name: article Page Type 
Template Post Type: article
*/ 

get_header();
?>
	
	<!-- Breadcrumbs -->
	<?php 
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<div class="article__breadcrumbs"><p id="breadcrumbs">','</p></div>' );
	}
	?>

	<?php
	while ( have_posts() ) :
		the_post();

		// Links to template-parts/content-article.php
		get_template_part( 'template-parts/content', 'article' );

	endwhile;
	?>
	
<?php
get_footer();