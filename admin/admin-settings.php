<?php
// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

/**
 * WP-OOP-Settings-API Initializer
 *
 * Initializes the WP-OOP-Settings-API.
 *
 * @since   1.0.0
 */

/**
 * Class `WP_OOP_Settings_API`.
 *
 * @since 1.0.0s
 */
require get_template_directory() . '/admin/class-wp-osa.php';


/**
 * Actions/Filters
 *
 * Related to all settings API.
 *
 * @since  1.0.0
 */
if (class_exists('WP_OSA')) {
	/**
	 * Object Instantiation.
	 *
	 * Object for the class `WP_OSA`.
	 */
	$wposa_obj = new WP_OSA();


	// -----------------------------//
	//---- Start C9 Branding ---//
	//------------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_branding',
			'title' => __('Branding', 'WPOSA'),
		)
	);

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'logo',
			'type'    => 'image',
			'name'    => __('Theme Logo Upload', 'WPOSA'),
			'desc'    => __('Upload your logo here', 'WPOSA'),
		)
	);

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'                => 'apple-touch',
			'type'              => 'image',
			'name'              => __('Apple Touch Icon Upload', 'WPOSA'),
			'desc'              => __('Upload your apple touch icon here', 'WPOSA')
		)
	);

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'favicon',
			'type' => 'image',
			'name' => __('Favicon Upload', 'WPOSA'),
			'desc' => __('Upload a favicon here', 'WPOSA'),
		)
	);
	//------------------------------//
	//---- End Cortex Branding -----//
	//------------------------------//

	//------------------------------//
	//----- Start Cortex Social ----//
	//------------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_social',
			'title' => __('Social', 'WPOSA'),
		)
	);

	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'twitter',
			'type'              => 'text',
			'name'              => __('Twitter', 'WPOSA'),
			'desc'              => __('Input your Twitter Username Here', 'WPOSA'),
		)
	);

	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'facebook',
			'type'              => 'text',
			'name'              => __('Facebook', 'WPOSA'),
			'desc'              => __('Input your Facebook Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'instagram',
			'type'              => 'text',
			'name'              => __('Instagram', 'WPOSA'),
			'desc'              => __('Input your Instagram Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'pinterest',
			'type'              => 'text',
			'name'              => __('Pinterest', 'WPOSA'),
			'desc'              => __('Input your Pinterest Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'spotify',
			'type'              => 'text',
			'name'              => __('Spotify', 'WPOSA'),
			'desc'              => __('Input your Spotify Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'youtube',
			'type'              => 'text',
			'name'              => __('Youtube', 'WPOSA'),
			'desc'              => __('Input your Youtube Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'flickr',
			'type'              => 'text',
			'name'              => __('Flickr', 'WPOSA'),
			'desc'              => __('Input your Flickr Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'tumblr',
			'type'              => 'text',
			'name'              => __('Tumblr', 'WPOSA'),
			'desc'              => __('Input your Tumblr Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'yelp',
			'type'              => 'text',
			'name'              => __('Yelp', 'WPOSA'),
			'desc'              => __('Input your Yelp Name Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'subreddit',
			'type'              => 'text',
			'name'              => __('Subreddit', 'WPOSA'),
			'desc'              => __('Input your Subreddit Name Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'linkedin',
			'type'              => 'text',
			'name'              => __('Linkedin', 'WPOSA'),
			'desc'              => __('Input your Linkedin Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'github',
			'type'              => 'text',
			'name'              => __('Github', 'WPOSA'),
			'desc'              => __('Input your Github Name Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'soundcloud',
			'type'              => 'text',
			'name'              => __('Soundcloud', 'WPOSA'),
			'desc'              => __('Input your Soundcloud Name Here', 'WPOSA'),
		)
	);

	// ---------------------------//
	//---- End Cortex Branding----//
	//----------------------------//

	// ---------------------------//
	//---- Start Cortex Footer ---//
	//----------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_footer',
			'title' => __('Footer', 'WPOSA'),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_footer',
		array(
			'id'      => 'show_search',
			'type'    => 'radio',
			'name'    => __('Display Search in Footer', 'WPOSA'),
			'desc'    => __('Do you want to show or hide the search form?', 'WPOSA'),
			'options' => array(
				"show" => "Show",
				"hide" => "Hide",
			),
			'default' => 'show'
		)
	);

	$wposa_obj->add_field(
		'cortex_footer',
		array(
			'id'   => 'copyright_content',
			'type' => 'wysiwyg',
			'name' => __('Copyright', 'WPOSA'),
			'desc' => __('Enter Custom Copyright Content Here', 'WPOSA'),
		)
	);

	// ---------------------------//
	//---- End Cortex Layout ----//
	//---------------------------//

	//-------------------------------------------//

	// ---------------------------//
	//---- Start Cortex Posts ---//
	//---------------------------//

	// Section: Other Settings.
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_posts',
			'title' => __('Posts', 'WPOSA'),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_posts',
		array(
			'id'      => 'author_visible',
			'type'    => 'radio',
			'name'    => __('Author name visibility', 'WPOSA'),
			'desc'    => __('Do you want to show or hide author posts?', 'WPOSA'),
			'options' => array(
				"show" => "Show",
				"hide" => "Hide",
			),
			'default' => 'show'
		)
	);
	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_posts',
		array(
			'id'      => 'social_icons',
			'type'    => 'radio',
			'name'    => __('Social Icon Visibility', 'WPOSA'),
			'desc'    => __('Do you want your social sharing icons to be visible', 'WPOSA'),
			'options' => array(
				"show" => "Show",
				"hide" => "Hide",
			),
			'default' => 'show'
		)
	);
	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_posts',
		array(
			'id'      => 'blog_sidebar',
			'type'    => 'radio',
			'name'    => __('Blog Sidebar', 'WPOSA'),
			'desc'    => __('Do you want a sidebar on your posts visible', 'WPOSA'),
			'options' => array(
				"hide" => "No Sidebar",
				"sidebar-left" => "Left Sidebar",
				"sidebar-right" => "Right Sidebar",
			),
			'default' => 'hide'
		)
	);

	// ---------------------------//
	//---- End Cortex Posts -----//
	//---------------------------//

	//-------------------------------------------//

	// -------------------------------//
	//---- Start Cortex Typography ---//
	//--------------------------------//

	//The tab title of the Typography 
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_typography',
			'title' => __('Typography', 'WPOSA'),
		)
	);

	//Field: Default Font Selector
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'defaultFont',
			'type'    => 'radio',
			'name'    => __('Use Cortex Theme Based Fonts?', 'WPOSA'),
			'options' => array(
				"yes" => "Yes.",
				"no" => "No, I will take care of my fonts.",
			),
		)
	);

	//If the user selects YES and will select the fonts.
	//The default font will be Helvatic for system fonts:

	//Update an array to contain the fonts that will be used 
	//throughout each of the font selector fields:
	$c9fonts = array(
		'Roboto' => 'Roboto',
		'Montserrat' => 'Montserrat',
		'PT Sans' => 'PT Sans',
		'Raleway' => 'Raleway',
		'Montserrat' => 'Montserrat',
		'Source Sans Pro' => 'Source Sans Pro',
		'Oswald' => 'Oswald',
		'Open Sans' => 'Open Sans'
	);


	//Field: Default Font Selector
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'heading_font',
			'type'    => 'select',
			'name'    => __('Heading Font', 'WPOSA'),
			'desc'    => __('Select fonts here', 'WPOSA'),
			'options' => $c9fonts
		)
	);


	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'subheading_font',
			'type'    => 'select',
			'name'    => __('Subheading Font', 'WPOSA'),
			'desc'    => __('Select fonts here', 'WPOSA'),
			'options' => $c9fonts
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'body_font',
			'type'    => 'select',
			'name'    => __('Body Font', 'WPOSA'),
			'desc'    => __('Select fonts here', 'WPOSA'),
			'options' => $c9fonts
		)
	);



	// ---------------------------//
	//---- End Cortex Typography -----//
	//---------------------------//

	//-------------------------------------------//
	// ---------------------------//
	//---- Start Cortex SEO ---//
	//---------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_seo',
			'title' => __('SEO', 'WPOSA'),
		)
	);

	$wposa_obj->add_field(
		'cortex_seo',
		array(
			'id'      => 'google_analytics_id',
			'type'    => 'text',
			'name'    => __('Google Analytics ID', 'WPOSA'),
			'desc'    => __('', 'WPOSA'),
			'default' => '',
		)
	);
	$wposa_obj->add_field(
		'cortex_seo',
		array(
			'id'      => 'matomo_snippet',
			'type'    => 'code',
			'language' => 'javascript',
			'name'    => __('Matomo Snippet', 'WPOSA'),
			'desc'    => __('', 'WPOSA'),
			'default' => '',
		)
	);
	$wposa_obj->add_field(
		'cortex_seo',
		array(
			'id'      => 'gtm_snippet',
			'type'    => 'code',
			'language' => 'javascript',
			'name'    => __('Google Tags Manager Snippet', 'WPOSA'),
			'desc'    => __('', 'WPOSA'),
			'default' => '',
		)
	);

	//---------------------------//
	//------ End Cortex SEO -----//
	//---------------------------//

	// -----------------------------//
	//---- Start Cortex Advanced ---//
	//------------------------------//

	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_advanced',
			'title' => __('Advanced', 'WPOSA'),
		)
	);

	// $wposa_obj->add_field(
	// 	'cortex_advanced',
	// 	array(
	// 		'id'      => 'dev_mode',
	// 		'type'    => 'radio',
	// 		'name'    => __('Enable Dev Mode', 'WPOSA'),
	// 		'desc'    => __('Use unminified files', 'WPOSA'),
	// 		'options' => array(
	// 			"enable" => "Enable",
	// 			"disable" => "Disable",
	// 		),
	// 		'default' => 'disable'
	// 	)
	// );

	$wposa_obj->add_field(
		'cortex_advanced',
		array(
			'id'      => 'custom_css',
			'type'    => 'code',
			'language' => 'css',
			'name'    => __('Custom CSS', 'WPOSA'),
			'desc'    => __('', 'WPOSA'),
			'default' => '',
		)
	);

	$wposa_obj->add_field(
		'cortex_advanced',
		array(
			'id'      => 'custom_js',
			'type'    => 'code',
			'language' => 'javascript',
			'name'    => __('Custom JS', 'WPOSA'),
			'desc'    => __('Drop your custom google analytics, google fonts, or Typekit code here', 'WPOSA'),
			'default' => '',
		)
	);
}
