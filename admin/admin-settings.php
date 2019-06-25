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


	// Section: Basic Settings.
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_branding',
			'title' => __('Branding', 'WPOSA'),
		)
	);

	// Section: Other Settings.
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_layout',
			'title' => __('Layout', 'WPOSA'),
		)
	);

	// Section: Other Settings.
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_styles',
			'title' => __('Styles', 'WPOSA'),
		)
	);


	// Field: Text.
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

	// Field: Number.
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

	// Field: Password.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'password',
			'type' => 'password',
			'name' => __('Password Input', 'WPOSA'),
			'desc' => __('Password field description', 'WPOSA'),
		)
	);

	// Field: Textarea.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'textarea',
			'type' => 'textarea',
			'name' => __('Textarea Input', 'WPOSA'),
			'desc' => __('Textarea description', 'WPOSA'),
		)
	);

	// Field: Separator.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'separator',
			'type' => 'separator',
		)
	);

	// Field: Title.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'title',
			'type' => 'title',
			'name' => '<h1>Title</h1>',
		)
	);

	// Field: Checkbox.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'checkbox',
			'type' => 'checkbox',
			'name' => __('Checkbox', 'WPOSA'),
			'desc' => __('Checkbox Label', 'WPOSA'),
		)
	);

	// Field: Radio.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'radio',
			'type'    => 'radio',
			'name'    => __('Radio', 'WPOSA'),
			'desc'    => __('Radio Button', 'WPOSA'),
			'options' => array(
				'yes' => 'Yes',
				'no'  => 'No',
			),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'multicheck',
			'type'    => 'multicheck',
			'name'    => __('Multile checkbox', 'WPOSA'),
			'desc'    => __('Multile checkbox description', 'WPOSA'),
			'options' => array(
				'yes' => 'Yes',
				'no'  => 'No',
			),
		)
	);

	// Field: Select.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'select',
			'type'    => 'select',
			'name'    => __('A Dropdown', 'WPOSA'),
			'desc'    => __('A Dropdown description', 'WPOSA'),
			'options' => array(
				'yes' => 'Yes',
				'no'  => 'No',
			),
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
}
