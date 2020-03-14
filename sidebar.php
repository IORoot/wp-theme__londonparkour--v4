<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package londonparkour.com_v4
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php  do_shortcode('[andyp_responsive_menus category_mobile="30,32,31" sidebar="sidebar-1"]'); ?>
</aside><!-- #secondary -->

