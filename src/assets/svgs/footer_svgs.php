<?php
    /**
     * 
     * Add SVG Logos to Footer.
     * 
     */
    function footer_svgs() {
        
        echo '<div class="svgs">';
            include( __DIR__.'/logo.svg' );
            include( __DIR__.'/h-logo-text.svg' );
            include( __DIR__.'/star.svg' );
            include( __DIR__.'/stripe.svg' );
            include( __DIR__.'/github.svg' );
            include( __DIR__.'/bitfield.svg' );
            include( __DIR__.'/unionjack.svg' );
        echo '</div>';
    }

    add_action( 'wp_footer', 'footer_svgs' );
?>