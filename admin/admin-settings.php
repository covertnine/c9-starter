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
 * @since 1.0.0
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
	//---- Start Cortex Branding ---//
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


	// ---------------------------//
	//---- End Cortex Branding----//
	//---------------------------//

	//-------------------------------------------//

	// -----------------------------//
	//---- Start Cortex Branding ---//
	//------------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_social',
			'title' => __('Social', 'WPOSA'),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'      => 'fixed_social_links',
			'type'    => 'radio',
			'name'    => __('Fixed Social Links', 'WPOSA'),
			'desc'    => __('Set social links to always visible?', 'WPOSA'),
			'options' => array(
				"fixed" => "Fixed",
				"not_fixec" => "Not Fixed",
			),
		)
	);

	// Field: Separator.
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'separator_1',
			'type' => 'separator',
		)
	);

	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'      => 'mailchimp_api',
			'type'    => 'text',
			'name'    => __('Mailchimp API Key', 'WPOSA'),
			'desc'    => __('Add your Mailchimp API key here', 'WPOSA'),
			'default' => '',
		)
	);

	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'twitter_api',
			'type'              => 'text',
			'name'              => __('Twitter API key', 'WPOSA'),
			'desc'              => __('Input your Twitter API key here', 'WPOSA'),
		)
	);

	// Field: Separator.
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'separator_2',
			'type' => 'separator',
		)
	);

	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'twitter_username',
			'type'              => 'text',
			'name'              => __('Twitter Username', 'WPOSA'),
			'desc'              => __('Input your Twitter Username Here', 'WPOSA'),
		)
	);

	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'facebook_username',
			'type'              => 'text',
			'name'              => __('Facebook Username', 'WPOSA'),
			'desc'              => __('Input your Facebook Username Here', 'WPOSA'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'                => 'instagram_username',
			'type'              => 'text',
			'name'              => __('Instagram Username', 'WPOSA'),
			'desc'              => __('Input your Instagram Username Here', 'WPOSA'),
		)
	);


	// ---------------------------//
	//---- End Cortex Branding----//
	//---------------------------//

	// ---------------------------//
	//---- Start Cortex Layout ---//
	//---------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_layout',
			'title' => __('Layout', 'WPOSA'),
		)
	);

	// Field: Title.
	$wposa_obj->add_field(
		'cortex_layout',
		array(
			'id'   => 'header',
			'type' => 'title',
			'name' => '<h1>Header</h1>',
		)
	);
	// Field: Title.
	$wposa_obj->add_field(
		'cortex_layout',
		array(
			'id'   => 'footer',
			'type' => 'title',
			'name' => '<h1>Footer</h1>',
		)
	);


	// Field: Image.
	$wposa_obj->add_field(
		'cortex_layout',
		array(
			'id'      => 'image',
			'type'    => 'image',
			'name'    => __('Image', 'WPOSA'),
			'desc'    => __('Image description', 'WPOSA'),
			'options' => array(
				'button_label' => 'Choose Image',
			),
		)
	);

	// Field: File.
	$wposa_obj->add_field(
		'cortex_layout',
		array(
			'id'      => 'file',
			'type'    => 'file',
			'name'    => __('File', 'WPOSA'),
			'desc'    => __('File description', 'WPOSA'),
			'options' => array(
				'button_label' => 'Choose file',
			),
		)
	);

	// Field: Color.
	$wposa_obj->add_field(
		'cortex_layout',
		array(
			'id'          => 'color',
			'type'        => 'color',
			'name'        => __('Color', 'WPOSA'),
			'desc'        => __('Color description', 'WPOSA'),
			'placeholder' => __('#5F4B8B', 'WPOSA'),
		)
	);

	// Field: WYSIWYG.
	$wposa_obj->add_field(
		'cortex_layout',
		array(
			'id'   => 'wysiwyg',
			'type' => 'wysiwyg',
			'name' => __('WP_Editor', 'WPOSA'),
			'desc' => __('WP_Editor description', 'WPOSA'),
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
		)
	);
	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_posts',
		array(
			'id'      => 'header_size',
			'type'    => 'radio',
			'name'    => __('Header Size', 'WPOSA'),
			'desc'    => __('What size do you want your header to be?', 'WPOSA'),
			'options' => array(
				"big" => "Big",
				"small" => "Small",
			),
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
				"show" => "Show Sidebar",
				"hide" => "Hide Sidebar",
			),
		)
	);

	// ---------------------------//
	//---- End Cortex Posts -----//
	//---------------------------//

	//-------------------------------------------//

	// -------------------------------//
	//---- Start Cortex Typography ---//
	//--------------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_typography',
			'title' => __('Typography', 'WPOSA'),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'heading_font',
			'type'    => 'select',
			'name'    => __('Heading Font', 'WPOSA'),
			'desc'    => __('Select fonts here or add your custom typography code below', 'WPOSA'),
			'options' => array(
				"" => "",
				'Droid Sans',
				'Droid Serif',
				'Roboto',
				'Montserrat',
			),
		)
	);
	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'subheading_font',
			'type'    => 'select',
			'name'    => __('Subheading Font', 'WPOSA'),
			'desc'    => __('Select fonts here or add your custom typography code below', 'WPOSA'),
			'options' => array(
				"" => "",
				'Droid Sans',
				'Droid Serif',
				'Roboto',
				'Montserrat',
			),
		)
	);
	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'typography_presets',
			'type'    => 'select',
			'name'    => __('Body Font', 'WPOSA'),
			'desc'    => __('Select fonts here or add your custom typography code below', 'WPOSA'),
			'options' => array(
				"" => "",
				'Droid Sans',
				'Droid Serif',
				'Roboto',
				'Montserrat',
			),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_typography',
		array(
			'id'      => 'typography_code',
			'type'    => 'code',
			'name'    => __('Typography Code', 'WPOSA'),
			'desc'    => __('Add custom typography code here', 'WPOSA'),
			'language' => 'javascript'
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
			'id'      => 'google_analytics_api',
			'type'    => 'text',
			'name'    => __('Google Analytics API Key', 'WPOSA'),
			'desc'    => __('', 'WPOSA'),
			'default' => '',
		)
	);

	// ---------------------------//
	//---- End Cortex SEO ----//
	//---------------------------//
	//-------------------------------------------//

	// -------------------------------//
	//---- Start Cortex Advanced ---//
	//--------------------------------//

	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_advanced',
			'title' => __('Advanced', 'WPOSA'),
		)
	);

	// Field: Image.
	$wposa_obj->add_field(
		'cortex_layout',
		array(
			'id'      => 'image',
			'type'    => 'image',
			'name'    => __('Image', 'WPOSA'),
			'desc'    => __('Image description', 'WPOSA'),
			'options' => array(
				'button_label' => 'Choose Image',
			),
		)
	);
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
