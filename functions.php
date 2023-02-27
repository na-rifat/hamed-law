<?php
/**
 * iq3 functions and definitions
 *
 * @package iq3
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iq3_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on iq3, use a find and replace
     * to change 'iq3' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'iq3', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'iq3_custom_background_args',
            [
                'default-color' => 'ffffff',
                'default-image' => '',
            ]
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ]
    );
}

add_action( 'after_setup_theme', 'iq3_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function iq3_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'iq3_content_width', 640 );
}

add_action( 'after_setup_theme', 'iq3_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function iq3_widgets_init() {
    register_sidebar(
        [
            'name'          => esc_html__( 'Sidebar', 'iq3' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'iq3' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
}

add_action( 'widgets_init', 'iq3_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function iq3_scripts() {
    wp_enqueue_style( 'iq3-style', get_stylesheet_uri(), [], _S_VERSION );
    wp_style_add_data( 'iq3-style', 'rtl', 'replace' );

    wp_enqueue_script( 'iq3-navigation', get_template_directory_uri() . '/js/navigation.js', [], _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'iq3_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

// Custom functions
if ( ! function_exists( 'setData' ) ) {
    function setData( $data ) {
        return set_query_var( 'component_data', $data );
    }
}

if ( ! function_exists( 'getData' ) ) {
    function getData() {
        return get_query_var( 'component_data', [] );
    }
}

if ( ! function_exists( 'bg_img' ) ) {
    function bg_img( $data ) {
        ! empty( $data['background'] ) ? printf( 'style="background-image: url(\'%s\')"', wp_get_attachment_image_src( $data['background'], 'original' )[0] ) : '';
    }
}

if ( ! function_exists( '_qt_get_img' ) ) {
    function _qt_get_img( $path ) {
        return get_template_directory_uri() . '/dist/img/' . $path;
    }
}

if ( ! function_exists( 'qt_img' ) ) {
    function qt_img( $path ) {
        echo _qt_get_img( $path );
    }
}

if ( ! function_exists( '_qt_print_img' ) ) {
    function _qt_print_img( $path ) {
        return sprintf( '<img src="%s"/>', _qt_get_img( $path ) );
    }
}
// Hooks the classes
require_once 'vendor/autoload.php';
hmd\Init::initialize();