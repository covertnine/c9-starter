<?php

/**
 * Partial template for content in page.php
 *
 * @package c9-starter
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<?php

	$cortex_date_adjustment = date('Y-m-d H:i:s');
	$cortex_time 			= date('Y-m-d H:i:s', strtotime($cortex_date_adjustment . ' - 10 Hours'));
	$listing_args = array(
		'post_type'              => 'event',
		'post_status'            => 'publish', // only show published events
		'orderby'                => 'meta_value', // order by date
		'meta_key'               => 'date_and_time', // your ACF Date & Time Picker field
		'meta_value'             => $cortex_time, // Use the current time from above
		'meta_compare'           => '>=', // Compare today's datetime with our event datetime
		'order'                  => 'ASC', // Show earlier events first
		'posts_per_page'   => -1,
	);
	// The Query for upcoming events
	$cortex_query = new WP_Query($listing_args);

	if ($cortex_query->have_posts()) {

	?>
		<div class="c9-posts-grid riot-upcoming-shows p-3 c9-scroll">
			<section class="c9-block-post-grid p-0 container align">
				<div class="c9-post-grid-items is-grid columns-4">
					<?php
					while ($cortex_query->have_posts()) {
						$cortex_query->the_post();

						$cortex_start      		 		= get_field('date_and_time'); //can be used for formatting
						$cortex_day      				= date('D M j Y', strtotime($cortex_start));
						$cortex_date      				= date('m.j.y', strtotime($cortex_start));
						$cortex_time      				= date('g:iA', strtotime($cortex_start));
						$cortex_doors					= get_field('time');
						//$cortex_date       		 		= get_field('date_and_time'); //raw date from db is already displayed correctly
						$cortex_featured_img 			= get_post_thumbnail_id();
						$cortex_featured_img_src 		= wp_get_attachment_image_url($cortex_featured_img, 'riot-square-show');
						$cortex_featured_img_srcset 	= wp_get_attachment_image_srcset($cortex_featured_img_src, 'riot-square-show-big');
						$cortex_featured_img_alt 		= get_post_meta($cortex_featured_img, '_wp_attachment_image_alt', true);
						$cortex_location_name    		= get_field('location_name');
						$cortex_location_city_country   = get_field('location_city_country');
						$cortex_location_address   		= get_field('location_address');
						$cortex_location_map_link   	= esc_url(get_field('location_map_link'));
						$cortex_event_ticket_link   	= esc_url(get_field('event_ticket_link'));
						$cortex_rsvp_link     			= esc_url(get_field('rsvp_link'));
						$show_id						= get_the_ID();
						$show_is_sold_out				= get_field('show_is_sold_out');
						$show_low_tickets               = get_field('show_is_almost_sold_out');


					?>
						<article id="post-<?php echo $show_id; ?>" class="c9-post-grid-item rf-show-single-event post-<?php echo $show_id; ?> has-post-thumbnail has-color-light-background-color entry-content" itemscope>
							<div class="c9-block-post-grid-image">
								<a href="<?php the_permalink(); ?>" rel="bookmark" aria-hidden="true" tabindex="-1" title="Concert details for <?php echo get_the_title(); ?> at <?=$cortex_location_name;?> in <?=$cortex_location_city_country;?>">
									<img src="<?php echo esc_attr($cortex_featured_img_src); ?>" srcset="<?php echo esc_attr($cortex_featured_img_srcset); ?>" sizes="(max-width: 414px) 100vw, (max-width: 991px) 540px, (min-width: 992px) 1080px" alt="<?php echo $cortex_featured_img_alt; ?>" loading="lazy">
								</a>
							</div>
							<div class="c9-block-post-grid-text">
								<header class="c9-block-post-grid-header">
									<div class="c9-block-post-grid-byline">
										<div class="show-day show-date row">
											<div class="col-8 text-uppercase d-inline-block text-left font-weight-bold headline-font">
												<span class="date-number"><?php echo $cortex_day; ?>
												</span>
											</div>
											<div class="col-4 d-inline-block text-right headline-font">
												<span class="show-time font-weight-light"><?php echo $cortex_time; ?>
												</span>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span class="show-doors text-uppercase"><?php echo $cortex_doors; ?></span>
											</div>
										</div>
									</div>
									<h2 class="c9-block-post-grid-title headliner-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Concert details for <?php echo get_the_title(); ?> at <?=$cortex_location_name;?> in <?=$cortex_location_city_country;?>" class="show-title"><?php the_title(); ?></a></h2>
								</header>
								<div class="c9-block-post-grid-excerpt">
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
													'a' => array(),
												);

											?>
												<div class="opener font-weight-light">
													<h3 class="c9-sh h6"><?php echo wp_kses($opener_name, $allowed_tags); ?></h3>
												</div>
											<?php

											// End loop.
											endwhile;
											?>
										</div><!-- end event-acts-->
									<?php endif; ?>
									<div class="venue text-uppercase">
										<?php if (!empty($cortex_location_map_link)) { ?>
											<a href="<?php echo $cortex_location_map_link; ?>" target="_blank">
											<?php } ?>
											<?php if (!empty($cortex_location_name)) { ?>
												<span class="font-weight-bolder headline-font headliner"><?php echo $cortex_location_name; ?></span>
											<?php } ?>
											<div class="location-address">
											<?php if (!empty($cortex_location_address)) { ?>
												<span class="headline-font"><?php echo $cortex_location_address; ?></span> •
											<?php } ?>
											<?php if (!empty($cortex_location_city_country)) { ?>
												<span class="headline-font"><?php echo $cortex_location_city_country; ?></span>
											<?php } ?>
											</div>
											<?php if (!empty($cortex_location_map_link)) { ?>
											</a>
										<?php } ?>
									</div>
									<!--end venue-->

								</div><!-- end c9-block-post-grid-excerpt-->
							</div>

							<div class="wp-block-buttons rf-show-btns">
							<div class="wp-block-button"><a class="wp-block-button__link has-color-light-color" href="<?php the_permalink(); ?>" title="Concert details for <?php echo get_the_title(); ?> at <?=$cortex_location_name;?> in <?=$cortex_location_city_country;?>">Details</a></div>
								<?php if ((!empty($cortex_event_ticket_link)) && ($show_is_sold_out != true)) { ?>
									<div class="wp-block-button">
										<a class="wp-block-button__link<?php if (!empty($show_low_tickets)) { echo ' has-color-yellow-bg dark-color-text'; } else { echo ' has-color-success-background-color has-background has-color-light-color';}?>" href="<?php echo $cortex_event_ticket_link; ?>" title="Buy tickets to <?php echo get_the_title(); ?> (opens in new window)" target="_blank"><?php if (!empty($show_low_tickets)) { echo 'Low tickets';} else { echo 'Tickets'; }?></a>
									</div>
								<?php } ?>
								<?php if ($show_is_sold_out == true) { ?>
									<div class="wp-block-button">
										<span class="wp-block-button-soldout wp-block-button__link has-color-gray-background-color has-background has-color-light-color">Sold Out</span>
									</div>
								<?php } ?>
								<?php if (!empty($cortex_rsvp_link)) { ?><div class="wp-block-button"><a class="wp-block-button__link has-rsvp-color has-background has-color-light-color" href="<?php echo $cortex_rsvp_link; ?>" title="RSVP to <?php get_the_title(); ?>">RSVP</a></div><?php } ?>
								<div class="wp-block-button share-event d-none d-block d-sm-none">
                                    <a class="wp-block-button__link has-color-share-color has-background light-color-text" href="<?= the_permalink(); ?>" target="_blank" title="Share this show with a cool friend. You have lots of those right?">Share</a>
                                </div>
							</div>
						</article>
					<?php
					} //end of events loop
					wp_reset_postdata();
					?>

				</div>
			</section>
		</div>
	<?php
	} else { // end of checking for event posts, there was none found if we get to here
	?>
		<p><?php
			esc_html_e('No upcoming shows at this time.', 'c9-starter');
			?></p>
	<?php
	} //end of none found
	?>

	<footer class="entry-footer">

		<?php edit_post_link(__('Edit', 'c9-starter'), '<span class="edit-link">', '</span>'); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->