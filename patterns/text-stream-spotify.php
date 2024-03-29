<?php
/**
 * Title: Stream Spotify
 * Slug: c9-togo/text-stream-spotify
 * Categories: text, featured, call-to-action, post
 * Keywords: audio, spotify, button, heading
* Block Types: core/post-content
 * Post Types: page, post
 * Viewport width: 1200
 */
?>
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"color-info"} -->
<div class="wp-block-columns has-color-info-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:embed {"url":"https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ","type":"rich","providerNameSlug":"spotify","allowResponsive":false,"responsive":true,"className":""} -->
<figure class="wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify"><div class="wp-block-embed__wrapper">
https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ
</div></figure>
<!-- /wp:embed --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Spotify Stream Block', 'c9-togo'); ?></h5>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class=""><!-- wp:list-item -->
<li class=""><?php echo esc_html__('Track Listing Song Name', 'c9-togo'); ?><br><strong><?php echo esc_html__('Featuring someone', 'c9-togo'); ?></strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><?php echo esc_html__('Under Control', 'c9-togo'); ?><br><strong><?php echo esc_html__('Not Under Control', 'c9-togo'); ?></strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><?php echo esc_html__('The October', 'c9-togo'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><?php echo esc_html__('Kids & Knives', 'c9-togo'); ?><br><strong><?php echo esc_html__('Savile Remix', 'c9-togo'); ?></strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><?php echo esc_html__('Out of Season (Acoustic)', 'c9-togo'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><?php echo esc_html__('1981 (Demo)', 'c9-togo'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><?php echo esc_html__('The November', 'c9-togo'); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"color-success","style":{"border":{"radius":"25px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-color-success-color has-text-color wp-element-button" href="https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ" style="border-radius:25px"><?php echo esc_html__('Listen on Spotify', 'c9-togo'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->