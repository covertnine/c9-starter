<?php
/**
 * Title: Stream Podcast
 * Slug: c9-togo/text-stream-album
 * Categories: text, featured, call-to-action, post
 * Keywords: audio, image, button, heading
 * Block Types: core/post-content
 * Post Types: page, post
 * Viewport width: 1200
 */
?>
<!-- wp:columns {"style":{"color":{"background":"#f3f3f3"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns has-background" id="stream-album" style="background-color:#f3f3f3;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__('Stream Podcast', 'c9-togo'); ?><br><?php echo esc_html__('Stream-Me-Please.mp3', 'c9-togo'); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"opacity":"css"} -->
<hr class="wp-block-separator has-css-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","placeholder":"Content…","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__('If you haven\'t, we highly recommend installing the', 'c9-togo'); ?> <a href="#"><?php echo esc_html__('C9 Blocks', 'c9-togo'); ?></a> <?php echo esc_html__('and', 'c9-togo'); ?> <a href="#"><?php echo esc_html__('C9 Admin Dashboard Plugins', 'c9-togo'); ?></a>. <strong><?php echo esc_html__('For animations, and additional child theme features like a single page animated website, get on the C9 email list.', 'c9-togo'); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class=""><!-- wp:list-item -->
<li class=""><strong><strong><span class="has-inline-color has-color-secondary-background-color">✓</span></strong> <?php echo esc_html__('Song Name', 'c9-togo'); ?></strong> - <?php echo esc_html__('Track Title', 'c9-togo'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> <?php echo esc_html__('Song Name', 'c9-togo'); ?></strong> - <?php echo esc_html__('Track Title', 'c9-togo'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li class=""><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> <?php echo esc_html__('Song Name', 'c9-togo'); ?></strong> - <?php echo esc_html__('Track Title', 'c9-togo'); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">⬇</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/watch?v=8qyP5abkoe4" target="_blank" rel="noreferrer noopener"><?php echo esc_html__('YouTube Video Pop', 'c9-togo'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":1975,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/img/food-table-overview-shot-1024x683.jpg" alt="" class="wp-image-1975"/></figure>
<!-- /wp:image -->

<!-- wp:audio {"id":1974} -->
<figure class="wp-block-audio"><audio controls src="<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/audio/pew-pew.m4a"></audio></figure>
<!-- /wp:audio --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->