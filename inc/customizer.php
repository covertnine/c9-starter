<?php

/**
 * Theme Customizer
 *
 * @package c9
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'c9_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function c9_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

		// Add Footer Section
// $wp_customize-&amp;gt;add_section('your_theme_footer', array(
// 'title' =&amp;gt; 'Footer',
// 'description' =&amp;gt; '',
// 'priority' =&amp;gt; 120,
// ));
	}
}
add_action( 'customize_register', 'c9_customize_register' );
