<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package londonparkour.com_v4
 */

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                                                                         │
//  │                     Insert the Visual Composer CSS                      │
//  │                                                                         │
//  └─────────────────────────────────────────────────────────────────────────┘
function vc_custom_css($id) {
    $shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
    if ( ! empty( $shortcodes_custom_css ) ) {
        echo '<style type="text/css">';
        echo $shortcodes_custom_css;
        echo '</style>';
    }
}

?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				
				//  ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
				//  ┃                                                                         ┃
				//  ┃                     See ANDYP_FOOTER_SELECT Plugin                      ┃
				//  ┃                                                                         ┃
				//  ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛
				
				$id = get_field('footer_page', 'option');
				$content_post = get_post( $id );

				if ($content_post != ''){
					vc_custom_css($id);
					echo do_shortcode( get_post_field('post_content', $id) );
					
				} else {
					echo 'Copyright 2020, LondonParkour.com';
				}

			?>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- svg filters -->
<?php echo file_get_contents(__DIR__.'/svg_filters.html') ?>

<?php wp_footer(); ?>

</body>
</html>
