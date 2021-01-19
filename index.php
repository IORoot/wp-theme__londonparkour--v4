<?php
$page_classes = get_field('page_classes');

get_header();

?>


	<main class="<?php echo $page_classes; ?>">

		<?php
        if (have_posts()) {

            while (have_posts()) {

				the_post();

				get_template_part('src/template-parts/content', get_post_type());

			}

			the_posts_navigation();
			
        } else {

			get_template_part( 'src/template-parts/content', 'none' );

		}
		?>

	</main>


<?php
get_footer();
