<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<title><?php if ($title_metatag != null){ echo $title_metatag; } else { echo wp_title(); } ?></title>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		<?php wp_head(); ?>
	</head>


	<body <?php body_class('labs ' . $body_classes ); ?>>

		<?php 
		include( __DIR__.'/src/template-parts/header-tagmanager.php' );
		include( __DIR__.'/src/template-parts/header-progress-bar.php' ); 
		?>

		<div >


			<?php include( __DIR__.'/src/template-parts/header-skip-link.php' ); ?>

			<header>
				<?php include( __DIR__.'/src/template-parts/header-navigation.php' ); ?>
			</header>


			<div>
