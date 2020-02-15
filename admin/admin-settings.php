<?php

/**
 *
 * Add fields and configure admin settings API.
 *
 * @since   1.0.0
 * @package c9
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

require get_template_directory() . '/admin/class-wp-osa.php';

/**
 * Sets up meta for post header size.
 */
function c9_post_header_size()
{
	add_meta_box(
		'post_header_size',           // Unique ID
		'Header Size',  // Box title
		'c9_post_header_size_html',  // Content callback, must be of type callable
		'post',               // Post type
		'side'
	);
}
add_action('add_meta_boxes', 'c9_post_header_size');

/**
 * Content callback for post header size.
 */
function c9_post_header_size_html($post)
{
	$value = isset(get_post_meta($post->ID, 'c9_post_header_size', true)['c9_post_header_size']) ? get_post_meta($post->ID, 'c9_post_header_size', true)['c9_post_header_size'] : 'small';
?>
	<label for="c9_post_header_size">Header Size</label>
	<div>
		<input type="radio" id="large" name="c9_post_header_size" value="large" <?php echo 'large' === $value ? 'checked' : ''; ?>>
		<label for="large">Large</label>
	</div>
	<div>
		<input type="radio" id="small" name="c9_post_header_size" value="small" <?php echo 'small' === $value ? 'checked' : ''; ?>>
		<label for="small">Small</label>
	</div>
<?php
}

/**
 * Update post meta.
 */
function c9_save_header_size($post_id)
{
	if (array_key_exists('c9_post_header_size', $_POST)) {
		$unslashed = wp_unslash($_POST);
		update_post_meta(
			$post_id,
			'c9_post_header_size',
			$unslashed
		);
	}
}
add_action('save_post', 'c9_save_header_size');

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
	// ---- Start C9 Branding ---//
	// ------------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_branding',
			'title' => __('Branding', 'c9'),
		)
	);

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'logo',
			'type' => 'image',
			'name' => __('Theme Logo', 'c9'),
			'desc' => __('Upload your logo here', 'c9'),
		)
	);

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'apple-touch',
			'type' => 'image',
			'name' => __('Apple Touch Icon', 'c9'),
			'desc' => __('Upload your apple touch icon here', 'c9'),
		)
	);

	// Field: Default Font Selector
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'defaultFont',
			'type'    => 'radio',
			'name'    => __('Use C9 Theme Based Fonts?', 'c9'),
			'options' => array(
				'yes' => 'Yes.',
				'no'  => 'No, I will take care of my fonts.',
			),
		)
	);

	// If the user selects YES and will select the fonts.
	// The default font will be Helvetica for system fonts:

	// Update an array to contain the fonts that will be used
	// throughout each of the font selector fields:
	$c9fonts = array(
		'Abel'			  		=> 'Abel',
		'Bebas Neue'	  		=> 'Bebas Neue',
		'Lato'			  		=> 'Lato',
		'Lobster'		  		=> 'Lobster',
		'Merriweather'			=> 'Merriweather',
		'Montserrat'      		=> 'Montserrat',
		'Muli',					=> 'Muli',
		'Nunito',				=> 'Nunito',
		'Open Sans'       		=> 'Open Sans',
		'Open Sans Condensed'   => 'Open Sans Condensed',
		'Oswald'          		=> 'Oswald',
		'Playfair Display',   	=> 'Playfair Display',
		'PT Sans'         		=> 'PT Sans',
		'PT Serif'         		=> 'PT Serif',
		'Quicksand'         	=> 'Quicksand',
		'Raleway'         		=> 'Raleway',
		'Roboto'          		=> 'Roboto',
		'Roboto Condensed'		=> 'Roboto Condensed',
		'Roboto Slab'			=> 'Roboto Slab',
		'Source Sans Pro' 		=> 'Source Sans Pro',
		'Work Sans'         	=> 'Work Sans',
	);


	// Field: Default Font Selector
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'heading_font',
			'type'    => 'select',
			'name'    => __('Heading Font', 'c9'),
			'desc'    => __('Select fonts here', 'c9'),
			'options' => $c9fonts,
		)
	);


	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'subheading_font',
			'type'    => 'select',
			'name'    => __('Subheading Font', 'c9'),
			'desc'    => __('Select fonts here', 'c9'),
			'options' => $c9fonts,
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'      => 'body_font',
			'type'    => 'select',
			'name'    => __('Body Font', 'c9'),
			'desc'    => __('Select fonts here', 'c9'),
			'options' => $c9fonts,
		)
	);

	// ------------------------------//
	// ---- End Cortex Branding -----//
	// ------------------------------//

	// ------------------------------//
	// ----- Start Cortex Social ----//
	// ------------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_social',
			'title' => __('Social', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'twitter',
			'type' => 'text',
			'name' => __('Twitter', 'c9'),
			'desc' => __('Input your Twitter Username or full url', 'c9'),
		)
	);

	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'facebook',
			'type' => 'text',
			'name' => __('Facebook', 'c9'),
			'desc' => __('Input your Facebook Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'instagram',
			'type' => 'text',
			'name' => __('Instagram', 'c9'),
			'desc' => __('Input your Instagram Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'pinterest',
			'type' => 'text',
			'name' => __('Pinterest', 'c9'),
			'desc' => __('Input your Pinterest Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'spotify',
			'type' => 'text',
			'name' => __('Spotify', 'c9'),
			'desc' => __('Input your Spotify Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'youtube',
			'type' => 'text',
			'name' => __('Youtube', 'c9'),
			'desc' => __('Input your Youtube Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'flickr',
			'type' => 'text',
			'name' => __('Flickr', 'c9'),
			'desc' => __('Input your Flickr Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'tumblr',
			'type' => 'text',
			'name' => __('Tumblr', 'c9'),
			'desc' => __('Input your Tumblr Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'yelp',
			'type' => 'text',
			'name' => __('Yelp', 'c9'),
			'desc' => __('Input your Yelp Name or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'subreddit',
			'type' => 'text',
			'name' => __('Subreddit', 'c9'),
			'desc' => __('Input your Subreddit Name or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'linkedin',
			'type' => 'text',
			'name' => __('Linkedin', 'c9'),
			'desc' => __('Input your Linkedin Username or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'github',
			'type' => 'text',
			'name' => __('Github', 'c9'),
			'desc' => __('Input your Github Name or full url', 'c9'),
		)
	);
	$wposa_obj->add_field(
		'cortex_social',
		array(
			'id'   => 'soundcloud',
			'type' => 'text',
			'name' => __('Soundcloud', 'c9'),
			'desc' => __('Input your Soundcloud Name or full url', 'c9'),
		)
	);

	// ---------------------------//
	// ---- End Cortex Branding----//
	// ----------------------------//

	// ---------------------------//
	// ---- Start Cortex Footer ---//
	// ----------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_footer',
			'title' => __('Footer', 'c9'),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_footer',
		array(
			'id'      => 'show_search',
			'type'    => 'radio',
			'name'    => __('Display Search in Footer', 'c9'),
			'desc'    => __('Do you want to show or hide the search form?', 'c9'),
			'options' => array(
				'show' => 'Show',
				'hide' => 'Hide',
			),
			'default' => 'show',
		)
	);

	$wposa_obj->add_field(
		'cortex_footer',
		array(
			'id'   => 'copyright_content',
			'type' => 'wysiwyg',
			'name' => __('Copyright', 'c9'),
			'desc' => __('Enter Custom Copyright Content Here', 'c9'),
		)
	);

	// ---------------------------//
	// ---- End Cortex Layout ----//
	// ---------------------------//

	// -------------------------------------------//

	// ---------------------------//
	// ---- Start Cortex Posts ---//
	// ---------------------------//

	// Section: Other Settings.
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_posts',
			'title' => __('Posts', 'c9'),
		)
	);

	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_posts',
		array(
			'id'      => 'author_visible',
			'type'    => 'radio',
			'name'    => __('Author name visibility', 'c9'),
			'desc'    => __('Do you want to show or hide author posts?', 'c9'),
			'options' => array(
				'show' => 'Show',
				'hide' => 'Hide',
			),
			'default' => 'show',
		)
	);
	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_posts',
		array(
			'id'      => 'blog_sidebar',
			'type'    => 'radio',
			'name'    => __('Blog Single Sidebar', 'c9'),
			'desc'    => __('Do you want a sidebar on your posts visible? Set sidebars under appearance > widgets or nothing will happen!', 'c9'),
			'options' => array(
				'hide'          => 'No Sidebar',
				'sidebar-left'  => 'Left Sidebar',
				'sidebar-right' => 'Right Sidebar',
			),
			'default' => 'hide',
		)
	);
	// Field: Multicheck.
	$wposa_obj->add_field(
		'cortex_posts',
		array(
			'id'      => 'archive_sidebar',
			'type'    => 'radio',
			'name'    => __('Archive Sidebar', 'c9'),
			'desc'    => __('Do you want a sidebar on your posts archive visible? Set sidebars under appearance > widgets or nothing will happen!', 'c9'),
			'options' => array(
				'hide'          => 'No Sidebar',
				'archive-left'  => 'Left Sidebar',
				'archive-right' => 'Right Sidebar',
			),
			'default' => 'hide',
		)
	);

	// ---------------------------//
	// ---- End Cortex Posts -----//
	// ---------------------------//

	// ---------------------------//
	// ---- Start Cortex SEO ---//
	// ---------------------------//
	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_seo',
			'title' => __('SEO', 'c9'),
		)
	);

	$wposa_obj->add_field(
		'cortex_seo',
		array(
			'id'      => 'google_analytics_id',
			'type'    => 'text',
			'name'    => __('Google Analytics ID', 'c9'),
			'desc'    => '',
			'default' => '',
		)
	);
	$wposa_obj->add_field(
		'cortex_seo',
		array(
			'id'       => 'matomo_snippet',
			'type'     => 'code',
			'language' => 'javascript',
			'name'     => __('Matomo Snippet', 'c9'),
			'desc'     => '',
			'default'  => '',
		)
	);
	$wposa_obj->add_field(
		'cortex_seo',
		array(
			'id'       => 'gtm_snippet',
			'type'     => 'code',
			'language' => 'javascript',
			'name'     => __('Google Tags Manager Snippet', 'c9'),
			'desc'     => '',
			'default'  => '',
		)
	);

	// ---------------------------//
	// ------ End Cortex SEO -----//
	// ---------------------------//

	// -----------------------------//
	// ---- Start Cortex Advanced ---//
	// ------------------------------//

	$wposa_obj->add_section(
		array(
			'id'    => 'cortex_advanced',
			'title' => __('Advanced', 'c9'),
		)
	);

	$wposa_obj->add_field(
		'cortex_advanced',
		array(
			'id'       => 'custom_css',
			'type'     => 'code',
			'language' => 'css',
			'name'     => __('Custom CSS', 'c9'),
			'desc'     => '',
			'default'  => '',
		)
	);

	$wposa_obj->add_field(
		'cortex_advanced',
		array(
			'id'       => 'custom_js',
			'type'     => 'code',
			'language' => 'javascript',
			'name'     => __('Custom JS', 'c9'),
			'desc'     => __('Drop your custom google analytics, google fonts, or Typekit code here', 'c9'),
			'default'  => '',
		)
	);
}
