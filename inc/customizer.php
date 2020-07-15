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
						'priority' => 97,
					)
				);

				$wp_customize->add_setting(
					'c9_show_search',
					array(
						'default'           => 'show',
						'type' => 'theme_mod',
 						'capability' => 'edit_theme_options',
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
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
						'sanitize_callback' => 'wp_kses',
						'transport'         => 'postMessage',

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
					'c9_social',
					array(
						'title'    => __( 'Social Media', 'c9' ),
						'priority' => 92,
					)
				);


				$wp_customize->add_setting(
					'c9_show_social',
					array(
						'default'           => 'show',
						'sanitize_callback' => 'sanitize_html_class',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_show_social',
					array(
						'type'        => 'radio',
						'label'       => __( 'Display social icons in footer', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Hide or show social icons in the footer', 'c9' ),
						'choices'     => array(
							'show' => __( 'Show', 'c9' ),
							'hide' => __( 'Hide', 'c9' ),
						),
					)
				);


				$wp_customize->add_setting(
					'c9_twitter',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_twitter',
					array(
						'type'        => 'text',
						'label'       => __( 'Twitter Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Twitter Username or full url', 'c9' ),
					)
				);
				$wp_customize->add_setting(
					'c9_facebook',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_facebook',
					array(
						'type'        => 'text',
						'label'       => __( 'Facebook Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Facebook username or full url', 'c9' ),
					)
				);
				$wp_customize->add_setting(
					'c9_instagram',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_instagram',
					array(
						'type'        => 'text',
						'label'       => __( 'Instagram Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Instagram username or full url', 'c9' ),
					)
				);
				$wp_customize->add_setting(
					'c9_pinterest',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_pinterest',
					array(
						'type'        => 'text',
						'label'       => __( 'Pinterest Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Pinterest username or full url', 'c9' ),
					)
				);

				$wp_customize->add_setting(
					'c9_spotify',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_spotify',
					array(
						'type'        => 'text',
						'label'       => __( 'Spotify Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Spotify username or full url', 'c9' )
					)
				);

				$wp_customize->add_setting(
					'c9_youtube',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_youtube',
					array(
						'type'        => 'text',
						'label'       => __( 'YouTube Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your YouTube username or full url', 'c9' ),
					)
				);

				$wp_customize->add_setting(
					'c9_yelp',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_yelp',
					array(
						'type'        => 'text',
						'label'       => __( 'Yelp Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Yelp username or full url', 'c9' ),
					)
				);

				$wp_customize->add_setting(
					'c9_subreddit',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_subreddit',
					array(
						'type'        => 'text',
						'label'       => __( 'Subreddit Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Subreddit url', 'c9' ),
					)
				);

				$wp_customize->add_setting(
					'c9_linkedin',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_linkedin',
					array(
						'type'        => 'text',
						'label'       => __( 'LinkedIn Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your LinkedIn url', 'c9' ),
					)
				);

				$wp_customize->add_setting(
					'c9_github',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_github',
					array(
						'type'        => 'text',
						'label'       => __( 'Github Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your Github username or full url', 'c9' ),
					)
				);

				$wp_customize->add_setting(
					'c9_soundcloud',
					array(
						'default'           => '',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_soundcloud',
					array(
						'type'        => 'text',
						'label'       => __( 'SoundCloud Link', 'c9' ),
						'section'     => 'c9_social',
						'description' => __( 'Input your SoundCloud username or full url', 'c9' ),
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
						'default'           => 'no',
						'transport'         => 'refresh',
						'sanitize_callback' => 'sanitize_html_class',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_default_font',
					array(
						'type'    => 'radio',
						'label'   => __( 'Use C9 Theme Fonts?', 'c9' ),
						'section' => 'c9_branding',
						'choices' => array(
							'yes' => __( 'Yes', 'c9' ),
							'no'  => __( 'No, I will queue my own fonts.', 'c9' ),
						),
					)
				);

				/*
				 If the user selects YES and will select the fonts.
				The default font will be Helvetica for system fonts:
				if ( get_theme_mod ( 'c9_default_font') === 'yes') { */

				// Update an array to contain the fonts that will be used
				// throughout each of the font selector fields:
				$c9fonts = array(
					''																=> '',
					'Abel'                											=> 'Abel',
					'Bebas+Neue'          											=> 'Bebas Neue',
					'Lato:300,400,700,900,400italic,700italic'   					=> 'Lato',
					'Lobster'             											=> 'Lobster',
					'Merriweather:300,400,700,900,400italic,700italic'        		=> 'Merriweather',
					'Montserrat:300,400,700,900,400italic,700italic'				=> 'Montserrat',
					'Muli'                											=> 'Muli',
					'Nunito:300,400,700,900,400italic,700italic'              		=> 'Nunito',
					'Open+Sans:300,400,700,800,400italic,700italic'           		=> 'Open Sans',
					'Open+Sans+Condensed:300;700' 									=> 'Open Sans Condensed',
					'Oswald:300;400;700'              								=> 'Oswald',
					'Playfair+Display:400,700,900,400italic,700italic'    			=> 'Playfair Display',
					'Poppins:300,400,700,900,400italic,700italic'             		=> 'Poppins',
					'PT+Sans:400,700,400italic,700italic'             				=> 'PT Sans',
					'PT+Serif:400,700,400italic,700italic'            				=> 'PT Serif',
					'Quicksand:300;400;700'           								=> 'Quicksand',
					'Raleway:300,400,700,900,400italic,700italic'             		=> 'Raleway',
					'Roboto:300,400,700,900,400italic,700italic'              		=> 'Roboto',
					'Roboto+Condensed:300,400,700,400italic,700italic'    			=> 'Roboto Condensed',
					'Roboto+Slab:300,400,700,900'         							=> 'Roboto Slab',
					'Sen:400,700,800'                 								=> 'Sen',
					'Source+Sans+Pro:300,400,700,900,400italic,700italic'     		=> 'Source Sans Pro',
					'Work+Sans:300,400,700,900,400italic,700italic'           		=> 'Work Sans',
				);

				$wp_customize->add_setting(
					'c9_heading_font',
					array(
						'default'           => '',
						'transport'         => 'refresh',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_heading_font',
					array(
						'type'        => 'select',
						'label'       => __( 'Heading Font', 'c9' ),
						'description' => __( 'Select your heading font family.', 'c9' ),
						'section'     => 'c9_branding',
						'choices'     => $c9fonts,
					)
				);

				$wp_customize->add_setting(
					'c9_subheading_font',
					array(
						'default'           => '',
						'transport'         => 'refresh',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_subheading_font',
					array(
						'type'        => 'select',
						'label'       => __( 'Subheading Font', 'c9' ),
						'description' => __( 'Select your subheading font family.', 'c9' ),
						'section'     => 'c9_branding',
						'choices'     => $c9fonts,
					)
				);
				$wp_customize->add_setting(
					'c9_body_font',
					array(
						'default'           => '',
						'transport'         => 'refresh',
						'sanitize_callback' => 'wp_filter_post_kses',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);
				$wp_customize->add_control(
					'c9_body_font',
					array(
						'type'        => 'select',
						'label'       => __( 'Body Paragraph Font', 'c9' ),
						'description' => __( 'Select your base font family.', 'c9' ),
						'section'     => 'c9_branding',
						'choices'     => $c9fonts,
					)
				);

				$wp_customize->add_section(
					'c9_posts',
					array(
						'title'    => __( 'Posts', 'c9' ),
						'priority' => 90,
					)
				);

				$wp_customize->add_setting(
					'c9_author_visible',
					array(
						'default'           => 'hide',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'sanitize_html_class',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_author_visible',
					array(
						'type'    => 'radio',
						'label'   => __( 'Do you want to show or hide the author name on posts?', 'c9' ),
						'section' => 'c9_posts',
						'choices' => array(
							'show' => __( 'Show', 'c9' ),
							'hide' => __( 'Hide', 'c9' ),
						),
					)
				);

				$wp_customize->add_setting(
					'c9_blog_sidebar',
					array(
						'default'           => 'hide',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'sanitize_html_class',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_blog_sidebar',
					array(
						'type'    => 'radio',
						'label'   => __( 'Display a sidebar on single posts?', 'c9' ),
						'section' => 'c9_posts',
						'choices' => array(
							'hide'          => __( 'No Sidebar', 'c9' ),
							'sidebar-left'  => __( 'Left Sidebar', 'c9' ),
							'sidebar-right' => __( 'Right Sidebar', 'c9' ),
						),
					)
				);

				$wp_customize->add_setting(
					'c9_archive_sidebar',
					array(
						'default'           => 'hide',
						'transport'         => 'postMessage',
						'sanitize_callback' => 'sanitize_html_class',
						'type' 				=> 'theme_mod',
						'capability' 		=> 'edit_theme_options',
					)
				);

				$wp_customize->add_control(
					'c9_archive_sidebar',
					array(
						'type'    => 'radio',
						'label'   => __( 'Display a sidebar on archive pages?', 'c9' ),
						'section' => 'c9_posts',
						'choices' => array(
							'hide'          => __( 'No Sidebar', 'c9' ),
							'archive-left'  => __( 'Left Sidebar', 'c9' ),
							'archive-right' => __( 'Right Sidebar', 'c9' ),
						),
					)
				);

				// $wp_customize->add_section(
				// 	'c9_seo',
				// 	array(
				// 		'title'    => __( 'SEO', 'c9' ),
				// 		'priority' => 98,
				// 	)
				// );

				// $wp_customize->add_setting(
				// 	'c9_google_analytics_id',
				// 	array(
				// 		'default'           => '',
				// 		'sanitize_callback' => 'wp_filter_post_kses',
				// 		'transport'         => 'postMessage',
				// 		'type' 				=> 'theme_mod',
				// 		'capability' 		=> 'edit_theme_options',
				// 	)
				// );

				// $wp_customize->add_control(
				// 	'c9_google_analytics_id',
				// 	array(
				// 		'type'        => 'text',
				// 		'label'       => __( 'Google Analytics ID', 'c9' ),
				// 		'section'     => 'c9_seo',
				// 		'description' => __( 'Enter your Google Analytics tracking ID to have the tracking code inserted in your pages. Should begin with UA-', 'c9' ),
				// 	)
				// );

				// } //end checking for theme_mod being set
	}
}
add_action( 'customize_register', 'c9_customize_register' );
