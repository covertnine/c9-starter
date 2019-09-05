<?php

/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package cortextoo
 */

add_filter('body_class', 'cortextoo_body_classes');

if (!function_exists('cortextoo_body_classes')) {
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	function cortextoo_body_classes($classes)
	{
		// Adds a class of group-blog to blogs with more than 1 published author.
		if (is_multi_author()) {
			$classes[] = 'group-blog';
		}
		// Adds a class of hfeed to non-singular pages.
		if (!is_singular()) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
}

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter('body_class', 'cortextoo_adjust_body_class');

if (!function_exists('cortextoo_adjust_body_class')) {
	/**
	 * Setup body classes.
	 *
	 * @param string $classes CSS classes.
	 *
	 * @return mixed
	 */
	function cortextoo_adjust_body_class($classes)
	{

		foreach ($classes as $key => $value) {
			if ('tag' == $value) {
				unset($classes[$key]);
			}
		}

		return $classes;
	}
}

// Filter custom logo with correct classes.
add_filter('get_custom_logo', 'cortextoo_change_logo_class');

if (!function_exists('cortextoo_change_logo_class')) {
	/**
	 * Replaces logo CSS class.
	 *
	 * @param string $html Markup.
	 *
	 * @return mixed
	 */
	function cortextoo_change_logo_class($html)
	{

		$html = str_replace('class="custom-logo"', 'class="img-fluid c9-custom-logo"', $html);
		$html = str_replace('class="custom-logo-link"', 'class="navbar-brand custom-logo-link c9-custom-logo"', $html);
		$html = str_replace('alt=""', 'title="Home" alt="logo"', $html);

		return $html;
	}
}

/**
 * Display navigation to next/previous post when applicable.
 */

if (!function_exists('cortextoo_post_nav')) {
	function cortextoo_post_nav()
	{
		// Don't print empty markup if there's nowhere to navigate.
		$previous = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
		$next     = get_adjacent_post(false, '', false);

		if (!$next && !$previous) {
			return;
		}
		?>
		<nav class="navigation post-navigation">
			<h2 class="sr-only"><?php _e('Post navigation', 'cortextoo'); ?></h2>
			<div class="nav-links justify-content-between px-3">
				<?php

						if (get_previous_post_link()) {
							previous_post_link('<span class="nav-previous">%link</span>', _x('<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'cortextoo'));
						}
						if (get_next_post_link()) {
							next_post_link('<span class="nav-next">%link</span>',     _x('%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'cortextoo'));
						}
						?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->

	<?php
		}
	}

	/**
	 allow svg uploads
	 */
	function c9_mime_types($mimes)
	{
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'c9_mime_types');

	function c9_display_image_size_names_muploader($sizes)
	{

		$new_sizes = array();

		$added_sizes = get_intermediate_image_sizes();

		// $added_sizes is an indexed array, therefore need to convert it
		// to associative array, using $value for $key and $value
		foreach ($added_sizes as $key => $value) {
			$new_sizes[$value] = $value;
		}

		// This preserves the labels in $sizes, and merges the two arrays
		$new_sizes = array_merge($new_sizes, $sizes);

		return $new_sizes;
	}
	add_filter('image_size_names_choose', 'c9_display_image_size_names_muploader', 11, 1);

	function cortex_login_logo()
	{
		if (!empty(get_option('cortex_branding')['logo'])) { //logo has been uploaded
			$cortex_logo_image = get_option('cortex_branding')['logo'];
		} else {
			$cortex_logo_image = get_template_directory_uri() . '/assets/images/cortex-logo-gray.png';
		}
		?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url('<?php echo $cortex_logo_image; ?>');
			background-size: contain;
			width: 200px;
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'cortex_login_logo');
