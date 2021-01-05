<nav class="w-screen">

    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'londonparkourv4' ); ?></button>
    
    <a href="#" class="main-navigation__mobile-toggle-button"><i class="mdi mdi-menu"></i></a>
    <a href="https://londonparkour.com" class="main-navigation__mobile-logo"></a>


    <?php

    wp_nav_menu([
        'theme_location'  => 'menu-1',
        'menu_class'      => 'list-none p-0 text-center',
        'walker'          => new Description_Walker
    ]);
    ?>

</nav>