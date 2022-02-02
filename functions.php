<?php

function art_load_styles_scripts(){
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/webshop-theme.css');
}
add_action( 'wp_enqueue_scripts', 'art_load_styles_scripts' );

function art_init_theme() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Hoofdmenu')
        )
    );
}
add_action( 'init', 'art_init_theme' );


function art_setup_theme(){
    add_theme_support( 'post-thumbnails' );

    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'width'              => 1023,
        'height'             => 681,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}

add_action('after_setup_theme','art_setup_theme');


