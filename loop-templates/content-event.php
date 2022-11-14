<?php

/**
 * Single post partial template.
 *
 * @package c9-starter
 */
$c9_blog_sidebar         = get_theme_mod('c9_blog_sidebar', 'hide');
date_default_timezone_set('UTC');


// fields renamed to use below
$cortex_start                   = get_field('date_and_time'); //can be used for formatting
$cortex_day                     = date('D M j Y', strtotime($cortex_start));
$cortex_date                    = date('m.j.y', strtotime($cortex_start));
$cortex_time                    = date('g:iA', strtotime($cortex_start));
$cortex_doors                   = get_field('time');
$cortex_featured_img            = get_post_thumbnail_id();
$cortex_featured_img_src        = wp_get_attachment_image_url($cortex_featured_img, 'riot-square-show-sm');
$cortex_featured_img_srcset     = wp_get_attachment_image_srcset($cortex_featured_img, 'riot-square-show-big');
$cortex_featured_img_alt        = get_post_meta($cortex_featured_img, '_wp_attachment_image_alt', true);
$cortex_location_name           = get_field('location_name');
$cortex_location_city_country   = get_field('location_city_country');
$cortex_location_map_link       = esc_url(get_field('location_map_link'));
$cortex_location_address        = get_field('location_address');
$cortex_u_event_ticket_link     = esc_url(get_field('event_ticket_link'));
$cortex_u_rsvp_link             = esc_url(get_field('rsvp_link'));
$playlist_link                  = get_field('playlist_link');
$show_is_sold_out               = get_field('show_is_sold_out');
$show_low_tickets               = get_field('show_is_almost_sold_out');
$show_id                        = get_the_ID();

if (has_post_thumbnail()) {

    // grab src, srcset, sizes from featured image for Retina support
    $c9_img_id  = get_post_thumbnail_id($post->ID);
    $c9_img_src = esc_url(wp_get_attachment_image_url($c9_img_id, 'riot-square-show-md'));
}
//set sidebar variables pending on theme options and sidebars being active
if ($c9_blog_sidebar  != 'hide') {
    $sidebar               = true;
    $sidebar_left          = 'sidebar-left' === get_theme_mod('c9_blog_sidebar') && is_active_sidebar('left-sidebar') ? true : false;
    $sidebar_right         = 'sidebar-right' === get_theme_mod('c9_blog_sidebar') && is_active_sidebar('right-sidebar') ? true : false;

    // set container classes based on sidebar selection
    if ($c9_blog_sidebar == 'sidebar-left') {

        $sidebar_class = ' sidebar-left';
    } elseif ($c9_blog_sidebar == 'sidebar-right') {

        $sidebar_class = ' sidebar-right';
    } //end setting sidebar classes

} else { //no sidebar on single posts
    $sidebar                = false;
    $sidebar_left          = false;
    $sidebar_right         = false;
}

if (!empty($playlist_link)) {
    $rf_playlist_embed = str_replace('spotify.com/playlist/', 'spotify.com/embed/playlist/', $playlist_link);
}
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


    <div class="c9-grid c9-scroll rf-single-show-header p-5" style="min-height:40vh">
        <div class="container c9-column-container pl-0 pr-0 c9-scroll c9-layout-columns-2 c9-is-vertically-aligned-center c9-2-col-equal" style="min-height:10vh">
            <div class="c9-overlay-container" style="background-color:rgba(255,255,255,1);mix-blend-mode:normal"></div>
            <div class="c9-layout-column-wrap c9-block-layout-column-gap-0 c9-is-responsive-column">
                <div class="c9-block-layout-column c9-column text-left c9-is-vertically-aligned-center">
                    <div class="c9-column-innner">
                        <figure class="wp-block-image size-riot-square-show is-style-default mar0B">
                            <a href="<?php echo $cortex_u_event_ticket_link; ?>" title="Tickets for <?php the_title_attribute(); ?> (Opens in new window)">
                                <img width="540" height="540" src="<?php echo $c9_img_src; ?>" alt="<?php echo $cortex_featured_img_alt; ?>" class="wp-image-<?php echo $show_id; ?>" srcset="<?php echo esc_attr($cortex_featured_img_srcset); ?>" sizes="(max-width: 414px) 100vw, (max-width: 991px) 540px, (min-width: 992px) 540px" /></a>
                        </figure>
                    </div>
                </div>
                <div class="c9-block-layout-column c9-column text-left c9-is-vertically-aligned-center">
                    <div class="c9-column-innner">
                        <div class="wp-container-6228f76eab3b0 wp-block-group pl-5 pr-5">
                            <div class="c9-block-post-grid-byline entry-content p-0">
                                <div class="show-day show-date row no-gutter no-gutters">
                                    <div class="col-8 col-sm-8 text-uppercase d-inline-block text-left font-weight-bold">
                                        <span class="date-number h5"><?php echo $cortex_day; ?>
                                        </span>
                                    </div>
                                    <div class="col-4 col-sm-4 d-inline-block text-right">
                                        <span class="show-time h5 font-weight-light"><?php echo $cortex_time; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <span class="show-doors font-weight-light text-uppercase"><?php echo $cortex_doors; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="section-heading c9-heading text-left mar30T mar00B">
                                <span class="c9-sh font-weight-light rf-presents h4">Riot Fest Presents: <?php the_title(); ?></span>
                            </div>
                            <div class="section-heading c9-heading text-left">
                                <h1 class="c9-h"><?php the_title(); ?></h1>
                            </div>
                            <?php //add openers
                            // Check rows exists.
                            if (have_rows('opening_acts')) :
                            ?>
                                <div class="event-act">
                                    <?php
                                    // Loop through rows.
                                    while (have_rows('opening_acts')) : the_row();

                                        // Load sub field value.
                                        $opener_name = get_sub_field('opener_name');
                                        $allowed_tags = array(
                                            'b' => array(),
                                            'em' => array(),
                                            'i' => array(),
                                            'strong' => array(),
                                        );

                                    ?>
                                        <div class="opener font-weight-light">
                                            <h2 class="c9-sh"><?php echo wp_kses($opener_name, $allowed_tags); ?></h2>
                                        </div>
                                    <?php

                                    // End loop.
                                    endwhile;
                                    ?>
                                </div><!-- end event-acts-->
                            <?php endif; ?>


                            <div class="venue text-uppercase text-center mb-5 mt-5">
                                <?php if (!empty($cortex_location_map_link)) { ?>
                                    <a href="<?php echo $cortex_location_map_link; ?>" target="_blank">
                                    <?php } ?>
                                    <?php if (!empty($cortex_location_name)) { ?>
                                        <span class="font-weight-bolder d-block headline-font venue-name"><?php echo $cortex_location_name; ?></span>
                                    <?php } ?>
                                    <?php if (!empty($cortex_location_address)) { ?>
                                        <span class="secondary-color-text h4 font-weight-light"><?php echo $cortex_location_address; ?></span> •
                                    <?php } ?>
                                    <?php if (!empty($cortex_location_city_country)) { ?>
                                        <span class="secondary-color-text h4 font-weight-light"><?php echo $cortex_location_city_country; ?></span>
                                    <?php } ?>
                                    <?php if (!empty($cortex_location_map_link)) { ?>
                                    </a>
                                <?php } ?>
                            </div>
                            <!--end venue-->
                            <div class="wp-container-6228f76eaa87d wp-block-buttons text-center pb-5 rf-show-single-btns">
                                <?php if ((!empty($cortex_u_event_ticket_link)) && ($show_is_sold_out != true)) { ?>
                                    <div class="wp-block-button">
                                    <a class="wp-block-button__link<?php if (!empty($show_low_tickets)) { echo ' has-color-yellow-bg dark-color-text'; } else { echo ' has-color-success-background-color has-background has-color-light-color';}?>" href="<?php echo $cortex_u_event_ticket_link; ?>" title="Buy tickets to <?php get_the_title(); ?> (opens in new window)" target="_blank"><?php if (!empty($show_low_tickets)) { echo 'Low tickets';} else { echo 'Buy Tickets'; }?></a>
                                    </div>
                                <?php } ?>
                                <?php if ($show_is_sold_out == true) { ?>
                                    <div class="wp-block-button">
                                        <span class="wp-block-button-soldout wp-block-button__link has-background has-color-light-color">Sold Out</span>
                                    </div>
                                <?php } ?>
                                <?php if (!empty($cortex_u_rsvp_link)) { ?>
                                    <div class="wp-block-button">
                                        <a class="wp-block-button__link has-color-primary-background-color has-background" href="<?php echo $cortex_u_rsvp_link; ?>" target="_blank" title="RSVP to <?php the_title_attribute(); ?> on Facebook">RSVP</a>
                                    </div>
                                <?php } ?>
                            </div>
                            <!--end buttons-->
                        </div>
                        <!--end block group-->
                        <span class="rf-official-url has-color-info-color text-center d-block pl-t pr-5"><?php the_permalink(); ?></span>
                        <?php if (!empty($rf_playlist_embed)) { ?>
                            <figure class="wp-block-embed is-type-rich is-provider-spotify wp-block-embed-spotify d-block mr-auto ml-auto text-center pr-5 pl-5 pb-5">
                                <div class="wp-block-embed__wrapper">
                                    <iframe style="border-radius: 12px" src="<?php echo $rf_playlist_embed; ?>&amp;utm_source=generator" width="100%" height="80" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                </div>
                            </figure>
                        <?php } ?>
                    </div>
                    <!--end column inner-->
                </div>
                <!--end c9-column-->
            </div>
            <!--end column wrap-->
        </div>
        <!--end container-->
    </div><!-- end c9-grid-->

    <div class="entry-content<?php if (!empty($sidebar_class)) {
                                    echo $sidebar_class;
                                } ?>">

        <?php the_content(); ?>


    </div><!-- .entry-content -->



    <footer class="entry-footer<?php if (!empty($sidebar_class)) {
                                    echo $sidebar_class;
                                } ?>">
        <div class="entry-footer-content mar30B">
            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __('Pages:', 'c9-starter'),
                    'after'  => '</div>',
                )
            );
            ?>
        </div>

        <?php c9_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->