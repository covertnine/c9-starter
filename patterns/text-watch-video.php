<?php
/**
 * Title: Watch Video
 * Slug: c9-starter/text-watch-video
 * Categories: text, featured, call-to-action, banners, post, c9, video
 * Keywords: video, button, heading
 * Block Types: core/post-content
 * Post Types: page, post
 * Viewport width: 960
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/video/c9-starter-templates-clip.mp4","id":3697,"dimRatio":80,"overlayColor":"color-primary","backgroundType":"video","minHeight":995,"minHeightUnit":"px","align":"full","layout":{"type":"constrained","contentSize":"1140px"},"c9ContainerWidth":""} -->
<div class="wp-block-cover alignfull is-light" style="min-height:995px"><span aria-hidden="true" class="wp-block-cover__background has-color-primary-background-color has-background-dim-80 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/video/c9-starter-templates-clip.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{"background":"#ededed"}}} -->
<div class="wp-block-group has-background" style="background-color:#ededed">

<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#222222"}}} -->
<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#222222"><?php _e('Watch the video to learn more.', 'c9-starter'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"color-primary","fontSize":"small"} -->
<p class="has-text-align-center has-color-primary-color has-text-color has-small-font-size"><?php _e('Watch the video below to learn how to build page templates with C9 Blocks', 'c9-starter'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"29px"} -->
<div style="height:29px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/watch?v=8qyP5abkoe4"><?php _e('Building Pages', 'c9-starter'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->