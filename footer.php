<?php


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

</div>

	<footer>

		<?php
			
			$id = get_field('footer_page', 'option');
			$content_post = get_post( $id );

			if ($content_post != ''){
				vc_custom_css($id);
				echo do_shortcode( get_post_field('post_content', $id) );
				
			} else {
				echo 'Copyright 2020, LondonParkour.com';
			}

		?>
			
	</footer>
</div>

<?php  include( __DIR__.'/src/template-parts/svg_filters.html' ); ?>

<?php wp_footer(); ?>

</body>
</html>
