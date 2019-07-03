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
			'id'      => 'text',
			'type'    => 'text',
			'name'    => __('Text Input', 'WPOSA'),
			'desc'    => __('Text input description', 'WPOSA'),
			'default' => 'Default Text',
		)
	);

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'                => 'text_no',
			'type'              => 'number',
			'name'              => __('Number Input', 'WPOSA'),
			'desc'              => __('Number field with validation callback `intval`', 'WPOSA'),
			'default'           => 1,
			'sanitize_callback' => 'intval',
		)
	);

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'password',
			'type' => 'password',
			'name' => __('Password Input', 'WPOSA'),
			'desc' => __('Password field description', 'WPOSA'),
		)
	);


	// ---------------------------//
	//---- End Cortex Branding----//
	//---------------------------//

	//-------------------------------------------//

	// ---------------------------//
	//---- Start Cortex Layout ---//
	//---------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_layout',
			'title' => __('Layout', 'WPOSA'),
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
	//---- Start Cortex Social ---//
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
	//---- End Cortex Social ----//
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
			'id'      => 'typography_presets',
			'type'    => 'multicheck',
			'name'    => __('Font Presets', 'WPOSA'),
			'desc'    => __('Select fonts here or add your custom typography code below', 'WPOSA'),
			'options' => array(
				'Droid Sans' => 'Droid Sans',
				'Droid Serif'  => 'Droid Serif',
				'Roboto'  => 'Roboto',
				'Montserrat'  => 'Montserrat',
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
	//---- End Cortex Posts -----//
	//---------------------------//

	//-------------------------------------------//

	// -------------------------------//
	//---- Start Cortex Typography ---//
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
			'id'      => 'header_js',
			'type'    => 'code',
			'language' => 'javascript',
			'name'    => __('Header JS', 'WPOSA'),
			'desc'    => __('Drop your custom google analytics, google fonts, or Typekit code here', 'WPOSA'),
			'default' => '',
		)
	);
	$wposa_obj->add_field(
		'cortex_advanced',
		array(
			'id'      => 'footer_js',
			'type'    => 'code',
			'language' => 'javascript',
			'name'    => __('Footer JS', 'WPOSA'),
			'desc'    => __('Drop other Javascript here, maybe', 'WPOSA'),
			'default' => '',
		)
	);
}
