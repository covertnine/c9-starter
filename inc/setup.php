<?php
/**
 * Theme basic setup.
 *
 * @package cortextoo
 */


// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 960; /* pixels */
}

add_action( 'after_setup_theme', 'cortextoo_setup' );

if ( ! function_exists ( 'cortextoo_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cortextoo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on understrap, use a find and replace
		 * to change 'cortextoo' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'cortextoo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Top Navigation Menu', 'cortextoo' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress Theme logo feature.
		add_theme_support( 'custom-logo',
			array(
				'height'	=> 95,
				'width'		=> 200,
				'flex-height' => true,
				'flex-width' => true,
			)
		);

		// Check and setup theme default settings.
		cortextoo_setup_theme_default_settings();

		add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );

		add_theme_support( 'responsive-embeds' );

		// Make specific theme colors available in the editor.
		add_theme_support( 'editor-color-palette', array(
			array(
		        'name' => 'green',
		        'color'	=> '#006A30',
		        'slug' => 'color-green',
		    ),
			array(
				'name' => 'pink',
				'color' => '#D548CA',
				'slug'	=> 'color-pink',
		    ),
			array(
		        'name' => 'gray',
		        'color'	=> '#cccccc',
				'slug'	=> 'color-gray',
		    ),
			array(
		        'name' => 'white',
		        'color'	=> '#ffffff',
				'slug'	=> 'color-white',
		    ),
			array(
		        'name' => 'black',
		        'color'	=> '#000000',
				'slug'	=> 'color-black',
		    ),
		));


		// C9 custom image sizes
		add_image_size( 'c9-feature-wide', 960, 411, array('center', 'center'), true);
		add_image_size( 'c9-feature-large-wide', 1600, 465, array('center', 'center'), true);
		add_image_size( 'c9-feature-medium-wide', 960, 465, array('center', 'center'), true);
		add_image_size( 'c9-feature-large', 1600, 900, array('center', 'center'), true);

	}
}


add_filter( 'excerpt_more', 'cortextoo_custom_excerpt_more' );

if ( ! function_exists( 'cortextoo_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function cortextoo_custom_excerpt_more( $more ) {
		return '';
	}
}

add_filter( 'wp_trim_excerpt', 'cortextoo_all_excerpts_get_more_link' );

if ( ! function_exists( 'cortextoo_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function cortextoo_all_excerpts_get_more_link( $post_excerpt ) {

		return $post_excerpt . ' [...]<p><a class="btn btn-secondary understrap-read-more-link" href="' . esc_url( get_permalink( get_the_ID() )) . '">' . __( 'Read More...',
		'cortextoo' ) . '</a></p>';
	}
}