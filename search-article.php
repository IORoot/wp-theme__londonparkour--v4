<?php
//  ┌─────────────────────────────────────────────────────────────────────────┐ 
//  │                                                                         │░
//  │                                                                         │░
//  │                        Search page for Articles                         │░
//  │                                                                         │░
//  │                                                                         │░
//  └─────────────────────────────────────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package londonparkour.com_v4
 */

get_header();

include get_template_directory().'/components/_breadcrumbs.php';

?>
<div class="articlesearch">

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			do_shortcode('[articles_searchbar]'); 
			//include get_template_directory().'/components/_search.php'; 
		?>

		<?php if ( have_posts() ) : ?>

			<h2 class="searchresults-title">
				<?php printf( esc_html__( 'Search Results for: %s', 'londonparkourv4' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h2>
			<div class="searchresults">
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'search' );
				endwhile;

				?>
			</div>
		<?php 
			include get_template_directory().'/components/_pagination.php';

		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->
</div>

<?php
get_footer();