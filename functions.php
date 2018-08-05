<?php

//SCRIPTS
//registering external scripts
wp_register_script( 'google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA_G3MwlAbA0ROQaVm3Rwf9PiH3CcYgm6E&callback=initMap' , '', '', true );

//enqueuing theme scripts
function lian_scripts(){
    wp_enqueue_style('lian_style', get_template_directory_uri().'/assets/css/style.min.css');
    wp_enqueue_script('lian_script', get_template_directory_uri().'/scripts.min.js', array('jquery'), null, true);
    wp_enqueue_script('google-maps-api');
}

add_action( 'wp_enqueue_scripts', 'lian_scripts' );

//NAVIGATION MENUS
//registering navigation menus
function lian_menus(){
    register_nav_menus(
        array(
            'header-navigation' => __('Header page navigation'),
            'footer-sm' => __('Footer social-media navigation')
        )
    );
}

add_action( 'init', 'lian_menus' );


//POSTS & COMMENTS
//adding post formats
add_theme_support( 'post-formats', array('gallery', 'link', 'image', 'quote', 'status', 'video', 'audio') );

//adding post thumbnails/featured images
add_theme_support( 'post-thumbnails' );

//modifying default '(more...)' link
function lian_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">...</a>';
}

add_filter( 'the_content_more_link', 'lian_more_link' );

//moving comments fields to the bottom
function wpb_move_comment_field_to_bottom($fields){
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

//WIDGETS
//Header logo widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Header logo'
        )
    );

//Footer logo widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Footer logo'
        )
    );

//Sidebar recent posts widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar search',
        )
    );

//Sidebar recent posts widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar recent posts',
        )
    );

//Sidebar tags widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar tags',
        )
    );

//Sidebar instagram widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'Sidebar instagram',
        )
    );

//including modified Recent posts widget
include_once( get_stylesheet_directory() . '/assets/lib/recent-posts-widget.php' );

function lian_recent_post_widget_registration(){
    unregister_widget('WP_Widget_Recent_Posts');
    register_widget('lian_recent_post_widget');
}

add_action('widgets_init', 'lian_recent_post_widget_registration');