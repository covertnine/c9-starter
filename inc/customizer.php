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

				$wp_customize->add_section(
					'c9_footer',
					array(
						'title'    => __( 'Footer', 'c9' ),
						'priority' => 140,
					)
				);

				$wp_customize->add_setting(
					'c9_show_search',
					array(
						'default'           => 'show',
						'sanitize_callback' => 'sanitize_html_class',
					)
				);

				$wp_customize->add_control(
					'c9_show_search',
					array(
						'type'        => 'radio',
						'label'       => __( 'Display search in footer', 'c9' ),
						'section'     => 'c9_footer',
						'description' => __( 'Hide or show the search form in the footer', 'c9' ),
						'choices'     => array(
							'show' => __( 'Show', 'c9' ),
							'hide' => __( 'Hide', 'c9' ),
						),
					)
				);

				$wp_customize->add_setting(
					'c9_copyright_content',
					array(
						'default'           => __(
							'&copy; 2020 COVERT NINE LLC. All Rights Reserved.
<a href="https://www.covertnine.com" title="Web design company in Chicago" target="_blank">Website designed by COVERT NINE</a>.',
							'c9'
						),
						'sanitize_callback' => 'wp_filter_post_kses',
						'transport' => 'postMessage',
					)
				);

				$wp_customize->add_control(
					'c9_copyright_content',
					array(
						'type'        => 'textarea',
						'label'       => __( 'Copyright', 'c9' ),
						'section'     => 'c9_footer',
						'description' => __( 'Enter in any copyright information, links to privacy policies or terms.', 'c9' ),
					)
				);

				$wp_customize->add_section(
					'c9_branding',
					array(
						'title'    => __( 'Branding', 'c9' ),
						'priority' => 20,
					)
				);

				$wp_customize->add_setting(
					'c9_default_font',
					array(
						'default'		=>	'no',
						'transport' => 'postMessage',
						'sanitize_callback' => 'sanitize_html_class'
					),
				);

				$wp_customize->add_control(
					'c9_default_font',
					array(
						'type'		=> 'radio',
						'label'		=> __( 'Use C9 Theme Fonts?', 'c9'),
						'section'     => 'c9_branding',
						'choices'	=> array(
							'yes'	=> __('Yes', 'c9'),
							'no'	=> __('No, I will queue my own fonts.', 'c9')
						)
					)
				);


				// If the user selects YES and will select the fonts.
				// The default font will be Helvetica for system fonts:
				// if ( get_theme_mod ( 'c9_default_font') === 'yes') {


				// Update an array to contain the fonts that will be used
				// throughout each of the font selector fields:
				$c9fonts = array(
				'Abel'                  => 'Abel',
				'Bebas Neue'            => 'Bebas Neue',
				'Lato'                  => 'Lato',
				'Lobster'               => 'Lobster',
				'Merriweather'          => 'Merriweather',
				'Montserrat'            => 'Montserrat',
				'Muli'                  => 'Muli',
				'Nunito'                => 'Nunito',
				'Open Sans'             => 'Open Sans',
				'Open Sans Condensed'   => 'Open Sans Condensed',
				'Oswald'                => 'Oswald',
				'Playfair Display'      => 'Playfair Display',
				'Poppins'               => 'Poppins',
				'PT Sans'               => 'PT Sans',
				'PT Serif'              => 'PT Serif',
				'Quicksand'             => 'Quicksand',
				'Raleway'               => 'Raleway',
				'Roboto'                => 'Roboto',
				'Roboto Condensed'      => 'Roboto Condensed',
				'Roboto Slab'           => 'Roboto Slab',
				'Sen'					=> 'Sen',
				'Source Sans Pro'       => 'Source Sans Pro',
				'Work Sans'             => 'Work Sans'
				);

				$wp_customize->add_setting(
					'c9_heading_font',
					array(
						'default'			=>	'Sen',
						'transport' 		=> 'postMessage',
						'sanitize_callback' => 'wp_filter_post_kses'
					),
				);

				$wp_customize->add_control(
					'c9_heading_font',
					array(
						'type'			=> 'select',
						'label'			=> __( 'Heading Font', 'c9'),
						'description'	=> __( 'Select your heading font family.', 'c9'),
						'section'     	=> 'c9_branding',
						'choices' => $c9fonts,
					)
				);

				$wp_customize->add_setting(
					'c9_subheading_font',
					array(
						'default'		=>	'Sen',
						'transport' => 'postMessage',
						'sanitize_callback' => 'wp_filter_post_kses'
					),
				);

				$wp_customize->add_control(
					'c9_subheading_font',
					array(
						'type'			=> 'select',
						'label'			=> __( 'Subheading Font', 'c9'),
						'description'	=> __( 'Select your subheading font family.', 'c9'),
						'section'     	=> 'c9_branding',
						'choices' => $c9fonts,
					)
				);
				$wp_customize->add_setting(
					'c9_body_font',
					array(
						'default'			=>	'Sen',
						'transport' 		=> 'postMessage',
						'sanitize_callback' => 'wp_filter_post_kses'
					),
				);
				$wp_customize->add_control(
					'c9_body_font',
					array(
						'type'			=> 'select',
						'label'			=> __( 'Body Paragraph Font', 'c9'),
						'description'	=> __( 'Select your base font family.', 'c9'),
						'section'     	=> 'c9_branding',
						'choices' => $c9fonts,
					)
				);

				// } //end checking for theme_mod being set

	}
}
add_action( 'customize_register', 'c9_customize_register' );


// ------------------------------//
// ----- Start Cortex Social ----//
// ------------------------------//
// $c9_wposa_obj->add_section(
// array(
// 'id'    => 'cortex_social',
// 'title' => __('Social', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'twitter',
// 'type' => 'text',
// 'name' => __('Twitter', 'c9'),
// 'desc' => __('Input your Twitter Username or full url', 'c9'),
// )
// );

// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'facebook',
// 'type' => 'text',
// 'name' => __('Facebook', 'c9'),
// 'desc' => __('Input your Facebook Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'instagram',
// 'type' => 'text',
// 'name' => __('Instagram', 'c9'),
// 'desc' => __('Input your Instagram Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'pinterest',
// 'type' => 'text',
// 'name' => __('Pinterest', 'c9'),
// 'desc' => __('Input your Pinterest Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'spotify',
// 'type' => 'text',
// 'name' => __('Spotify', 'c9'),
// 'desc' => __('Input your Spotify Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'youtube',
// 'type' => 'text',
// 'name' => __('Youtube', 'c9'),
// 'desc' => __('Input your Youtube Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'flickr',
// 'type' => 'text',
// 'name' => __('Flickr', 'c9'),
// 'desc' => __('Input your Flickr Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'tumblr',
// 'type' => 'text',
// 'name' => __('Tumblr', 'c9'),
// 'desc' => __('Input your Tumblr Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'yelp',
// 'type' => 'text',
// 'name' => __('Yelp', 'c9'),
// 'desc' => __('Input your Yelp Name or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'subreddit',
// 'type' => 'text',
// 'name' => __('Subreddit', 'c9'),
// 'desc' => __('Input your Subreddit Name or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'linkedin',
// 'type' => 'text',
// 'name' => __('Linkedin', 'c9'),
// 'desc' => __('Input your Linkedin Username or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'github',
// 'type' => 'text',
// 'name' => __('Github', 'c9'),
// 'desc' => __('Input your Github Name or full url', 'c9'),
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_social',
// array(
// 'id'   => 'soundcloud',
// 'type' => 'text',
// 'name' => __('Soundcloud', 'c9'),
// 'desc' => __('Input your Soundcloud Name or full url', 'c9'),
// )
// );

// -------------------------------------------//

// ---------------------------//
// ---- Start Cortex Posts ---//
// ---------------------------//

// Section: Other Settings.
// $c9_wposa_obj->add_section(
// array(
// 'id'    => 'cortex_posts',
// 'title' => __('Posts', 'c9'),
// )
// );

// Field: Multicheck.
// $c9_wposa_obj->add_field(
// 'cortex_posts',
// array(
// 'id'      => 'author_visible',
// 'type'    => 'radio',
// 'name'    => __('Author name visibility', 'c9'),
// 'desc'    => __('Do you want to show or hide author posts?', 'c9'),
// 'options' => array(
// 'show' => 'Show',
// 'hide' => 'Hide',
// ),
// 'default' => 'show',
// )
// );
// Field: Multicheck.
// $c9_wposa_obj->add_field(
// 'cortex_posts',
// array(
// 'id'      => 'blog_sidebar',
// 'type'    => 'radio',
// 'name'    => __('Blog Single Sidebar', 'c9'),
// 'desc'    => __('Do you want a sidebar on your posts visible? Set sidebars under appearance > widgets or nothing will happen!', 'c9'),
// 'options' => array(
// 'hide'          => 'No Sidebar',
// 'sidebar-left'  => 'Left Sidebar',
// 'sidebar-right' => 'Right Sidebar',
// ),
// 'default' => 'hide',
// )
// );
// Field: Multicheck.
// $c9_wposa_obj->add_field(
// 'cortex_posts',
// array(
// 'id'      => 'archive_sidebar',
// 'type'    => 'radio',
// 'name'    => __('Archive Sidebar', 'c9'),
// 'desc'    => __('Do you want a sidebar on your posts archive visible? Set sidebars under appearance > widgets or nothing will happen!', 'c9'),
// 'options' => array(
// 'hide'          => 'No Sidebar',
// 'archive-left'  => 'Left Sidebar',
// 'archive-right' => 'Right Sidebar',
// ),
// 'default' => 'hide',
// )
// );

// ---------------------------//
// ---- End Cortex Posts -----//
// ---------------------------//

// ---------------------------//
// ---- Start Cortex SEO ---//
// ---------------------------//
// $c9_wposa_obj->add_section(
// array(
// 'id'    => 'cortex_seo',
// 'title' => __('SEO', 'c9'),
// )
// );

// $c9_wposa_obj->add_field(
// 'cortex_seo',
// array(
// 'id'      => 'google_analytics_id',
// 'type'    => 'text',
// 'name'    => __('Google Analytics ID', 'c9'),
// 'desc'    => '',
// 'default' => '',
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_seo',
// array(
// 'id'       => 'matomo_snippet',
// 'type'     => 'code',
// 'language' => 'javascript',
// 'name'     => __('Matomo Snippet', 'c9'),
// 'desc'     => '',
// 'default'  => '',
// )
// );
// $c9_wposa_obj->add_field(
// 'cortex_seo',
// array(
// 'id'       => 'gtm_snippet',
// 'type'     => 'code',
// 'language' => 'javascript',
// 'name'     => __('Google Tags Manager Snippet', 'c9'),
// 'desc'     => '',
// 'default'  => '',
// )
// );

// ---------------------------//
// ------ End Cortex SEO -----//
// ---------------------------//

// -----------------------------//
// ---- Start Cortex Advanced ---//
// ------------------------------//

// $c9_wposa_obj->add_section(
// array(
// 'id'    => 'cortex_advanced',
// 'title' => __('Advanced', 'c9'),
// )
// );

// $c9_wposa_obj->add_field(
// 'cortex_advanced',
// array(
// 'id'       => 'custom_css',
// 'type'     => 'code',
// 'language' => 'css',
// 'name'     => __('Custom CSS', 'c9'),
// 'desc'     => '',
// 'default'  => '',
// )
// );

// $c9_wposa_obj->add_field(
// 'cortex_advanced',
// array(
// 'id'       => 'custom_js',
// 'type'     => 'code',
// 'language' => 'javascript',
// 'name'     => __('Custom JS', 'c9'),
// 'desc'     => __('Drop your custom google analytics, google fonts, or Typekit code here', 'c9'),
// 'default'  => '',
// )
// );
// }
