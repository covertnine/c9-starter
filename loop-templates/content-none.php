<?php

/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package c9-starter
 */

?>
<div class="container">
	<div class="row no-gutter">
		<section class="no-results not-found">

			<header class="page-header">

				<h1 class="page404-title mar30T"><?php esc_html_e('Oops!', 'c9-starter'); ?></h1>
				<h2 class="page404-subtitle h1 text-xl">
					<?php esc_html_e('there\'s nothing here.', 'c9-starter'); ?>
				</h2>

			</header><!-- .page-header -->

			<div class="page-content">

				<?php
				if (is_home() && current_user_can('publish_posts')) :
				?>
					<p>
						<?php
						printf(
							wp_kses(
								__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'c9-starter'),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							),
							esc_url(admin_url('post-new.php'))
						);
						?>
					</p>

				<?php
				elseif (is_search()) :
				?>

					<p>Try searching below, or search by zip code on our <a href="/locations" title="Find a Wow Bao near you!">Locations</a> page.
					</p>
				<?php
					get_search_form();
				else :
				?>
					<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for.', 'c9-starter'); ?> <br />Try searching, or use our <a href="/locations" title="Find a Wow Bao near you!">Locations</a> link to search by address or ZIP code.
					</p>
				<?php
					get_search_form();
				endif;
				?>
			</div><!-- .page-content -->

		</section><!-- .no-results -->
	</div>
	<!--container -->
</div>
<!--.row-->
