<?php


class MainRight_Walker extends Walker_Nav_Menu
{

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
    {

        /**
         * Sort out classes.
         */
        $classes = $item->classes;

        foreach ($classes as $key=>$class)
        {
            // remove menu-item-
            $class = str_replace('menu-item-', '', $class);

            // remove if blank
            if (empty($class)){ unset($classes[$key]); continue; }

            // remove 'menu-item'
            if ($class == 'menu-item'){ unset($classes[$key]); continue; }

            // remove 'type-custom'
            if ($class == 'type-custom'){ unset($classes[$key]); continue; }

            // rmeove 'object-custom'
            if ($class == 'object-custom'){ unset($classes[$key]); continue; }

            // rewrite classes array
            $classes[$key] = $class;
        }

        // All item classes
        $classes[] = "depth-".$depth;   // add depth classes
        $classes[] = "flex-1";          // add Tailwind classes

        // Root classes
        if ($depth == 0)
        {
            // $classes[] = "h-16";
        }

        // Level 1
        if ($depth == 1)
        {
            // $classes[] = "h-32";
        }
        
        
        $output .= "<li class='" . implode(' ', array_reverse($classes)) . "' >";
            
        // Top level root items shouldn't be links
        if ($depth == 0)
        {
            $output .= '<div>' . $item->title . '</div>';
        } else {
            $output .= '<a href="' . $permalink . '">' . $item->title . '</a>';
        }


    }
}
