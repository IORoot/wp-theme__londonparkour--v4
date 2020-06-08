<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package londonparkour.com_v4
 */

	//  ┌─────────────────────────────────────────────────────────────────────────┐ 
	//  │                                                                         │░
	//  │                           ACF - AMPHTML Link                            │░
	//  │                                                                         │░
	//  └─────────────────────────────────────────────────────────────────────────┘░
	//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
	$amp_link = get_field('amp_link');
	$body_classes = get_field('body_classes');
	$title_metatag = get_field('title_metatag')
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ($title_metatag != null){ echo $title_metatag; } else { echo wp_title(); } ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="amphtml" href="<?php echo $amp_link; ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class('londonparkour ' . $body_classes ); ?>>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5T257F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="progress"><div id="progress__bar"></div></div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'londonparkourv4' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'londonparkourv4' ); ?></button>
			<a href="#" class="main-navigation__mobile-toggle-button"><i class="mdi mdi-menu"></i></a>
			<a href="https://londonparkour.com" class="main-navigation__mobile-logo"></a>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
