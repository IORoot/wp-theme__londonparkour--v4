<?php 

/* 
Template Name: Tutorial Page Type 
Template Post Type: tutorial
*/ 


get_header();
?>

	<!-- Breadcrumbs -->
	<?php 
	if( function_exists( 'rank_math_get_breadcrumbs' ) ) {
		echo '<div class="article__breadcrumbs"><p id="breadcrumbs">' . rank_math_get_breadcrumbs() . '</p></div>';
	}
	?>



	<?php
	while ( have_posts() ) :
		the_post();

		// Links to template-parts/content-article.php
		get_template_part( 'template-parts/content', 'tutorial' );

	endwhile;
	?>
	<?php echo "FILE IS : " . __FILE__ ?>
<?php
get_footer();