<?php
/**
 * Template part for displaying article posts VERSION 2
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package londonparkour.com_v4
 */

?>

<div class="article">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php 
			$videoId = get_post_meta($post->ID, 'videoId', true);
			$playlistOrder = get_post_meta($post->ID, 'playlistOrder', true);
		?>

		<div class="article__hero">
			<?php 
				if ($videoId == ''){
					the_post_thumbnail(null, ['class' => 'article__hero--image']);
				} else {
					echo '<iframe class="article__hero--video" id="ytplayer" type="text/html" src="https://www.youtube.com/embed/'. $videoId .'" frameborder="0"></iframe>';
				}
			?>
		</div>

		<div class="article__content">

			<div class="article__content--title">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="article__content--subtitle">
					<?php 
						$termlink = get_term_link( $articlecategory, 'articlecategory' );
						$categorylink = '<a href="'.$termlink.'" class="article__content--catlink">'.$articlecategory.'</a>';
						echo  $categorylink. ' &bull; ' . get_the_date(); 
					?>
				</div>
				
			</div>
			
			<div class="article__content--text">
				<?php the_content(); ?>
			</div>

			<?php if ($videoId != ''){ 
				echo '<a class="article__content--youtube-link" target="_blank" href="https://www.youtube.com/watch?v='.$videoId.'" ><span>Watch Original on YouTube</span></a>'; } 
			?>
			

		</div>

	</article>
</div>