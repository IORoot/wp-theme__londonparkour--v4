<?php

/**
 * Redirect CPTs to plural pages.
 */
if ($post_type == 'tutorial' || $post_type == 'blog' || $post_type == 'demonstration' )
{
	$location = 'Location: '. WP_HOME.'/' . $post_type . 's';
	header($location);
	exit();
}


$page_classes = get_field('page_classes');

get_header();

?>

	<main class="<?php echo $page_classes; ?>">

		<?php
        if (have_posts()) {

            while (have_posts()) {

				the_post();

				$post_type = get_post_type();

				get_template_part('src/views/partials/content', $post_type);

			}

			the_posts_navigation();
			
        } else {

			include( __DIR__ . '/src/views/404/404.php');

		}
		?>

	</main>

<?php
get_footer();
