<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package londonparkour.com_v4
 */

get_header();
?>

	<main>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'src/template-parts/content', get_post_type() );

		endwhile;
		?>

	</main>


<?php
get_sidebar();
get_footer();
