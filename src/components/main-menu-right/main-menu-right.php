<?php


    
    /**
     * Get the custom navigation walker
     */
    require __DIR__ . '/hooks/navigation_walker.php';


    wp_nav_menu([
        'theme_location'  => 'main-right',
        'menu_id'         => 'main-right',
        'container_class' => 'flex-1 z-10 ',
        'menu_class'      => 'flex justify-end text-center',
        'walker'          => new MainRight_Walker
    ]);
    
?>