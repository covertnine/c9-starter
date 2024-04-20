<?php
/**
 * Title: Stream Spotify
 * Slug: c9-work/text-stream-spotify
 * Categories: text, featured, call-to-action, post, audio, c9, media
 * Keywords: audio, spotify, button, heading
 * Block Types: core/post-content
 * Post Types: page, post
 * Viewport width: 1200
 */
?>
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"color-info"} -->
<div class="wp-block-columns has-color-info-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:embed {"url":"https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ","type":"rich","providerNameSlug":"spotify","allowResponsive":false,"responsive":true,"className":""} -->
        <figure class="wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify">
            <div class="wp-block-embed__wrapper">
                https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ
            </div>
        </figure>
        <!-- /wp:embed -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:heading {"textAlign":"center","level":5} -->
        <h5 class="wp-block-heading has-text-align-center"><?php _e('Spotify Stream Block', 'c9-work'); ?></h5>
        <!-- /wp:heading -->

        <!-- wp:list -->
        <ul>
            <!-- wp:list-item -->
            <li><?php _e('Track Listing Song Name<br><strong>Featuring someone</strong>', 'c9-work'); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php _e('Under Control<br><strong>Not Under Control</strong>', 'c9-work'); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php _e('The October', 'c9-work'); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php _e('Kids &amp; Knives<br><strong>Savile Remix</strong>', 'c9-work'); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php _e('Out of Season (Acoustic)', 'c9-work'); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php _e('1981 (Demo)', 'c9-work'); ?></li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li><?php _e('The November', 'c9-work'); ?></li>
            <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"textColor":"color-success","style":{"border":{"radius":"25px"}},"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline">
                <a class="wp-block-button__link has-color-success-color has-text-color wp-element-button" href="https://open.spotify.com/album/4wNkTCWvNYJr8BL4obFo3y?si=YyBupJfnSi2lGBg_71TvGQ" style="border-radius:25px"><?php _e('Listen on Spotify', 'c9-work'); ?></a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
