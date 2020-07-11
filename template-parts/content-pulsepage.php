<?php
/**
 * Template part for displaying pulse pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package londonparkour.com_v4
 */
?>

<div class="pulsepage">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</article>
</div>