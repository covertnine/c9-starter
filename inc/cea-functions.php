<?php
/**
* Gravity Forms Custom Activation Template
* http://gravitywiz.com/customizing-gravity-forms-user-registration-activation-page
*/
add_action('wp', 'custom_maybe_activate_user', 9);
function custom_maybe_activate_user() {

    $template_path = STYLESHEETPATH . '/activate.php';
    $is_activate_page = isset( $_GET['page'] ) && $_GET['page'] == 'gf_activation';

    if( ! file_exists( $template_path ) || ! $is_activate_page  )
        return;

    require_once( $template_path );

    exit();
}

/**
* Disable admin bars
*/
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

add_filter('somfrp_get_allowed_html_tags', 'cea_html_allowed');
function cea_html_allowed($allowed_tags) {
	$more_tags = array(
		'div' => array(
			'style' => array()
		),
		'h3' => array(
			'style' => array()
		),
		'img' => array(
			'src' => array(),
			'style' => array(),
			'alt' => array(),
			'height' => array(),
			'width' => array()
		),
		'span' => array(
			'style' => array()
		),
		'a' => array(
			'href' => array(),
			'title' => array(),
			'style' => array(),
		),
	);

	$allowed_tags = array_merge($allowed_tags, $more_tags);

	return $allowed_tags;

}

