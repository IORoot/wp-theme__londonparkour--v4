<?php

/**
     * Create HTML list of nav menu items.
     * Replacement for the native Walker, using the description.
     *
     * @see    https://wordpress.stackexchange.com/q/14037/
     * @author fuxia
     */
    class Description_Walker extends Walker_Nav_Menu
    {
        /**
         * Start the element output.
         *
         * @param  string $output Passed by reference. Used to append additional content.
         * @param  object $item   Menu item data object.
         * @param  int $depth     Depth of menu item. May be used for padding.
         * @param  array|object $args    Additional strings. Actually always an 
                    instance of stdClass. But this is WordPress.
        * @return void
        */
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
        {
            
            $object = $item->object;
            $title = $item->title;
            $description = $item->description;
            $permalink = $item->url;

            $output .= "<li class='" .  implode(" ", $item->classes) . " float-left inline-block'>";
                
            //Add SPAN if no Permalink
            if( $permalink && $permalink != '#' ) {
                $output .= '<a href="' . $permalink . '">';
            } else {
                $output .= '<span>';
            }
            
            $output .= $title;

            if( $permalink && $permalink != '#' ) {
                $output .= '</a>';
            } else {
                $output .= '</span>';
            }
        }
    }