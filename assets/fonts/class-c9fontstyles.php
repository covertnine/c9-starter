<?php
/**
 * C9 font styles.
 *
 * @package c9
 */
class C9FontStyles {
	/**
	 * Gets font settings based on defaults and generates code.-arrow-up
	 */
	public static function render( $font_array ) {
		$heading_font    = "'" . $font_array['heading_font'] . "'";
		$subheading_font = "'" . $font_array['subheading_font'] . "'";
		$body_font       = "'" . $font_array['body_font'] . "'";
		?>
		.c9-site-title,
		.c9 .h1,
		.c9 .h2,
		.c9 .h3,
		.c9 .h4,
		.c9 .h5,
		.c9 .h6,
		.c9 h1,
		.c9 h2,
		.c9 h3,
		.c9 h4,
		.c9 h5,
		.c9 h6,
		.editor-styles-wrapper .h1,
		.editor-styles-wrapper .h2,
		.editor-styles-wrapper .h3,
		.editor-styles-wrapper .h4,
		.editor-styles-wrapper .h5,
		.editor-styles-wrapper .h6,
		.editor-styles-wrapper h1,
		.editor-styles-wrapper h2,
		.editor-styles-wrapper h3,
		.editor-styles-wrapper h4,
		.editor-styles-wrapper h5,
		.editor-styles-wrapper h6,
		.editor-styles-wrapper blockquote:before,
		.entry-content blockquote:before,
		.editor-styles-wrapper blockquote:before,
		.entry-content blockquote:before,
		.navbar,
		.navbar ul li .dropdown-item,
		.navbar ul li a,
		.c9-h,
		.c9-h.h,
		.c9-txl,
		.display-1,
		.display-2,
		.display-3,
		.display-4,
		.display-5,
		.display-6,
		.editor-styles-wrapper .c9-cta .c9-h p,
		.header-navbar .navbar .nav .nav-item .nav-link,
		.header-navbar .navbar .nav .nav-item .dropdown-item,
		.header-navbar .navbar .nav .search,
		.page-search-results nav .pagination .page-item .page-link,
		.theme-c9.woocommerce nav.woocommerce-pagination ul li span,
		.theme-c9.woocommerce nav.woocommerce-pagination ul li .page-numbers,
		.archive nav .pagination .page-item .page-link,
		.blog nav .pagination .page-item .page-link,
		.single .navigation .nav-previous a,
		.single .navigation .nav-next a {
		font-family: <?php echo $heading_font; ?>;
		}

		p.wp-block-subhead,
		.subhead-h,
		.c9-sh,
		.text-muted,
		.c9 .c9-sh,
		.c9 .text-muted,
		.editor-styles-wrapper p.wp-block-subhead,
		.editor-styles-wrapper .subhead-h,
		.editor-styles-wrapper .c9-sh,
		.editor-styles-wrapper .c9-heading h1.subhead-h1,
		.editor-styles-wrapper .c9-heading h2.subhead-h2,
		.editor-styles-wrapper .c9-heading h3.subhead-h3,
		.editor-styles-wrapper .c9-heading h4.subhead-h4,
		.editor-styles-wrapper .c9-heading h5.subhead-h5,
		.editor-styles-wrapper .c9-heading h6.subhead-h6 {
			font-family: <?php echo $subheading_font; ?>;
		}

		body,
		.wp-block-pullquote,
		.wp-block-pullquote blockquote p,
		#wrapper-footer,
		p.wp-block-subhead,
		.subhead-h,
		.c9-sh,
		.editor-styles-wrapper .c9-cta .c9-sh p,
		.wp-block-table tr td,
		.btn,
		.btn:visited,
		.entry-content button,
		.entry-content input[type="button"],
		.entry-content input[type="reset"],
		.entry-content input[type="submit"],
		.wp-block-button__link,
		.wp-block-file__button,
		.wp-block-file .wp-block-file__button,
		#mc_embed_signup input[type="email"],
		.c9 input[type="text"],
		.c9 input[type="email"],
		.c9 input[type="url"],
		.c9 input[type="password"],
		.c9 input[type="tel"],
		.c9 textarea,
		#fullscreensearch input[type="search"],
		.c9 .gform_wrapper label.gfield_label,
		.c9 .gform_wrapper legend.gfield_label,
		.wp-block[data-type="gravityforms/block"] .gform_wrapper label.gfield_label,
		.wp-block[data-type="gravityforms/block"] .gform_wrapper legend.gfield_label,
		.c9 .gform_wrapper input[type="text"],
		.c9 .gform_wrapper input[type="password"],
		.c9 .gform_wrapper input[type="tel"],
		.c9 .gform_wrapper textarea,
		.wp-block[data-type="gravityforms/block"] .gform_wrapper input[type="text"],
		.wp-block[data-type="gravityforms/block"] .gform_wrapper input[type="password"],
		.wp-block[data-type="gravityforms/block"] .gform_wrapper input[type="tel"],
		.wp-block[data-type="gravityforms/block"] .gform_wrapper textarea,
		.c9 .gform_button.button,
		.wp-block[data-type="gravityforms/block"] .gform_button.button,
		.entry-content,
		.editor-styles-wrapper p,
		.editor-styles-wrapper .container p,
		.editor-styles-wrapper .editor-rich-text .mce-content-body p,
		.editor-styles-wrapper .wp-block-paragraph,
		.editor-styles-wrapper .wp-block-quote p,
		.editor-styles-wrapper .wp-block-file,
		.editor-default-block-appender textarea.editor-default-block-appender__content {
			font-family: <?php echo $body_font; ?>;
		}
		<?php
	}

	/**
	 * Regex powered CSS minifier
	 */
	public static function minify_css( $css ) {
		// some of the following functions to minimize the css-output are directly taken
		// from the awesome CSS JS Booster: https://github.com/Schepp/CSS-JS-Booster
		// all credits to Christian Schaefer: http://twitter.com/derSchepp
		// remove comments
		$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );
		// backup values within single or double quotes
		preg_match_all( '/(\'[^\']*?\'|"[^"]*?")/ims', $css, $hit, PREG_PATTERN_ORDER );
		for ( $i = 0; $i < count( $hit[1] ); $i++ ) {
			$css = str_replace( $hit[1][ $i ], '##########' . $i . '##########', $css );
		}
		// remove traling semicolon of selector's last property
		$css = preg_replace( '/;[\s\r\n\t]*?}[\s\r\n\t]*/ims', "}\r\n", $css );
		// remove any whitespace between semicolon and property-name
		$css = preg_replace( '/;[\s\r\n\t]*?([\r\n]?[^\s\r\n\t])/ims', ';$1', $css );
		// remove any whitespace surrounding property-colon
		$css = preg_replace( '/[\s\r\n\t]*:[\s\r\n\t]*?([^\s\r\n\t])/ims', ':$1', $css );
		// remove any whitespace surrounding selector-comma
		$css = preg_replace( '/[\s\r\n\t]*,[\s\r\n\t]*?([^\s\r\n\t])/ims', ',$1', $css );
		// remove any whitespace surrounding opening parenthesis
		$css = preg_replace( '/[\s\r\n\t]*{[\s\r\n\t]*?([^\s\r\n\t])/ims', '{$1', $css );
		// remove any whitespace between numbers and units
		$css = preg_replace( '/([\d\.]+)[\s\r\n\t]+(px|em|pt|%)/ims', '$1$2', $css );
		// shorten zero-values
		$css = preg_replace( '/([^\d\.]0)(px|em|pt|%)/ims', '$1', $css );
		// constrain multiple whitespaces
		$css = preg_replace( '/\p{Zs}+/ims', ' ', $css );
		// remove newlines
		$css = str_replace( array( "\r\n", "\r", "\n" ), '', $css );
		// Restore backupped values within single or double quotes
		for ( $i = 0; $i < count( $hit[1] ); $i++ ) {
			$css = str_replace( '##########' . $i . '##########', $hit[1][ $i ], $css );
		}
		return $css;
	}
}
