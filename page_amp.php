<?php 

/* 
Template Name: AMP Page Type 
Template Post Type: mobilepages, page
*/ 

//  ┌─────────────────────────────────────────────────────────────────────────┐ 
//  │                                                                         │░
//  │                       Get the ACF field contents                        │░
//  │                                                                         │░
//  └─────────────────────────────────────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

    $canonical_link = get_field('canonical_link');
    $json_schema = get_field('json_schema');
    $amp_css = get_field('amp_css');
    $amp_css_file = get_field('amp_css_file');

    class amp_walker extends Walker_Nav_Menu {

        // Displays start of an element. E.g '<li> Item Name'
        // @see Walker::start_el()
        function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
            
            $output .= '<li class="menu-item">';
                $output .= '<a href="'. $item->url .'">';
                    $output .= $item->title;
                $output .= '</a>';
            $output .= '</li>';

        }
    }

?>
<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

    <?php
        $amp_js = get_option('amp_js');
        foreach ($amp_js as $key => $script)
        {
            echo $script;
        }
    ?>

    <link rel="canonical" href="<?php echo $canonical_link; ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script type="application/ld+json">
        <?php echo $json_schema; ?>
    </script>
    <style amp-custom>  
        <?php 
            $css_full_filepath =  get_template_directory() . '/' . $amp_css_file;
            if (file_exists($css_full_filepath)){
                $css = file_get_contents($css_full_filepath);
                // trim out "@charset "UTF-8"; " - AMP doesn't like it and SASS won't remove it.
                $css = str_replace('@charset "UTF-8";','',$css);
                echo $css;  
            }

            // Echo any extra CSS.
            echo $amp_css;  
        ?>
    </style>
</head>

<body class="amp londonparkour <?php echo get_field('body_classes'); ?>">

    <?php
    // ┌──────────────────────────────────────────────────────────┐
    // │                         Sidemenu                         │
    // └──────────────────────────────────────────────────────────┘ 
    ?>
    <amp-sidebar id="sidebar1" layout="nodisplay" side="left" class="ampsidebar">  
        <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',   
            'menu_class'     => 'menu-AMP',
            'menu_id'        => 'menu-AMP',
            'walker'         => new amp_walker,
        ) );
        ?>
    </amp-sidebar>
    
    <?php 
    // ┌──────────────────────────────────────────────────────────┐
    // │                         Header                           │
    // └──────────────────────────────────────────────────────────┘ 
    ?>
    <nav class="main-navigation">
        <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger">☰</div>
        <a href="https://londonparkour.com" class="main-navigation__mobile-logo"></a>  
    </nav>
    
    <?php
    // ┌──────────────────────────────────────────────────────────┐
    // │                         Article                          │
    // └──────────────────────────────────────────────────────────┘
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'amp' );
        endwhile;
    ?>

    <?php
    // ┌──────────────────────────────────────────────────────────┐
    // │                         Footer                           │
    // └──────────────────────────────────────────────────────────┘ 
    ?>
    <footer class="site-footer">
        <?php
            
            $id = get_field('amp_footer_page', 'option');

            if ($id  != ''){
                echo do_shortcode( get_post_field('post_content', $id) );
                
            } else {
                echo 'Copyright 2020, LondonParkour.com';
            }

        ?>
    </footer>

</body>
</html>