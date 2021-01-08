<?php

    
    /**
     * Get the custom navigation walker
     */
    require __DIR__ . '/hooks/navigation_walker.php';


    /**
     * Output the navigation
     */
    wp_nav_menu([
        'theme_location'  => 'menu-1',
        'menu_id'         => 'main-menu',
        'container_class' => 'flex-1',
        'menu_class'      => 'flex justify-between text-white text-center',
        'walker'          => new MainMenu_Walker
    ]);


?>