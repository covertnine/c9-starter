<?php
/**
 * Check and setup theme's default settings
 *
 * @package cortextoo
 *
 */

if ( ! function_exists ( 'cortextoo_setup_theme_default_settings' ) ) {
	function cortextoo_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$cortextoo_posts_index_style = get_theme_mod( 'cortextoo_posts_index_style' );
		if ( '' == $cortextoo_posts_index_style ) {
			set_theme_mod( 'cortextoo_posts_index_style', 'default' );
		}

		// Sidebar position.
		$cortextoo_sidebar_position = get_theme_mod( 'cortextoo_sidebar_position' );
		if ( '' == $cortextoo_sidebar_position ) {
			set_theme_mod( 'cortextoo_sidebar_position', 'right' );
		}

		// Container width.
		$cortextoo_container_type = get_theme_mod( 'cortextoo_container_type' );
		if ( '' == $cortextoo_container_type ) {
			set_theme_mod( 'cortextoo_container_type', 'container' );
		}
	}
}