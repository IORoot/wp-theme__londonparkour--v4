<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package londonparkour.com_v4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	//  ┌─────────────────────────────────────────────────────────────────────────┐
	//  │ Manually set this AMP function.                                         │
	//  │                                                                         │
	//  │ Background:                                                             │
	//  │ W3 Total Cache - AMP Plugin searches for a function called              │
	//  │ is_amp_endpoint() and expects it to return true if on an AMP page. This │
	//  │ comes with the AMPforWP plugin, but not using that. So manually setting │
	//  │ it to make sure the CSS is inline, not linked.                          │
	//  └─────────────────────────────────────────────────────────────────────────┘
	function is_amp_endpoint(){ return true; }

	the_content();
	?>

</article>
