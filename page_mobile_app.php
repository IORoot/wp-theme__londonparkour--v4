<?php 

/* 
Template Name: MobileApp Page Type 
Template Post Type: mobilepages, page
*/ 

//  ┌─────────────────────────────────────────────────────────────────────────┐ 
//  │                                                                         │░
//  │                      Template for the Mobile App                        │░
//  │                                                                         │░
//  └─────────────────────────────────────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php wp_head(); ?> 
</head>

<body class="londonparkour">

<div id="progress"><div id="progress__bar"></div></div>

<div id="page" class="site">

        <div class="content-area mobileapp">

            <main class="mobileapp__content">

                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->

        </div><!-- #primary -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>