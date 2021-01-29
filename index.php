<?php

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

			get_template_part( 'src/views/partials/content', 'none' );

		}
		?>

	</main>

<?php
get_footer();
