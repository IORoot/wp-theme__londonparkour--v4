<?php

	
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package londonparkour.com_v4
 */

get_header();
?>

	<div>
		<main>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'src/template-parts/content', 'page' );

		endwhile;
		?>

		</main>
	</div>

<?php
//get_sidebar();
get_footer();
