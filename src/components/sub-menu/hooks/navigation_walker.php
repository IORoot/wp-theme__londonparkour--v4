<?php


class SubMenu_Walker extends Walker_Nav_Menu
{

    public $item_with_submenu;


    /**
     * 
     * This adds a 'last' class to the last sibling in the menu.
     * 
     */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

        $id_field = $this->db_fields['id'];

        //If the current element has children, add class 'sub-menu'
        if( isset($children_elements[$element->$id_field]) ) { 
            $classes = empty( $element->classes ) ? array() : (array) $element->classes;
            $classes[] = 'has-sub-menu';
            $element->classes =$classes;
        }
        // We don't want to do anything at the 'top level'.
        if( 0 == $depth )
            return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );

        //Get the siblings of the current element
        $parent_id_field = $this->db_fields['parent'];      
        $parent_id = $element->$parent_id_field;
        $siblings = $children_elements[ $parent_id ] ;

        //No Siblings?? 
        if( ! is_array($siblings) )
            return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );

        //Get the 'last' of the siblings.
        $last_child = array_pop($siblings);
        $id_field = $this->db_fields['id'];

            //If current element is the last of the siblings, add class 'last'
        if( $element->$id_field == $last_child->$id_field ){
            $classes = empty( $element->classes ) ? array() : (array) $element->classes;
            $classes[] = 'last';
            $element->classes =$classes;
        }

        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }






    /**
     * Starting Element
     */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
        // $classes[] = 'menu-item-' . $item->ID;


        /**
         * Cleanup
         */
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

            // rmeove 'has-sub-menu'
            if ($class == 'has-sub-menu'){ 
                /**
                 * Set this, so we can use it in the sub-menu 
                 */
                $this->item_with_submenu = $item;

                unset($classes[$key]); continue; 
            }

            // rewrite classes array
            $classes[$key] = $class;
        }

        /**
         * ___ to :
         */
        foreach ($classes as $key=>$class) {
            $classes[$key] = str_replace('___',':', $class);
        }

        /**
         * Add depth class
         */
        $classes[] = "depth-".$depth;

        /**
         * filter args
         */
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        /**
         * Crate class string
         */
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        /**
         * Filter ID
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        /**
         * Start output
         */
        // $output .= $indent . '<li' . $id . $class_names . '>';
        $item_output = $indent . '<li ' . $class_names . '>';


        /**
         * Create all the link attributes.
         */
        $atts           = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        if ( '_blank' === $item->target && empty( $item->xfn ) ) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['href']         = ! empty( $item->url ) ? $item->url : '';
        $atts['aria-current'] = $item->current ? 'page' : '';

        // Filter those attributes.
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // Filter title
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        // Create output.
        $item_output .= $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }



    /**
     * Ending Element
     */
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $item_output = "</li>{$n}";

        $output .= apply_filters( 'walker_nav_menu_close_el', $item_output, $item, $depth, $args );

    }




    /**
     * Starts the list before the elements are added.
     *
     * @since 3.0.0
     *
     * @see Walker::start_lvl()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function start_lvl( &$output, $depth = 0, $args = null ) {

        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        // Default class.
        $classes = array( 'sub-menu' );

        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @since 4.8.0
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args    An object of `wp_nav_menu()` arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth, $this->current_item ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $start_lvl .= "{$n}{$indent}<ul$class_names>{$n}";

        $output .= apply_filters( 'nav_menu_submenu_open', $start_lvl, $this->item_with_submenu );

    }



    /**
     * Ends the list of after the elements are added.
     *
     * @since 3.0.0
     *
     * @see Walker::end_lvl()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat( $t, $depth );
        $close_lvl .= "$indent</ul>{$n}";

        $output .= apply_filters( 'nav_menu_submenu_close', $close_lvl, $this->item_with_submenu );

        /**
         * Unset this after using it.
         */
        unset($this->item_with_submenu);
    }


}
