<?php
/**
 * Title: Style Guide
 * Slug: c9-togo/page-style-guide
 * Categories: page,post
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, post
 * Viewport width: 1200
 */

?><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/img/tacos.jpg","id":2805,"dimRatio":70,"minHeight":611,"minHeightUnit":"px","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"className":"is-light","c9ContainerWidth":""} -->
<div class="wp-block-cover alignfull is-light" style="margin-bottom:var(--wp--preset--spacing--70);min-height:611px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2805" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/img/tacos.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"color-light","fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-color-light-color has-text-color has-huge-font-size"><?php echo esc_html__('Know where you\'re going?', 'c9-togo'); ?><br><?php echo esc_html__('C9 Helper Style Guide', 'c9-togo'); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"align":"center","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"color-success","style":{"border":{"radius":"2px"}},"className":"is-style-c9-btn-green"} -->
<div class="wp-block-button is-style-c9-btn-green"><a class="wp-block-button__link has-color-success-background-color has-background wp-element-button" href="https://www.covertnine.com/form/c9-beta" style="border-radius:2px" target="_blank" rel="noreferrer noopener"><?php echo esc_html__('Download now', 'c9-togo'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"2px"},"color":{"text":"#fbfbfb"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="https://youtube.com/covertnine" style="border-radius:2px;color:#fbfbfb"><?php echo esc_html__('Tutorial Videos', 'c9-togo'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php echo esc_html__('Or search through our archives', 'c9-togo'); ?>","placeholder":"<?php echo esc_html__('How to design a signup page using C9 Blocks....', 'c9-togo'); ?>","width":50,"widthUnit":"%","buttonText":"<?php echo esc_html__('Search', 'c9-togo'); ?>","align":"center"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('Three calls to action so your visitors can pick their lane, and what they want to see next.', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px"><?php echo esc_html__('Ask a question', 'c9-togo'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('Sign up for a newsletter or hit the most popular category of your shop.', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px"><?php echo esc_html__('Sign up for alerts', 'c9-togo'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('Consider your three most popular user paths and use those links in these three buttons.', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":50,"textColor":"color-danger","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-danger-color has-text-color" style="border-radius:50px"><?php echo esc_html__('Buy Tickets', 'c9-togo'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":70} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo esc_html__('C9 Core Blocks Typography', 'c9-togo'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1,"textAlign":"center","textColor":"color-secondary"} -->
<h1 class="has-text-align-center has-color-secondary-color has-text-color"><?php echo esc_html__('Heading One', 'c9-togo'); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":2,"textAlign":"center","textColor":"color-primary"} -->
<h2 class="has-text-align-center has-color-primary-color has-text-color"><?php echo esc_html__('Heading Two', 'c9-togo'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textAlign":"center","textColor":"color-success"} -->
<h3 class="has-text-align-center has-color-success-color has-text-color"><?php echo esc_html__('Heading Three', 'c9-togo'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"textAlign":"center","textColor":"color-warning"} -->
<h4 class="has-text-align-center has-color-warning-color has-text-color"><?php echo esc_html__('Heading Four', 'c9-togo'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":5,"textAlign":"center","textColor":"color-danger"} -->
<h5 class="has-text-align-center has-color-danger-color has-text-color"><?php echo esc_html__('Heading Five', 'c9-togo'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"textAlign":"center"} -->
<h6 class="has-text-align-center"><?php echo esc_html__('Heading Six', 'c9-togo'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"textAlign":"center"} -->
<h1 class="wp-block-heading has-text-align-center has-has-color-primary-color has-text-color"><?php echo esc_html__('Heading One', 'c9-togo'); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":2,"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Heading Two', 'c9-togo'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textAlign":"center"} -->
<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Heading Three', 'c9-togo'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"textAlign":"center"} -->
<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Heading Four', 'c9-togo'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":5,"textAlign":"center"} -->
<h5 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Heading Five', 'c9-togo'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"textAlign":"center"} -->
<h6 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Heading Six', 'c9-togo'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo esc_html__('Small Font Paragraph.', 'c9-togo'); ?> </strong><?php echo esc_html__('There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"dropCap":true,"fontSize":"normal"} -->
<p class="has-drop-cap has-normal-font-size"><?php echo esc_html__('Pat enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><strong><?php echo esc_html__('Normal Font Paragraph.', 'c9-togo'); ?> </strong><?php echo esc_html__('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><strong><?php echo esc_html__('Medium Font Paragraph.', 'c9-togo'); ?> </strong><?php echo esc_html__('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><strong><?php echo esc_html__('Large Font Paragraph.', 'c9-togo'); ?> </strong><?php echo esc_html__('Ut enim ad minim veniam, quis nostrud. ', 'c9-togo'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size"><strong><?php echo esc_html__('Large Font Paragraph.', 'c9-togo'); ?> </strong><?php echo esc_html__('Ut enim ad minim veniam, quis. ', 'c9-togo'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6} -->
<h6><?php echo esc_html__('Ordered List', 'c9-togo'); ?></h6>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol><li><?php echo esc_html__('List Item', 'c9-togo'); ?></li><li><?php echo esc_html__('List Item', 'c9-togo'); ?></li><li><?php echo esc_html__('There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin.', 'c9-togo'); ?></li><li><?php echo esc_html__('List Item', 'c9-togo'); ?></li></ol>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6} -->
<h6><?php echo esc_html__('Unordered List', 'c9-togo'); ?></h6>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li><?php echo esc_html__('List Item', 'c9-togo'); ?></li><li><?php echo esc_html__('List Item', 'c9-togo'); ?></li><li><?php echo esc_html__('There are more heading styles, large fonts, subheadings, and more in the C9 Blocks Plugin.', 'c9-togo'); ?></li><li><?php echo esc_html__('List Item', 'c9-togo'); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="has-text-align-center"><?php echo esc_html__('Separators (HR)', 'c9-togo'); ?></h6>
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