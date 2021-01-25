<article <?php post_class(); ?>>

	<?php get_the_post_thumbnail(); ?>

	<?php the_content(); ?>
	
	<?php echo basename(__FILE__); ?>

</article>
