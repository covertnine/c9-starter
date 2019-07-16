<?php
/**
 * COVERT NINE modify editor
 *
 * @package cortextoo
 */

/**
 * Registers an editor stylesheet for the theme.
 */
// Adding theme support
add_theme_support('editor-styles');

// Add TinyMCE style formats.
add_filter( 'mce_buttons_2', 'cortextoo_tiny_mce_style_formats' );

if ( ! function_exists ( 'cortextoo_tiny_mce_style_formats' ) ) {
  function cortextoo_tiny_mce_style_formats( $styles ) {

      array_unshift( $styles, 'styleselect' );
      return $styles;
  }
}


add_filter( 'tiny_mce_before_init', 'cortextoo_tiny_mce_before_init' );

if ( ! function_exists ( 'cortextoo_tiny_mce_before_init' ) ) {
  function cortextoo_tiny_mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Lead Paragraph',
            'selector' => 'p',
            'classes' => 'lead',
            'wrapper' => true
            ),
        array(
            'title' => 'Small',
            'inline' => 'small'
        ),
        array(
            'title' => 'Blockquote',
            'block' => 'blockquote',
            'classes' => 'blockquote',
            'wrapper' => true
        ),
        array(
            'title' => 'Blockquote Footer',
            'block' => 'footer',
            'classes' => 'blockquote-footer',
            'wrapper' => true
        ),
        array(
            'title' => 'Cite',
            'inline' => 'cite'
        )
    );

      if ( isset( $settings['style_formats'] ) ) {
        $orig_style_formats = json_decode($settings['style_formats'],true);
        $style_formats = array_merge($orig_style_formats,$style_formats);
      }

      $settings['style_formats'] = json_encode( $style_formats );
      return $settings;
  }
}

/* add theme compiled files to gutenberg editor */
function cortextoo_editor_style() {
    wp_enqueue_style( 'cortextoo-styles', get_stylesheet_directory_uri() . '/assets/dist/css/theme.min.css' );
    wp_enqueue_style( 'cortextoo-editor-style', get_template_directory_uri() . '/assets/dist/css/custom-editor-style.css' );
}
add_action( 'enqueue_block_editor_assets', 'cortextoo_editor_style' );


/* add page template name to body_class in admin */
if (!function_exists('cortextoo_template_selected')) {

	function cortextoo_template_selected( $classes ) {

		$template_slug = basename( get_page_template(), ".php" );
        return "$classes $template_slug";
    }

}
add_filter('admin_body_class', 'cortextoo_template_selected');
