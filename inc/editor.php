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
function c9_editor_style() {
	wp_enqueue_style( 'c9-styles', get_template_directory_uri() . '/assets/dist/css/theme.min.css' );
	wp_enqueue_style( 'c9-editor-style', get_template_directory_uri() . '/assets/dist/css/custom-editor-style.css' );
	wp_enqueue_script( 'c9-scripts-theme', get_template_directory_uri() . '/assets/dist/js/theme.min.js' );
}

add_action( 'enqueue_block_editor_assets', 'c9_editor_style' );

/* add page template name to body_class in admin */
if ( ! function_exists( 'c9_template_selected' ) ) {

	function c9_template_selected( $classes ) {

		$template_slug = basename( get_page_template(), '.php' );
		return "$classes $template_slug";
	}
}
add_filter( 'admin_body_class', 'c9_template_selected' );
