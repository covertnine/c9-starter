<?php
/**
 * cortextoo enqueue scripts
 *
 * @package cortextoo
 */

if (!function_exists('cortextoo_scripts')) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function cortextoo_scripts()
	{
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get('Version');

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/assets/dist/css/theme.min.css');
		wp_enqueue_style('cortextoo-styles', get_stylesheet_directory_uri() . '/assets/dist/css/theme.min.css', array(), $css_version);

		//wp_enqueue_style( 'cortextoo-megamenu', get_stylesheet_directory_uri() . '/css/megamenu.css', array(), $css_version );

		wp_enqueue_script('jquery');

		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/assets/dist/theme.min.js');
		wp_enqueue_script('cortextoo-scripts', get_template_directory_uri() . '/assets/dist/theme.min.js', array('jquery'), $js_version, true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // endif function_exists( 'cortextoo_scripts' ).

add_action('wp_enqueue_scripts', 'cortextoo_scripts');

/**
 * Remove emoji specific code and styling
 */

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
