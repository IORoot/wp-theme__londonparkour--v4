<?php

// disable acf css on front-end acf forms
add_action('wp_print_styles', 'my_deregister_acf_styles', 100);


function my_deregister_acf_styles()
{
    wp_deregister_style('acf');
    wp_deregister_style('acf-field-group');
    wp_deregister_style('acf-global');
    wp_deregister_style('acf-input');
    wp_deregister_style('acf-datepicker');
    
}
