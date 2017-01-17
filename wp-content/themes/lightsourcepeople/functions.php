<?php

function lightsourcepeople_scripts() {
    wp_enqueue_script( 'j-query', get_template_directory_uri() . '/js/lib/jquery-3.1.1.min.js' );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', 'j-query');
    wp_enqueue_script( 'googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDgMkLpl0X07nJuwhpRsn1c3I8DSRHm34A');
    wp_enqueue_style( 'lightsourcepeople-style', get_stylesheet_uri() );    
}

add_action( 'wp_enqueue_scripts', 'lightsourcepeople_scripts' );

add_theme_support( 'title-tag' );

function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'quick-links-menu' => __( 'Quick Links Menu'),
            'vacancies-links-menu' => __( 'Vacancies Links Menu')
        )
    );
}
add_action( 'init','register_menus' );

