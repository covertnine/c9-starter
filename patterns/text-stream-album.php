<?php
/**
 * Title: Stream Album or Podcast
 * Slug: c9-music/text-stream-album
 * Categories: text, featured, call-to-action, post, c9, audio, media
 * Keywords: audio, image, button, heading
 * Block Types: core/post-content
 * Post Types: page, post
 * Viewport width: 1200
 */
?>
<!-- wp:columns {"style":{"color":{"background":"#f3f3f3"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns has-background" id="stream-album" style="background-color:#f3f3f3;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
        <!-- wp:group -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
            <h1 class="wp-block-heading has-text-align-center has-large-font-size"><?php _e('♫ Listen to the new single ♫<br>Stream-Me-Please.mp3', 'c9-music'); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:separator {"opacity":"css"} -->
            <hr class="wp-block-separator has-css-opacity"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"align":"center","placeholder":"Content…","fontSize":"small"} -->
            <p class="has-text-align-center has-small-font-size"><?php _e('If you haven\'t, we highly recommend installing the <a href="#">C9 Blocks</a> and <a href="#">C9 Admin Dashboard Plugins</a>. <strong>For animations, and additional child theme features like a single page animated website, get on the C9 email list.</strong>', 'c9-music'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:list -->
            <ul class="">
                <!-- wp:list-item -->
                <li class=""><strong><strong><span class="has-inline-color has-color-secondary-background-color">✓</span></strong> <?php _e('Song Name - Track Title', 'c9-music'); ?></strong></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li class=""><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> <?php _e('Song Name - Track Title', 'c9-music'); ?></strong></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li class=""><strong><span class="has-inline-color has-color-secondary-background-color">✓</span> <?php _e('Song Name - Track Title', 'c9-music'); ?></strong></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">⬇</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/watch?v=8qyP5abkoe4" target="_blank" rel="noreferrer noopener"><?php _e('YouTube Video Pop', 'c9-music'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:image {"id":1975,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/img/c9-album-b.jpg" alt="" class="wp-image-1975"/></figure>
        <!-- /wp:image -->

        <!-- wp:audio {"id":1974} -->
        <figure class="wp-block-audio"><audio controls src="<?php echo esc_url( get_template_directory_uri() ); ?>/client/client-assets/audio/pew-pew.m4a"></audio></figure>
        <!-- /wp:audio -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
