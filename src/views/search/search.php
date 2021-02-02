<style>
	.current { color:#38EF7D; }
</style>
<?php

get_header();

$isotope_library = ANDYP_PAGEBUILDER_ISOTOPE_URL.'src/js/isotope.min.js';

// -------------------------- TEMPLATE START ------------------------------
?>




	<main class="bg-black block px-4 md:px-10 pb-10 text-white">

		<?php include( __DIR__.'/../partials/search_query.php' ); ?>
		<?php include( __DIR__.'/../partials/search_pagination.php' ); ?>

		<ul class="grid-ul">

		<?php while (have_posts()) {

			the_post();

			include( __DIR__.'/../partials/search_item.php' );
		?>

		<?php } ?>

		</ul>

		<?php include( __DIR__.'/../partials/search_pagination.php' ); ?>

	</main>





<?php

// -------------------------- TEMPLATE END --------------------------------

get_footer();

/**
 * Add Isotope at bottom.
 */
?>
<script src="<?php echo $isotope_library; ?>"></script>
<script>
var elem = document.querySelector('.grid-ul');
var iso = new Isotope( elem, {
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
});
</script>