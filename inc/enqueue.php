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

		wp_enqueue_style('cortextoo-styles', get_stylesheet_directory_uri() . '/assets/dist/css/theme.min.css', array());

		// wp_enqueue_style( 'cortextoo-megamenu', get_stylesheet_directory_uri() . '/css/client-assets/vendor/megamenu.css', array(), $css_version );

		// wp_enqueue_script('jquery');

		// $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/assets/dist/js/theme.min.js');
		wp_enqueue_script('cortextoo-scripts', get_template_directory_uri() . '/assets/dist/js/theme.min.js', array('jquery'), true);

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // endif function_exists( 'cortextoo_scripts' ).

//John Lynch : Typography function. Updated with nav-bar
//Function that will determine if user selects yes or no to load in fonts,
//If yes: passes object with specified fonts. If no: no fonts passed

//Localize this array object to pass it into the javascript typography-script
function load_typography_scripts()
{

	//Check to see if this script needs to run:
	$fontChoice = isset(get_option('cortex_typography')["defaultFont"]) ? get_option('cortex_typography')["defaultFont"] : null;

	//Check to see if the array is empty and the user choice is yes to run the font script
	if (!empty($fontChoice) && $fontChoice === "yes") {
		//Begin by registering the JavaScript Script
		//Add action to enqueue the CDN script:
		wp_enqueue_script('webfont-loader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');

		wp_register_script('typography-script', get_template_directory_uri() . '/assets/scripts/typography-script.js', array('webfont-loader'));

		//Localize the script with the font data
		$font_array = get_option('cortex_typography');

		//Use the localize function to localize the script and continue with the code
		wp_localize_script('typography-script', 'selectedFonts', $font_array);

		//Enqueued script with the data we pulled from earlier selections
		wp_enqueue_script('typography-script');
	}
}

// endif function_exists( 'cortextoo_scripts' ).

add_action('wp_enqueue_scripts', 'cortextoo_scripts');
add_action('wp_enqueue_scripts', 'load_typography_scripts');

/**
 * Remove emoji specific code and styling
 */

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
