<?php


require_once get_theme_file_path( '/core-files/tgm-config.php' );
require_once get_theme_file_path( '/core-files/csf/cs-framework.php' );
require_once get_theme_file_path( '/core-files/csf-config.php' );
//require get_theme_file_path( '/core-files/customizer/customizer.php' );
require get_theme_file_path( '/core-files/widgets/widgets.php' );

require get_theme_file_path( '/core-files/customizer/customizer-styles.php' );

function vibranium_theme_setup() {
    load_theme_textdomain( 'vibranium' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array('gallery', 'link', 'image', 'quote', 'video', 'audio') );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ) );
    add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form') );
    add_editor_style( '/assets/css/editor-style.css' );

    register_nav_menus( array(
        'top-menu'      => __( 'Top Menu', 'vibranium' ),
        'primary-menu'  => __( 'Primary Menu', 'vibranium' )
    ) );
}
add_action( 'after_setup_theme', 'vibranium_theme_setup' );

function vibranium_enqueue_assets() {
    wp_enqueue_style( 'bootstrap-grid', get_theme_file_uri() . '/assets/css/bootstrap-grid.min.css', nulll, '4.1.3' );
    wp_enqueue_style( 'bootstrap-reboot', get_theme_file_uri() . '/assets/css/bootstrap-reboot.css', nulll, '4.1.3' );
    wp_enqueue_style( 'font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', nulll, '4.7' );
    wp_enqueue_style( 'owl-css', get_theme_file_uri() . '/assets/css/owl.carousel.min.css', nulll, '2.3.4' );
    wp_enqueue_style( 'vibranium_style', get_stylesheet_uri(), null, time() );

    wp_enqueue_script( 'mixitup-js', get_theme_file_uri() . '/assets/js/mixitup.min.js', array('jquery'), '3.3.0', true );
    wp_enqueue_script( 'owl-js', get_theme_file_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true );
    wp_enqueue_script( 'vibranium-js', get_theme_file_uri() . '/assets/js/vibranium.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'vibranium_enqueue_assets' );


/**
 * Enqueue script for custom customize control.
 */
function vibranium_customizer_scripts() {
    // wp_enqueue_style( 'divi-customizer-controls-styles', get_theme_file_uri( '/core-files/customizer/css/customizer-styles.css' ), array(), '1.0' );
    wp_enqueue_script( 'customizer-controls-js', get_theme_file_uri( '/core-files/customizer/js/customizer-controls.js' ), array('jquery', 'customize-controls'), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'vibranium_customizer_scripts' );


//Live customizer Preview
function vibranium_customizer_live_preview() {
    wp_enqueue_script( 'vibranium-theme-customizer', get_theme_file_uri( '/core-files/customizer/js/customizer-preview.js' ), array('jquery', 'customize-preview'), '1.0', true );
}
add_action( 'customize_preview_init', 'vibranium_customizer_live_preview' );