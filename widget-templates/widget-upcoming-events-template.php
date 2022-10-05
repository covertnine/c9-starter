<a href="/upcoming-shows" title="Upcoming Shows"><span class="h3 widget-title">Riot Fest Presents Shows</span></a>
<div class="magazine-recent-posts">
    <div class="widget-single-article-container">
        <div class="bg-container-sm">

            <?php

            global $post;
            $cortex_date_adjustment = date('Y-m-d H:i:s');
            $cortex_time             = date('Y-m-d H:i:s', strtotime($cortex_date_adjustment . ' - 10 Hours'));

            if ($cat_name == '') { // all posts
                $cortex_upcoming_events = new WP_Query(
                    array(
                        'post_type'              => 'event',
                        'post_status'            => 'publish', // only show published events
                        'orderby'                => 'meta_value', // order by date
                        'meta_key'               => 'date_and_time', // your ACF Date & Time Picker field
                        'meta_value'             => $cortex_time, // Use the current time from above
                        'meta_compare'           => '>=', // Compare today's datetime with our event datetime
                        'order'                  => 'ASC', // Show earlier events first
                        'posts_per_page'          => $items_num,
                        //  'post__not_in'              => $post['ID'],
                        'ignore_sticky_posts'      => 1
                    )
                );
            } else { // category posts
                $cortex_upcoming_events = new WP_Query(
                    array(
                        'post_type'              => 'event',
                        'post_status'            => 'publish', // only show published events
                        'orderby'                => 'meta_value', // order by date
                        'meta_key'               => 'date_and_time', // your ACF Date & Time Picker field
                        'meta_value'             => $cortex_time, // Use the current time from above
                        'meta_compare'           => '>=', // Compare today's datetime with our event datetime
                        'order'                  => 'ASC', // Show earlier events first
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'events-category',
                                'terms'        => $cat_name
                            ),
                        ),
                        'posts_per_page' => $items_num,
                        //  'post__not_in' => $post['ID'],
                        'ignore_sticky_posts' => 1
                    )
                );
            }


            while ($cortex_upcoming_events->have_posts()) : $cortex_upcoming_events->the_post();
                //custom field renaming for use
                $u_start                 = get_field('date_and_time', false, false);
                $u_date_setup               = new DateTime($u_start);
                $u_date                     = $u_date_setup->format('F j, Y');
                $event_headline             = get_field('event_headline');
                $location_name             = get_field('location_name');
                $location_city_country     = get_field('location_city_country');
                $location_address         = get_field('location_address');
                $location_map_link         = get_field('location_map_link');
                $event_ticket_link         = get_field('event_ticket_link');
                $rsvp_link                 = get_field('rsvp_link');
                $share_buttons             = get_field('share_buttons');
                $opener_1                 = get_field('opener_1');
                $opener_2                 = get_field('opener_2');
                $opener_3                 = get_field('opener_3');
                $opener_4                 = get_field('opener_4');
                $opener_5                 = get_field('opener_5');
                $show_is_sold_out         = get_field('show_is_sold_out');
                $show_low_tickets         = get_field('show_is_almost_sold_out');

            ?>
                <article class="single-article mar20B clearfix">
                    <header class="single-article-title">
                        <span class="h6 alternate event-date"><?php echo $u_date; ?></span>
                        <div class="venue">
                            <?php if (!empty($location_map_link)) { ?>
                                <a href="<?php echo $location_map_link; ?>" target="_blank"><span class="sr-only">Map link opens in new window</span>
                                <?php } ?>
                                <?php if (!empty($location_name)) {
                                    echo $location_name;
                                } ?>
                                <?php if (!empty($location_map_link)) { ?></a><?php } ?>
                        </div>
                        <?php if ($event_headline != get_the_title()) { ?>
                            <h5><a href="<?php the_permalink(); ?>" title="<?php echo $event_headline; ?>"><span class="widget-event-headline"><?php echo $event_headline; ?></span><span class="sr-only"><?php the_title(); ?> <?php echo $event_headline; ?></span></a></h5>
                        <?php } ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                        <?php //add openers
                        // Check rows exists.
                        if (have_rows('opening_acts')) :
                        ?>
                            <?php
                            // Loop through rows.
                            while (have_rows('opening_acts')) : the_row();

                                // Load sub field value.
                                $opener_name        = get_sub_field('opener_name');
                                $allowed_tags       = array(
                                    'b' => array(),
                                    'em' => array(),
                                    'i' => array(),
                                    'strong' => array(),
                                );
                            ?>
                                <p><small><?php echo wp_kses($opener_name, $allowed_tags); ?></small></p>
                            <?php

                            // End loop.
                            endwhile;
                            ?>
                        <?php endif; ?>

                        <div class="event-tickets-small">

                            <?php if ((!empty($event_ticket_link)) && ($show_is_sold_out !== true)) { ?>
                                <a class="btn btn-xs btn-default<?php if (!empty($show_low_tickets)) { echo ' has-color-yellow-bg dark-color-text';}?>" href="<?php echo $event_ticket_link; ?>" target="_blank"><?php if (!empty($show_low_tickets)) { _e('Low Tickets', 'c9-starter'); } else { _e('Tickets', 'c9-starter'); }?><span class="sr-only">(Opens in new window).</span></a>
                            <?php } ?>

                            <?php if ($show_is_sold_out === true) { ?>
                                <span class="btn btn-xs btn-disabled">SOLD OUT</span>
                            <?php } ?>



                        </div>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="cover-link"><span class="sr-only"><?php the_title(); ?></span></a>
                    </header>
                </article>
            <?php endwhile; ?>
            <p class="center">
                <a href="/upcoming-shows" class="btn btn-md btn-default">MORE SHOWS</a>
            </p>
        </div>
        <!--end bg-container-sm-->

    </div>
</div>
<!--end magazine-recent-posts-->