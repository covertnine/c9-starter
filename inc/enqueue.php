<?php
/**
 * C9 enqueue scripts
 *
 * @package c9
 */

if ( ! function_exists( 'c9_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function c9_scripts() {
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		wp_enqueue_style( 'c9-styles', get_template_directory_uri() . '/assets/dist/css/theme.min.css', array() );

		// $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/assets/dist/js/theme.min.js');
		wp_enqueue_script( 'c9-scripts', get_template_directory_uri() . '/assets/dist/js/theme.min.js', array( 'jquery' ), true );

		if ( !empty( get_theme_mod('c9_google_analytics_id') ) ) {
			wp_enqueue_script( 'ga-gtag', 'https://www.googletagmanager.com/gtag/js?id=' . get_theme_mod('c9_google_analytics_id') );

			$c9_ga_snippet = "window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '" . get_theme_mod('c9_google_analytics_id') . "')";

			wp_add_inline_script( 'ga-gtag', $c9_ga_snippet );
		}


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Check to see if this script needs to run:
		$font_choice = isset( get_option( 'cortex_branding' )['defaultFont'] ) ? get_option( 'cortex_branding' )['defaultFont'] : null;

		// Check to see if the array is empty and the user choice is yes to run the font script
		if ( ! empty( $font_choice ) && 'yes' === $font_choice ) {
			// Begin by registering the JavaScript Script
			// Add action to enqueue the CDN script:
			wp_enqueue_script( 'webfont-loader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js' );

			wp_register_script( 'typography-script', get_template_directory_uri() . '/assets/scripts/typography-script.js', array( 'webfont-loader' ) );

			// Localize the script with the font data
			$font_array = get_option( 'cortex_branding' );

			// Use the localize function to localize the script and continue with the code
			wp_localize_script( 'typography-script', 'selectedFonts', $font_array );

			// Enqueued script with the data we pulled from earlier selections
			wp_enqueue_script( 'typography-script' );

			require_once( get_template_directory() . '/assets/fonts/class-c9fontstyles.php' );
			ob_start();
			C9FontStyles::render( $font_array );
			$font_css       = ob_get_clean();
			$fonts_minified = C9FontStyles::minify_css( $font_css );

			wp_add_inline_style( 'c9-styles', $fonts_minified );
		}
	}
} // endif function_exists( 'c9_scripts' ).

// Function that will determine if user selects yes or no to load in fonts,
add_action( 'wp_enqueue_scripts', 'c9_scripts', 10 );

// adds conditional JS for font selections in customizer
add_action( 'customize_controls_enqueue_scripts', 'c9_customizer_scripts', 20);
if ( ! function_exists( 'c9_customizer_scripts' ) ) {

	function c9_customizer_scripts() {
		wp_enqueue_script( 'c9_field_conditionals', get_template_directory_uri() . '/assets/scripts/c9-conditional-customizer.js', array('jquery') );
	}

}

/**
 * Remove emoji specific code and styling
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// remove inline styles added by WP to Gutenberg
add_filter('block_editor_settings', 'c9_kill_goot_styles');

function c9_kill_goot_styles($editor_settings) {
	unset($editor_settings['styles'][0]);
	return $editor_settings;
}
