<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package londonparkour.com_v4
 */

get_header();
?>
	<main>

		<section>
			<div>
				
				<?php
					$content_post = get_post(5614);
					$content = $content_post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					echo $content;
				?>
				
			</div>
		</section>

	</main>

<?php
get_footer();
