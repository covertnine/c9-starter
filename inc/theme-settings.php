<?php
/**
 * Check and setup theme's default settings
 *
 * @package c9
 */

if ( ! function_exists( 'c9_setup_theme_default_settings' ) ) {
	function c9_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$c9_posts_index_style = get_theme_mod( 'c9_posts_index_style' );
		if ( '' == $c9_posts_index_style ) {
			set_theme_mod( 'c9_posts_index_style', 'default' );
		}

		// Sidebar position.
		$c9_sidebar_position = get_theme_mod( 'c9_sidebar_position' );
		if ( '' == $c9_sidebar_position ) {
			set_theme_mod( 'c9_sidebar_position', 'right' );
		}

		// Container width.
		$c9_container_type = get_theme_mod( 'c9_container_type' );
		if ( '' == $c9_container_type ) {
			set_theme_mod( 'c9_container_type', 'container' );
		}
	}
}
