<?php
/**
 * Title: Style Guide
 * Slug: c9-starter/page-style-guide
 * Categories: page, post, text
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, post
 * Viewport width: 1200
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/img/20190622-disney-alaska-vacation-66-2.jpg","id":2805,"dimRatio":70,"minHeight":611,"minHeightUnit":"px","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"className":"is-light","c9ContainerWidth":""} -->
<div class="wp-block-cover alignfull is-light" style="margin-bottom:var(--wp--preset--spacing--70);min-height:611px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2805" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/img/20190622-disney-alaska-vacation-66-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"color-light","fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-color-light-color has-text-color has-huge-font-size"><?php esc_html_e( 'Know where you\'re going?', 'c9-starter' ); ?><br><?php esc_html_e( 'C9 Helper Style Guide', 'c9-starter' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"align":"center","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"color-success","style":{"border":{"radius":"2px"}},"className":"is-style-c9-btn-green"} -->
<div class="wp-block-button is-style-c9-btn-green"><a class="wp-block-button__link has-color-success-background-color has-background wp-element-button" href="https://www.covertnine.com/form/c9-beta" style="border-radius:2px" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Download now', 'c9-starter' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"2px"},"color":{"text":"#fbfbfb"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="https://youtube.com/covertnine" style="border-radius:2px;color:#fbfbfb"><?php esc_html_e( 'Tutorial Videos', 'c9-starter' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"\u003cmark style=\u0022background-color:rgba(0, 0, 0, 0);color:#f8f8f8\u0022 class=\u0022has-inline-color\u0022\u003e<?php esc_html_e( 'Or search through our archives', 'c9-starter' ); ?><\/mark\u003e","placeholder":"<?php esc_html_e( 'How to design a signup page using C9 Blocks....', 'c9-starter' ); ?>","width":50,"widthUnit":"%","buttonText":"<?php esc_html_e( 'Search', 'c9-starter' ); ?>","align":"center"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Three calls to action so your visitors can pick their lane, and what they want to see next.', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px"><?php esc_html_e( 'Ask a question', 'c9-starter' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Sign up for a newsletter or hit the most popular category of your shop.', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px"><?php esc_html_e( 'Sign up for alerts', 'c9-starter' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Consider your three most popular user paths and use those links in these three buttons.', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px"><?php esc_html_e( 'Buy Tickets', 'c9-starter' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php esc_html_e( 'C9 Core Blocks Typography', 'c9-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"color-secondary"} -->
<h1 class="has-text-align-center has-color-secondary-color has-text-color"><?php esc_html_e( 'Heading One', 'c9-starter' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","textColor":"color-primary"} -->
<h2 class="has-text-align-center has-color-primary-color has-text-color"><?php esc_html_e( 'Heading Two', 'c9-starter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"color-success"} -->
<h3 class="has-text-align-center has-color-success-color has-text-color"><?php esc_html_e( 'Heading Three', 'c9-starter' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"textColor":"color-warning"} -->
<h4 class="has-text-align-center has-color-warning-color has-text-color"><?php esc_html_e( 'Heading Four', 'c9-starter' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"color-danger"} -->
<h5 class="has-text-align-center has-color-danger-color has-text-color"><?php esc_html_e( 'Heading Five', 'c9-starter' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center"><?php esc_html_e( 'Heading Six', 'c9-starter' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center has-has-color-primary-color has-text-color"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-light-gray-color"><?php esc_html_e( 'Heading One', 'c9-starter' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-yellow-color"><?php esc_html_e( 'Heading Two', 'c9-starter' ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-faded-green-color"><?php esc_html_e( 'Heading Three', 'c9-starter' ); ?></mark></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-orange-color"><?php esc_html_e( 'Heading Four', 'c9-starter' ); ?></mark></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-alt-green-color"><?php esc_html_e( 'Heading Five', 'c9-starter' ); ?></mark></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-color-blue-color"><?php esc_html_e( 'Heading Six', 'c9-starter' ); ?></mark></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php esc_html_e( 'Small Font Paragraph.', 'c9-starter' ); ?></strong> <?php esc_html_e( 'There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"dropCap":true,"fontSize":"normal"} -->
<p class="has-drop-cap has-normal-font-size"><?php esc_html_e( 'Pat enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><strong><?php esc_html_e( 'Normal Font Paragraph.', 'c9-starter' ); ?></strong> <?php esc_html_e( 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong><?php esc_html_e( 'Medium Font Paragraph.', 'c9-starter' ); ?></strong> <?php esc_html_e( 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><strong><?php esc_html_e( 'Large Font Paragraph.', 'c9-starter' ); ?></strong> <?php esc_html_e( 'Ut enim ad minim veniam, quis nostrud. ', 'c9-starter' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size"><strong><?php esc_html_e( 'Large Font Paragraph.', 'c9-starter' ); ?></strong> <?php esc_html_e( 'Ut enim ad minim veniam, quis. ', 'c9-starter' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6} -->
<h6><?php esc_html_e( 'Ordered List', 'c9-starter' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol><li><?php esc_html_e( 'List Item', 'c9-starter' ); ?></li><li><?php esc_html_e( 'List Item', 'c9-starter' ); ?></li><li><?php esc_html_e( 'There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin.', 'c9-starter' ); ?></li><li><?php esc_html_e( 'List Item', 'c9-starter' ); ?></li></ol>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6} -->
<h6><?php esc_html_e( 'Unordered List', 'c9-starter' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li><?php esc_html_e( 'List Item', 'c9-starter' ); ?></li><li><?php esc_html_e( 'List Item', 'c9-starter' ); ?></li><li><?php esc_html_e( 'There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin.', 'c9-starter' ); ?></li><li><?php esc_html_e( 'List Item', 'c9-starter' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center"><?php esc_html_e( 'Separators (HR)', 'c9-starter' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator"/>
<!-- /wp:separator -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator is-style-dots"/>
<!-- /wp:separator -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
