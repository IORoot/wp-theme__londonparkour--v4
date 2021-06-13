
<?php

get_header();

// -------------------------- TEMPLATE START ------------------------------
?>

	<main class="lg:max-w-screen-xl mx-4 lg:m-auto block pb-40 relative">

		<?php include( __DIR__.'/partials/search_query.php' ); ?>
		<?php include( __DIR__.'/partials/search_pagination.php' ); ?>

		<div class="grid grid-cols-4 gap-4 mb-20">

			<?php while (have_posts()) {
				include( __DIR__.'/partials/search_item.php' );
			} ?>

		</div>

		<?php include( __DIR__.'/partials/search_pagination.php' ); ?>

	</main>

<?php
// -------------------------- TEMPLATE END --------------------------------
get_footer();
?>