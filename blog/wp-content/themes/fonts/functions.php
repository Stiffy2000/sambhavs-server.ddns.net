<?php
/**
 * Theme functions and definitions
 *
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package    fonts
 * @copyright  Copyright (c) 2019, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

define( 'FONTS_THEME_VERSION', '1.0.3' );

if ( ! function_exists( 'fonts_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fonts_setup() {

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary Menu', 'fonts' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fonts_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add image size for blog posts, 640px wide (and unlimited height).
		add_image_size( 'fonts-blog', 640 );

		// Add stylesheet for the WordPress editor.
		add_editor_style( '/assets/css/editor-style.css' );

		// Add support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 50,
				'width'       => 150,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title' ),
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'fonts_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fonts_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fonts_content_width', 640 );
}
add_action( 'after_setup_theme', 'fonts_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function fonts_scripts() {
	wp_enqueue_style( 'fonts-style', get_stylesheet_uri(), array(), FONTS_THEME_VERSION );
	wp_enqueue_style( 'fonts-typography', 'https://fonts.googleapis.com/css?family=Open+Sans', array(), FONTS_THEME_VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'fonts_scripts' );

/**
 * Load Gutenberg stylesheet.
 */
function fonts_gutenberg_editor_styles() {
	// Load the theme styles within Gutenberg.
	wp_enqueue_style( 'fonts-theme-gutenberg', get_template_directory_uri() . '/assets/css/editor-style.css', array(), FONTS_THEME_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'fonts_gutenberg_editor_styles' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Recommended plugin.
 */
require get_template_directory() . '/tgmpa/plugins.php';
