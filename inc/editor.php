<?php

/**
 * COVERT NINE modify editor
 *
 * @package c9
 */

/**
 * Registers an editor stylesheet for the theme.
 */
/* add theme compiled files to gutenberg editor */
if ( ! function_exists('c9_editor_style') ) {
	function c9_editor_style()
	{
		wp_enqueue_style('c9-styles', get_template_directory_uri() . '/assets/dist/css/theme.min.css');
		wp_enqueue_style('c9-editor-style', get_template_directory_uri() . '/assets/dist/css/custom-editor-style.css');
		wp_enqueue_script('c9-scripts-theme', get_template_directory_uri() . '/assets/dist/js/theme.min.js');
	}
}
add_action('enqueue_block_editor_assets', 'c9_editor_style');

if (!function_exists('c9-admin-font-styles')) {
	function c9_admin_font_styles()
	{

		// Check to see if this script needs to run:
		$c9_fonts 	 						= get_theme_mod('c9_default_font', 'no');
		$font_choice 						= isset($c9_fonts) ? $c9_fonts : null;
		$font_array							= array();
		$font_array['c9_heading_font'] 		= get_theme_mod('c9_heading_font');
		$font_array['c9_subheading_font'] 	= get_theme_mod('c9_subheading_font');
		$font_array['c9_body_font'] 		= get_theme_mod('c9_body_font');

		// Check to see if the array is empty and the user choice is yes to run the font script
		if ( ($font_choice === 'yes') && ( !empty($font_array) ) ) {
			// Begin by registering the JavaScript Script
			// Add action to enqueue the CDN script:
			wp_enqueue_script('webfont-loader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');

			wp_register_script('c9-typography-script', get_template_directory_uri() . '/assets/scripts/typography-script.js', array('webfont-loader'));

			// Localize the script with the font data
			$font_array['c9_default_font']		= $c9_fonts;

			if  ($c9_fonts != 'no' ) {

				// Use the localize function to localize the script and continue with the code
				wp_localize_script('c9-typography-script', 'c9SelectedFonts', $font_array);

				// Enqueued script with the data we pulled from earlier selections
				wp_enqueue_script('c9-typography-script');

				require_once(get_template_directory() . '/assets/fonts/class-c9fontstyles.php');
				ob_start();
				C9FontStyles::render($font_array);
				$font_css       = ob_get_clean();
				$fonts_minified = C9FontStyles::minify_css($font_css);

				wp_add_inline_style('c9-styles', $fonts_minified);
			}
		}
	}
}
add_action('admin_enqueue_scripts', 'c9_admin_font_styles');
