<?php

	$body_classes = get_field('body_classes'); 
	
?>

<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<title><?php echo wp_title(); ?></title>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		<?php 
			wp_head(); 
			do_action('page_builder_header_code'); 
		?>
	</head>


	<body <?php body_class('labs ' . $body_classes ); ?>>

		<?php 
		include( __DIR__.'/src/components/tagmanager/tagmanager.php' );
		?>

		<header>
			<?php //include( __DIR__.'/src/components/progress-bar/progress-bar.php' );  ?>

			<nav class="h-16 flex bg-green-600">

				<?php include( __DIR__.'/src/components/main-menu-logo/main-menu-logo.php' );  ?>
				<?php include( __DIR__.'/src/components/main-menu/main-menu.php' );  ?>
				<?php include( __DIR__.'/src/components/main-menu-right/main-menu-right.php' );  ?>

			</nav>

		</header>