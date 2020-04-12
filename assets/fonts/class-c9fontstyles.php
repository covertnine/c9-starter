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
		$heading_font    = "'" . $font_array['c9_heading_font'] . "'";
		$subheading_font = "'" . $font_array['c9_subheading_font'] . "'";
		$body_font       = "'" . $font_array['c9_body_font'] . "'";
		?>
		.c9-site-title,
		.c9.site .h1,
		.c9.site .h2,
		.c9.site .h3,
		.c9.site .h4,
		.c9.site .h5,
		.c9.site .h6,
		.c9.site h1,
		.c9.site h2,
		.c9.site h3,
		.c9.site h4,
		.c9.site h5,
		.c9.site h6,
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
		.header-navbar .navbar .nav .nav-item .nav-link,
		.header-navbar .navbar .nav .nav-item .dropdown-item,
		.header-navbar .navbar .nav .search,
		.page-search-results nav .pagination .page-item .page-link,
		.c9.woocommerce nav.woocommerce-pagination ul li span,
		.c9.woocommerce nav.woocommerce-pagination ul li .page-numbers,
		.archive nav .pagination .page-item .page-link,
		.blog nav .pagination .page-item .page-link,
		.single .navigation .nav-previous a,
		.single .navigation .nav-next a,
		.c9 .c9-vertical-tabs .nav-pills .nav-link {
		font-family: <?php echo $heading_font; ?>;
		}

		p.wp-block-subhead,
		.subhead-h,
		.c9-sh,
		.text-muted,
		.c9 .c9-sh,
		.c9 .text-muted,
		.c9 .c9-heading .c9-h .text-muted,
		.c9 .c9-heading .c9-sh .text-muted,
		.c9 .c9-heading .c9-txl .text-muted,
		.c9-heading.section-heading >.c9-sh,
		.c9 .entry-content .wp-block-button:not(.is-style-outline) .wp-block-button__link,
		.c9 .header-navbar .navbar .nav .nav-item .dropdown-item,
		.c9 .header-navbar .navbar .nav .nav-item .nav-link {
			font-family: <?php echo $subheading_font; ?>;
		}

		:root,
		body,
		.c9 .wp-block-pullquote,
		.c9 .wp-block-pullquote blockquote p,
		.c9 #wrapper-footer,
		p.wp-block-subhead,
		.subhead-h,
		.c9-sh,
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
		.c9 .gform_wrapper input[type="text"],
		.c9 .gform_wrapper input[type="password"],
		.c9 .gform_wrapper input[type="tel"],
		.c9 .gform_wrapper textarea,
		.c9 .gform_button.button,
		.c9 .entry-content {
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
