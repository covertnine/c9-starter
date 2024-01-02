<?php

/**
 * C9 font styles.
 *
 * @package c9
 */
class C9FontStyles
{
	/**
	 * Gets font settings based on defaults and generates code.-arrow-up
	 */
	public static function render($font_array)
	{
		$heading_font    = $font_array['c9_heading_font'];
		$subheading_font = $font_array['c9_subheading_font'];
		$body_font       = $font_array['c9_body_font'];
		$fadein_fonts    = get_theme_mod('c9_fadein_webfonts', true);

		// Update an array to contain the fonts that will be used
		// throughout each of the font selector fields:
		$c9fonts = array(
			''																	=> '',
			'Abel'                												=> 'Abel',
			'Acme'																=> 'Acme',
			'Amatic+SC:wght@400;700'											=> 'Amatic SC',
			'Anton'																=> 'Anton',
			'Archivo:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900'	=> 'Archivo',
			'Archivo+Black'														=> 'Archivo Black',
			'Arvo:ital,wght@0,400;0,700;1,400;1,700'								=> 'Arvo',
			'Asap:wght@400;500;600;700'											=> 'Asap',
			'Barlow:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,400'		=> 'Barlow',
			'Bebas+Neue'          												=> 'Bebas Neue',
			'Bitter:wght@200;300;400;700;900'									=> 'Bitter',
			'Cabin:wght@400;500;700'											=> 'Cabin',
			'Caveat:wght@400;700'												=> 'Caveat',
			'Comfortaa:wght@300;400;500;700'									=> 'Comfortaa',
			'Crimson+Text:wght@400;600;700'										=> 'Crimson Text',
			'Dancing+Script:wght@400;700' 										=> 'Dancing Script',
			'Didact+Gothic'	   													=> 'Didact Gothic',
			'DM+Sans:ital,wght@0,400;0,700;1,400;1,700'							=> 'DM Sans',
			'Dosis:wght@300;400;700'											=> 'Dosis',
			'Goldman:wght@400,700'												=> 'Goldman',
			'EB+Garamond:ital,wght@0,400;0,700;0,800;1,400;1,700;1,800'			=> 'EB Garamond',
			'Fira+Sans+Condensed:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900' => 'Fira Sans Condensed',
			'Heebo:wght@200;400;700;800;900'									=> 'Heebo',
			'Hind:wght@300;400;500;700'											=> 'Hind',
			'Hind+Siliguri:wght@300,400,700'									=> 'Hind Siliguri',
			'IBM+Plex+Sans:ital,wght@0,100;0,400;0,700;1,400'					=> 'IBM Plex Sans',
			'IBM+Plex+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,700;1,400'	=> 'IBM Plex Sans Condensed',
			'IBM+Plex+Serif:ital,wght@0,200;0,400;0,600;0,700;1,400'			=> 'IBM Plex Serif',
			'IBM+Plex+Mono:ital,wght@0,200;0,400;0,700;1,400'					=> 'IBM Plex Mono',
			'Inconsolata:wght@300;400;700;800;900'								=> 'Inconsolata',
			'Inter:wght@200;300;400;700;800;900'								=> 'Inter',
			'Josefin+Sans:wght@300;400;500;700'									=> 'Josefin Sans',
			'Karla:ital,wght@0,400;0,700;1,400'									=> 'Karla',
			'Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700'   				=> 'Lato',
			'Libre+Baskerville:wght@400;700'									=> 'Libre Baskerville',
			'Libre+Franklin:wght@200;300;400;700;800;900'						=> 'Libre Franklin',
			'Lilita+One'		  												=> 'Lilita One',
			'Lobster'             												=> 'Lobster',
			'Lora:ital,wght@0,400;0,700;1,400;1,500;1,700'						=> 'Lora',
			'Manrope:wght@300;400;700;800'										=> 'Manrope',
			'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700'        => 'Merriweather',
			'Merriweather+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400;1,700'   => 'Merriweather Sans',
			'Montserrat:ital,wght@0,200;0,300;0,400;0,700;0,900;1,400;1,700'	=> 'Montserrat',
			'Muli'                												=> 'Muli',
			'Mulish:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900'  => 'Mulish',
			'Noto+Sans+JP:wght@100,300,400,700'									=> 'Noto Sans JP',
			'Noto+Serif:ital,wght@0,400;0,700;1,400;1,700'						=> 'Noto Serif',
			'Nunito:ital,wght@0,300;0,400;0,700;0,800;0,900;1,400;1,700'        => 'Nunito',
			'Nunito+Sans:ital,wght@0,300;0,400;0,700;0,800;0,900;1,700'         => 'Nunito Sans',
			'Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400;1,700'           => 'Open Sans',
			'Open+Sans+Condensed:wght@300;700' 									=> 'Open Sans Condensed',
			'Oswald:wght@200,300,400,700'              							=> 'Oswald',
			'Oxygen:wght@300,400,700'											=> 'Oxygen',
			'Pacifico'															=> 'Pacifico',
			'Permanent+Marker'													=> 'Permanent Marker',
			'Playfair+Display:ital,wght@0,400;0,700;0,800;0,900;1,400'    		=> 'Playfair Display',
			'Poppins:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,400'       => 'Poppins',
			'PT+Sans:ital,wght@0,400;0,700;1,400'             					=> 'PT Sans',
			'PT+Serif:ital,wght@0,400;0,700;1,400'            					=> 'PT Serif',
			'Quicksand:wght@300;400;700'           								=> 'Quicksand',
			'Raleway:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,400'       => 'Raleway',
			'Readex+Pro:wght@300;400;700'										=> 'Readex Pro',
			'Roboto:ital,wght@0,300;0,400;0,700;0,900;1,400'              		=> 'Roboto',
			'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400'    			=> 'Roboto Condensed',
			'Roboto+Slab:wght@300,400,700,900'         							=> 'Roboto Slab',
			'Rowdies:wght@300;400;700'											=> 'Rowdies',
			'Rubik:ital,wght@0,300;0,400;0,700;1,400;1,700'						=> 'Rubik',
			'Sen:wght@400,700,800'                 								=> 'Sen',
			'Source+Sans+Pro:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700'     => 'Source Sans Pro',
			'Tajawal:wght@300;400;700;900'										=> 'Tajawal',
			'Teko:wght@300;400;700'												=> 'Teko',
			'Titillium+Web:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700'		=> 'Titillium Web',
			'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,400'					=> 'Ubuntu',
			'Varela+Round'														=> 'Varela Round',
			'Work+Sans:ital,wght@0,200;0,400;0,700;0,800;0,900;1,400'           => 'Work Sans',
			'Xanh+Mono'			           										=> 'Xanh Mono'
		);

		//make the font label human readable so it'll work in css
		foreach ($c9fonts as $c9key => $c9value) {
			// echo "<h1>set: " . $body_font . "body font key: " . $c9key . " body font value:" . $c9value . "</h1>";
			if ($body_font == $c9key) {
				$body_font = $c9value;
			}
		}

		//make the font label human readable so it'll work in css
		foreach ($c9fonts as $c9key => $c9value) {

			if ($subheading_font == $c9key) {
				$subheading_font = $c9value;
			}
		}
		//make the font label human readable so it'll work in css
		foreach ($c9fonts as $c9key => $c9value) {

			if ($heading_font == $c9key) {
				$heading_font = $c9value;
			}
		}


		// Begin outputting styles:


		// Hide text only while waiting for Web Font Loader to download its font, and only if the option is selected
		if ($fadein_fonts) {
			if (!empty($heading_font)) {
				self::the_selectors('headings', '.wf-loading'); ?>,
<?php /* Some additional selectors here so we don't squash existing anchor transitions: */ ?>
.wf-loading .c9.site .h1 a,
.wf-loading .c9.site .h2 a,
.wf-loading .c9.site .h3 a,
.wf-loading .c9.site .h4 a,
.wf-loading .c9.site .h5 a,
.wf-loading .c9.site .h6 a,
.wf-loading .c9.site h1 a,
.wf-loading .c9.site h2 a,
.wf-loading .c9.site h3 a,
.wf-loading .c9.site h4 a,
.wf-loading .c9.site h5 a,
.wf-loading .c9.site h6 a {
color: transparent !important;
} <?php
			}
			if (!empty($subheading_font)) {
				self::the_selectors('subheadings', '.wf-loading'); ?> {
	color: transparent !important;
	} <?php
			}
			if (!empty($body_font)) {
				self::the_selectors('body', '.wf-loading'); ?> {
	color: transparent !important;
	} <?php
			}
		}

		// Define their fonts, but also make sure unspecified headings don't inherit body_font

		self::the_selectors('headings'); ?> {
font-family: var(--default-font);
<?php if (!empty($heading_font)) { ?>
	font-family: <?php echo esc_html($heading_font); ?>, helvetica, sans-serif;
	<?php if ($fadein_fonts) { ?> transition: color .2s; <?php } ?>
<?php } ?>
} <?php

		self::the_selectors('subheadings'); ?> {
font-family: var(--default-font);
<?php if (!empty($subheading_font)) { ?>
	font-family: <?php echo esc_html($subheading_font); ?>, helvetica, sans-serif;
	<?php if ($fadein_fonts) { ?> transition: color .2s; <?php } ?>
<?php } ?>
} <?php

		if (!empty($body_font)) { ?>
	<?php self::the_selectors('body'); ?> {
	font-family: <?php echo esc_html($body_font); ?>, helvetica, sans-serif;
	<?php if ($fadein_fonts) { ?> transition: color .2s; <?php } ?>
	} <?php
		}
	} //end render function

	/**
	 * Print typography selectors for headdings/subheadings/body, optionally prefixed
	 */
	private static function the_selectors($which_selectors, $prefix = NULL)
	{
		// The big list of selectors
		switch ($which_selectors) {
			case 'headings':
				$selectors = array(
					'.c9-site-title',
					'.c9.site .h1',
					'.c9.site .h2',
					'.c9.site .h3',
					'.c9.site .h4',
					'.c9.site .h5',
					'.c9.site .h6',
					'.c9.site h1',
					'.c9.site h2',
					'.c9.site h3',
					'.c9.site h4',
					'.c9.site h5',
					'.c9.site h6',
					'.c9 h1',
					'.c9 h2',
					'.c9 h3',
					'.c9 h4',
					'.c9 h5',
					'.c9 h6',
					'h1',
					'h2',
					'h3',
					'h4',
					'h5',
					'h6',
					'.c9-post-grid-section-title',
					'.c9-block-post-grid-title a',
					'.entry-content blockquote:before',
					'.c9-h',
					'.c9-h.h',
					'.c9-txl',
					'.display-1',
					'.display-2',
					'.display-3',
					'.display-4',
					'.display-5',
					'.display-6',
					'.header-navbar .navbar .nav .search',
					'.page-search-results nav .pagination .page-item .page-link',
					'.c9.woocommerce nav.woocommerce-pagination ul li span',
					'.c9.woocommerce nav.woocommerce-pagination ul li .page-numbers',
					'.woocommerce .site-main .woocommerce-breadcrumb',
					'.archive nav .pagination .page-item .page-link',
					'.blog nav .pagination .page-item .page-link',
					'.single .navigation .nav-previous a',
					'.single .navigation .nav-next a',
					'.c9 .c9-vertical-tabs .nav-pills .nav-link',
					'.c9-vertical-tabs .nav-pills .nav-link',
					'.c9 .entry-content button',
					'.button-primary',
					'.c9-cta .c9-cta-button .wp-block-button__link',
					'.mce-content-body.button',
					'.wp-block-button__link',
					'.wp-block-search__button, .entry-content .btn',
					'.entry-content .btn:visited',
					'.entry-content .button',
					'.entry-content .wp-block-button:not(.is-style-outline) .wp-block-button__link',
					'.entry-content .wp-block-button__link',
					'.entry-content button',
					'.entry-content input[type=button]',
					'.entry-content input[type=reset]',
					'.entry-content input[type=submit]',
					'input[type="submit"]',
					'.wp-block-button:not(.is-style-outline) .wp-block-button__link.mce-content-body',
					'.wp-block-button__link',
					'.wp-block-file .wp-block-file__button',
					'.gform_wrapper .gform_footer input.button',
					'.entry-content .wp-block-button:not(.is-style-outline) .wp-block-button__link',
					'.wp-block-file__button',
					'.header-navbar .search #s',
					'.woocommerce .c9 #respond input#submit',
					'.woocommerce .c9 a.button',
					'.woocommerce .c9 button.button',
					'.woocommerce .c9 input.button',
					'.woocommerce a.button',
					'.c9 .c9-toggles.is-style-default .c9-toggles-item-heading .c9-toggles-toggle-label',
					'.c9-toggles.is-style-default .c9-toggles-item-heading .c9-toggles-toggle-label',
					'.c9-heading .h1 .text-muted',
					'.c9-heading .h2 .text-muted',
					'.c9-heading .h3 .text-muted',
					'.c9-heading .h4 .text-muted',
					'.c9-heading .h5 .text-muted',
					'.c9-heading .h6 .text-muted'
				);
				break;
			case 'subheadings':
				$selectors = array(
					'p.wp-block-subhead',
					'.subhead-h',
					'.c9-sh',
					'.text-muted',
					'.c9 .c9-sh',
					'.c9 .text-muted',
					'.c9 .c9-heading .c9-h .text-muted',
					'.c9 .c9-heading .c9-sh .text-muted',
					'.c9 .c9-heading .c9-txl .text-muted',
					'.c9-heading.section-heading >.c9-sh'
				);
				break;
			case 'body':
				$selectors = array(
					':root',
					'body',
					'body .is-root-container',
					'body .editor-styles-wrapper .is-root-container',
					'.c9 .wp-block-pullquote',
					'.c9 .wp-block-pullquote blockquote p',
					'.c9 #wrapper-footer',
					'.wp-block-table tr td',
					'.btn',
					'.btn:visited',
					'.entry-content button',
					'.entry-content input[type="button"]',
					'.entry-content input[type="reset"]',
					'.entry-content input[type="submit"]',
					'.wp-block-button__link',
					'.wp-block-file__button',
					'.wp-block-file .wp-block-file__button',
					'#mc_embed_signup input[type="email"]',
					'.c9 input[type="text"]',
					'.c9 input[type="email"]',
					'.c9 input[type="url"]',
					'.c9 input[type="password"]',
					'.c9 input[type="tel"]',
					'.c9 textarea',
					'#fullscreensearch input[type="search"]',
					'.c9 .gform_wrapper label.gfield_label',
					'.c9 .gform_wrapper legend.gfield_label',
					'.c9 .gform_wrapper input[type="text"]',
					'.c9 .gform_wrapper input[type="password"]',
					'.c9 .gform_wrapper input[type="tel"]',
					'.c9 .gform_wrapper textarea',
					'.c9 .gform_button.button',
					'.c9 .entry-content',
					'.navbar',
					'.navbar ul li .dropdown-item',
					'.navbar ul li a'
				);
				break;
		} // End of switch ($which_selectors)

		// When editing a post in admin, select only the editing area
		global $pagenow;
		if ($pagenow == 'post.php') {
			$prefix = $prefix . ' .block-editor-block-list__layout.is-root-container';
			// Also select the block editor itself
			if ($which_selectors == 'body') {
				$selectors[] = '';
			}
		}

		// Add any given prefix to every selector
		if (!is_null($prefix)) {
			foreach ($selectors as &$selector) {
				$selector = $prefix . ' ' . $selector;
			}
			unset($selector);
		}

		echo implode(', ', $selectors);
	}

	/**
	 * Regex powered CSS minifier
	 */
	public static function minify_css($css)
	{
		// some of the following functions to minimize the css-output are directly taken
		// from the awesome CSS JS Booster: https://github.com/Schepp/CSS-JS-Booster
		// all credits to Christian Schaefer: http://twitter.com/derSchepp
		// remove comments
		$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
		// backup values within single or double quotes
		preg_match_all('/(\'[^\']*?\'|"[^"]*?")/ims', $css, $hit, PREG_PATTERN_ORDER);
		for ($i = 0; $i < count($hit[1]); $i++) {
			$css = str_replace($hit[1][$i], '##########' . $i . '##########', $css);
		}
		// remove traling semicolon of selector's last property
		$css = preg_replace('/;[\s\r\n\t]*?}[\s\r\n\t]*/ims', "}\r\n", $css);
		// remove any whitespace between semicolon and property-name
		$css = preg_replace('/;[\s\r\n\t]*?([\r\n]?[^\s\r\n\t])/ims', ';$1', $css);
		// remove any whitespace surrounding property-colon
		$css = preg_replace('/[\s\r\n\t]*:[\s\r\n\t]*?([^\s\r\n\t])/ims', ':$1', $css);
		// remove any whitespace surrounding selector-comma
		$css = preg_replace('/[\s\r\n\t]*,[\s\r\n\t]*?([^\s\r\n\t])/ims', ',$1', $css);
		// remove any whitespace surrounding opening parenthesis
		$css = preg_replace('/[\s\r\n\t]*{[\s\r\n\t]*?([^\s\r\n\t])/ims', '{$1', $css);
		// remove any whitespace between numbers and units
		$css = preg_replace('/([\d\.]+)[\s\r\n\t]+(px|em|pt|%)/ims', '$1$2', $css);
		// shorten zero-values
		$css = preg_replace('/([^\d\.]0)(px|em|pt|%)/ims', '$1', $css);
		// constrain multiple whitespaces
		$css = preg_replace('/\p{Zs}+/ims', ' ', $css);
		// remove newlines
		$css = str_replace(array("\r\n", "\r", "\n"), '', $css);
		// Restore backupped values within single or double quotes
		for ($i = 0; $i < count($hit[1]); $i++) {
			$css = str_replace('##########' . $i . '##########', $hit[1][$i], $css);
		}
		return $css;
	}
}
