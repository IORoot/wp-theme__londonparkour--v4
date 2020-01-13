<?php
/**
 * Template part for displaying tutorial posts VERSION 2
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package londonparkour.com_v4
 */

?>

<div class="tutorial">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php 
			$videoId = get_post_meta($post->ID, 'videoId', true);
			$playlistOrder = get_post_meta($post->ID, 'playlistOrder', true);
		?>

		<div class="tutorial__hero">
			<?php 
				if ($videoId == ''){
					the_post_thumbnail(null, ['class' => 'tutorial__hero--image']);
				} else {
					echo '<iframe class="tutorial__hero--video" id="ytplayer" type="text/html" src="https://www.youtube.com/embed/'. $videoId .'" frameborder="0"></iframe>';
				}
			?>
		</div>

		<div class="tutorial__content">

			<div class="tutorial__content--title">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="tutorial__content--subtitle">
					<?php 
						$termlink = get_term_link( $tutorialcategory, 'tutorialcategory' );
						$categorylink = '<a href="'.$termlink.'" class="tutorial__content--catlink">'.$tutorialcategory.'</a>';
						echo  $categorylink. ' &bull; ' . get_the_date(); 
					?>
				</div>
				
			</div>
			
			<div class="tutorial__content--text">
				<?php the_content(); ?>
			</div>

			<?php if ($videoId != ''){ 
				echo '<a class="tutorial__content--youtube-link" target="_blank" href="https://www.youtube.com/watch?v='.$videoId.'" ><span>Watch Original on YouTube</span></a>'; } 
			?>
			

		</div>

	</article>
</div>