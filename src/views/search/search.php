
<?php
get_header();
// -------------------------- TEMPLATE START ------------------------------
?>


<?php include( __DIR__.'/partials/search_query.php' ); ?>

	<main class="max-w-screen-xl mx-4 xl:m-auto block pb-40 relative">

		<?php include( __DIR__.'/partials/search_header.php' ); ?>

		<?php include( __DIR__.'/partials/search_form.php' ); ?>

		<?php include( __DIR__.'/partials/search_filters.php' ); ?>

		<?php include( __DIR__.'/partials/search_pagination.php' ); ?>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-20">

			<?php while (have_posts()) {
				include( __DIR__.'/partials/search_results.php' );
			} ?>

		</div>

		<?php include( __DIR__.'/partials/search_pagination.php' ); ?>

	</main>

<?php
// -------------------------- TEMPLATE END --------------------------------
?>

<div class="svgs">
    <?php
    include( get_stylesheet_directory() . '/src/assets/svgs/noise.svg');
    include( get_stylesheet_directory() . '/src/assets/svgs/glyph-all.svg');
    include( get_stylesheet_directory() . '/src/assets/svgs/wavey-min.php');
    ?>
</div>


<?php
get_footer();
?>