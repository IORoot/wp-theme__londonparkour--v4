<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package londonparkour.com_v4
 */

	$id = $post->ID;
	$link = $post->guid;
	$title = $post->post_title;
	$image = get_the_post_thumbnail_url($id);
	// Category description
	$desc = preg_replace('/\[(.*?)\]/', '', $post->post_content); // remove shortcodes
	$desc = preg_replace('/\<(.*?)\>/', '', $desc); // remove tags
	$content = mb_strimwidth( strip_tags($desc) , 0,200, '...');
	$date = human_time_diff( get_the_time( 'U', $id ), current_time( 'timestamp' ) );
?>

<article class="andyp-search__cell">
	<div class="pushin">
		<a class="andyp-search__cell-link" href="<?php echo $link; ?>">

			<div class="andyp-search__cell-meta andyp-search__cell-overlay">
				<i class="andyp-search__cell-icon material-icons">remove_red_eye</i>
			</div>

			<div class="andyp-search__cell-content">

				<img class="andyp-search__cell-meta andyp-search__cell-image lazyload" src="<?php echo $image; ?>" >

				<div class="andyp-search__cell-info">

					<div class="andyp-search__cell-meta andyp-search__cell-title ">
						<i class="andyp-search__cell-icon material-icons">play_circle_outline</i>
						<?php echo $title; ?>
					</div>

					<div class="andyp-search__cell-meta andyp-search__cell-description"><?php echo $content; ?></div>

					<!-- DATE -->
					<div class="andyp-search__cell-meta andyp-search__cell-date"><?php echo $date; ?> ago.</div>

				</div>

			</div>
		</a>
	</div>
</article>