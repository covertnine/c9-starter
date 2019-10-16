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
		$heading_font    = $font_array;
		$headings_font   = "'" . $font_array['heading_font'] . "'";
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
		.editor-styles-wrapper h6
		{
		font-family: <?php echo $headings_font; ?>;
		}

		.navbar,
		.navbar ul li .dropdown-item, .navbar ul li a {
		font-family: <?php echo $headings_font; ?>;
		}

		@media only screen and (max-width: 768px) {
		.c9-h,
		.c9-h.h,
		.c9-txl,
		.display-1,
		.display-2,
		.display-3,
		.display-4,
		.display-5,
		.display-6 {
		font-family: <?php echo $headings_font; ?>;
		}

		p.wp-block-subhead,
		.subhead-h,
		.c9-sh,
		.text-muted,
		.c9 .c9-sh,
		.c9 .text-muted {
		font-family: <?php echo $body_font; ?>;
		}

		.editor-styles-wrapper p.wp-block-subhead,
		.editor-styles-wrapper .subhead-h,
		.editor-styles-wrapper .c9-sh,
		.editor-styles-wrapper .c9-heading h1.subhead-h1,
		.editor-styles-wrapper .c9-heading h2.subhead-h2,
		.editor-styles-wrapper .c9-heading h3.subhead-h3,
		.editor-styles-wrapper .c9-heading h4.subhead-h4,
		.editor-styles-wrapper .c9-heading h5.subhead-h5,
		.editor-styles-wrapper .c9-heading h6.subhead-h6 {
		font-family: <?php echo $body_font; ?>;
		}

		.entry-content,
		.editor-styles-wrapper p,
		.editor-styles-wrapper .container p,
		.editor-styles-wrapper .editor-rich-text .mce-content-body p,
		.editor-styles-wrapper .wp-block-paragraph,
		.editor-styles-wrapper .wp-block-quote p,
		.editor-styles-wrapper .wp-block-file,
		.wp-block-pullquote,
		.wp-block-pullquote blockquote p,
		.editor-default-block-appender textarea.editor-default-block-appender__content,
		#wrapper-footer {
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
