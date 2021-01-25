<?php

$page_classes = get_field('page_classes');

get_header();

?>

	<main class="<?php echo $page_classes; ?>">

		<?php echo basename(__FILE__); ?>

	</main>

<?php
get_footer();
