<?php

/**
 * c9 font styles
 *
 * @package c9
 */

class C9FontStyles {

	public static function render( $font_array ) {
		$heading_font    = $font_array;
		$headings_font   = "'" . $font_array['heading_font'] . "'";
		$subheading_font = "'" . $font_array['subheading_font'] . "'";
		$body_font       = "'" . $font_array['body_font'] . "'";
		// xdebug_break();
		?>
		.h1,
		.h2,
		.h3,
		h1,
		h2,
		h3 {
		margin-bottom: 1.5rem;
		}

		.h4,
		.h5,
		.h6,
		h4,
		h5,
		h6 {
		margin-bottom: 0.25rem;
		}

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
		font-weight: 700;
		}

		.navbar
		#mega-menu-wrap-primary
		#mega-menu-primary
		> li.mega-menu-item
		> a.mega-menu-link,
		.navbar ul li .dropdown-item, .navbar ul li a {
		font-family: <?php echo $headings_font; ?>;
		color: #fff;
		letter-spacing: 0.056rem;
		font-size: 1.4rem;
		text-transform: uppercase;
		font-weight: 400;
		}

		.navbar.navbar-small
		#mega-menu-wrap-primary
		#mega-menu-primary
		> li.mega-menu-item
		> a.mega-menu-link {
		text-shadow: none;
		color: #000;
		}

		@media only screen and (max-width: 991px) and (min-width: 1px) {
		.mega-menu-primary-mobile-open
		.navbar.fixed-top
		#mega-menu-wrap-primary
		#mega-menu-primary {
		top: 45px;
		}
		}

		@media only screen and (max-width: 768px) {
		.navbar
		#mega-menu-wrap-primary
		#mega-menu-primary
		> li.mega-menu-item
		> a.mega-menu-link {
		color: #000;
		text-shadow: none;
		}
		}

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
		line-height: 1.1;
		}

		p.wp-block-subhead,
		.subhead-h,
		.c9-sh,
		.text-muted,
		.c9 .c9-sh,
		.c9 .text-muted {
		font-family: <?php echo $body_font; ?>;
		color: #fec50a;
		}

		.text-muted {
		color: #fec50a !important;
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
		font-weight: 700;
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
		font-size: 2rem;
		word-wrap: break-word;
		font-family: <?php echo $body_font; ?>;
		}

		.entry-content h1,
		.entry-content .h1,
		.wp-block-heading h1,
		.entry-header h1,
		.entry-content h1.c9-txl {
		font-size: 7.9rem;
		line-height: 0.9;
		}

		.entry-content h2,
		.entry-content .h2,
		.wp-block-heading h2 {
		font-size: 5.6rem;
		line-height: 0.9;
		}

		.entry-content h3,
		.entry-content .h3,
		.wp-block-heading h3 {
		font-size: 4rem;
		line-height: 0.9;
		}

		.entry-content h4,
		.entry-content .h4,
		.wp-block-heading h4 {
		font-size: 2.8rem;
		line-height: 0.9;
		}

		.entry-content h5,
		.entry-content .h5,
		.wp-block-heading h5 {
		font-size: 2rem;
		line-height: 0.9;
		}

		.entry-content h6,
		.entry-content .h6,
		.wp-block-heading h6 {
		font-size: 1.4rem;
		line-height: 0.9;
		}

		.entry-header h2 {
		font-size: 3rem;
		line-height: 0.9;
		}
		<?php
	}

	public static function minifyCss( $css ) {
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
