<?php

/**
 * Theme basic setup.
 *
 * @package c9-starter
 */

// Set the content width based on the theme's design and stylesheet.
if (!isset($content_width)) {
	$content_width = 960; /* pixels */
}

add_action('after_setup_theme', 'c9_setup');

if (!function_exists('c9_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function c9_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain('c9-starter', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => __('Top Navigation Menu', 'c9-starter'),
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

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support('customize-selective-refresh-widgets');

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Set up the WordPress Theme logo feature.
		add_theme_support(
			'custom-logo',
			array(
				'height' => '92',
				'width'	 => '285',
				'flex-height'	=> true,
				'flex-width'	=> true
			)
		);

		add_theme_support('custom-background');

		add_theme_support('align-wide');

		// For the Block Editor.
		add_theme_support('editor-styles');

		//Apply empty stylesheet to visual editor to remove that doesn't work right yet for some reason.
		add_editor_style(get_template_directory() . '/editor-style.css');

		add_theme_support('responsive-embeds');

		// C9 custom image sizes
		add_image_size('c9-post-feature-hd', 1920, 1080, true);
		add_image_size('c9-post-large-wide', 1600, 465, array('center', 'center'), true);
		add_image_size('c9-post-medium-wide', 960, 465, array('center', 'center'), true);
		add_image_size('c9-post-rectangle-lg', 960, 720, true);
		add_image_size('c9-post-rectangle-md', 560, 420, true);
		add_image_size('c9-post-rectangle-sm', 380, 285, true);
		add_image_size('c9-post-wide-xl-crop', 1368, 770, true);
		add_image_size('c9-post-wide-lg-crop', 960, 540, true);
		add_image_size('c9-post-wide-md-crop', 720, 405, true);
		add_image_size('c9-post-wide-sm-crop', 500, 281, true);
		add_image_size('c9-post-wide-xs-crop', 380, 215, true);
		add_image_size('c9-post-wide-tiny-crop', 120, 90, true);
	}
}
