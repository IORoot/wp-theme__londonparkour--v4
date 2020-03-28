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

?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<h2 class="searchresults-title">
				<?php 
					printf( esc_html__( 'Search Results for: %s', 'londonparkourv4' ), '<span>' . get_search_query() . '</span>' ); 

					echo '<span class="searchresults__count">' . $wp_query->found_posts . ' results</span>';
					
				?>
			</h2>

			<div class="searchresults__search-bar"><?php do_shortcode('[articles_searchbar]'); ?></div>

			<?php include get_template_directory().'/components/_pagination.php'; ?>


			<div class="searchresults">
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'search' );
				endwhile;

				?>
			</div>

			<?php include get_template_directory().'/components/_pagination.php'; ?>

		<?php else : get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<!-- #sidebar -->
<aside id="secondary" class="widget-area">
	<?php  do_shortcode('[andyp_responsive_menus menu="Tutorials" sidebar="sidebar-tutorials"]'); ?>
</aside>

<?php
get_footer();