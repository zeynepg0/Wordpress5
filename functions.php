<?php
// Güvenlik amacıyla doğrudan dosya çağrısını engelle
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Temaya desteklenen özellikler
function haber_temasi_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); // Öne çıkan görseller
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Ana Menü', 'haber-temasi' ),
        'footer'  => __( 'Alt Menü', 'haber-temasi' ),
    ) );
}
add_action( 'after_setup_theme', 'haber_temasi_setup' );

// Yanbar kayıtları
function haber_temasi_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Yan Panel', 'haber-temasi' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'haber_temasi_widgets_init' );

// Stil ve script dosyaları
function haber_temasi_scripts() {
    wp_enqueue_style( 'haber-temasi-style', get_stylesheet_uri() );
    // Örnek JS dosyası:
    // wp_enqueue_script( 'haber-temasi-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'haber_temasi_scripts' );
