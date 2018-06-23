<?php
/**
 * cortextoo enqueue scripts
 *
 * @package cortextoo
 */

if ( ! function_exists( 'cortextoo_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function cortextoo_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style( 'cortextoo-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), $theme_version, true);

		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script( 'cortextoo-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'cortextoo_scripts' ).

add_action( 'wp_enqueue_scripts', 'cortextoo_scripts' );

/**
 * Enqueue WordPress theme styles within Gutenberg.
 */
function cortextoo_gutenberg_styles() {
	// Load the theme styles within Gutenberg.
	//$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
	//wp_enqueue_style( 'cortextoo-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );
	wp_enqueue_style( 'cortextoo-gutenberg', get_theme_file_uri( '/css/custom-editor-style.css' ), false, '', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'cortextoo_gutenberg_styles' );