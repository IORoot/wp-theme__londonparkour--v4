<a class="logo flex-1" href="https://londonparkour.com" >
    <svg class="h-16 w-32 sm:w-48 fill-goo"><use xlink:href="#h-logo-text" /></svg>
</a>



<?php
    /**
     * 
     * Add SVG Logos to Footer.
     * 
     */
    function footer_svg_logo() {
        
        echo '<div class="svgs">';
            include( __DIR__.'/svgs/logo.svg' );
            include( __DIR__.'/svgs/h-logo-text.svg' );
        echo '</div>';
    }

    add_action( 'wp_footer', 'footer_svg_logo' );
?>