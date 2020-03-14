<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function londonparkourv4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar - All Posts', 'londonparkourv4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'londonparkourv4' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar - Article Dashboard', 'londonparkourv4' ),
		'id'            => 'sidebar-tutorials',
		'description'   => esc_html__( 'Add widgets here.', 'londonparkourv4' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><a href="/tutorials/">',
		'after_title'   => '</a></h3>',
    ) );
    

}
add_action( 'widgets_init', 'londonparkourv4_widgets_init' );