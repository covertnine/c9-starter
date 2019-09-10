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

		wp_enqueue_style( 'c9-styles', get_stylesheet_directory_uri() . '/assets/dist/css/theme.min.css', array() );

		// $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/assets/dist/js/theme.min.js');
		wp_enqueue_script( 'c9-scripts', get_template_directory_uri() . '/assets/dist/js/theme.min.js', array( 'jquery' ), true );

		// theme option scripts
		if ( get_option( 'cortex_advanced' ) ) {
			if ( get_option( 'cortex_advanced' )['custom_css'] ) {
				wp_add_inline_style( 'c9-styles', get_option( 'cortex_advanced' )['custom_css'] );
			}
			if ( get_option( 'cortex_advanced' )['custom_js'] ) {
				wp_add_inline_script( 'c9-scripts', get_option( 'cortex_advanced' )['custom_js'] );
			}
		};

		if ( get_option( 'cortex_seo' ) ) {
			if ( get_option( 'cortex_seo' )['google_analytics_id'] ) {
				wp_enqueue_script( 'ga-url', 'https://www.googletagmanager.com/gtag/js?id=' . get_option( 'cortex_seo' )['google_analytics_id'] );

				$ga_snippet = "window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				
				gtag('config', '" . get_option( 'cortex_seo' )['google_analytics_id'] . "')";

				wp_add_inline_script( 'ga-url', $ga_snippet );
			}
			if ( get_option( 'cortex_seo' )['matomo_snippet'] ) {
				wp_add_inline_script( 'c9-scripts', get_option( 'cortex_seo' )['matomo_snippet'] );
			}
			if ( get_option( 'cortex_seo' )['gtm_snippet'] ) {
				wp_add_inline_script( 'c9-scripts', get_option( 'cortex_seo' )['gtm_snippet'] );
			}
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Check to see if this script needs to run:
		$fontChoice = isset( get_option( 'cortex_typography' )['defaultFont'] ) ? get_option( 'cortex_typography' )['defaultFont'] : null;

		// Check to see if the array is empty and the user choice is yes to run the font script
		if ( ! empty( $fontChoice ) && $fontChoice === 'yes' ) {
			// Begin by registering the JavaScript Script
			// Add action to enqueue the CDN script:
			wp_enqueue_script( 'webfont-loader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js' );

			wp_register_script( 'typography-script', get_template_directory_uri() . '/assets/scripts/typography-script.js', array( 'webfont-loader' ) );

			// Localize the script with the font data
			$font_array = get_option( 'cortex_typography' );

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

// John Lynch : Typography function. Updated with nav-bar
// Function that will determine if user selects yes or no to load in fonts,
// If yes: passes object with specified fonts. If no: no fonts passed
add_action( 'wp_enqueue_scripts', 'c9_scripts' );

/**
 * Remove emoji specific code and styling
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
