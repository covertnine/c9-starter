<?php

/**
 * The template for displaying all single posts.
 *
 * @package C9
 */

get_header();

if ( isset( get_option( 'cortex_posts' )['blog_sidebar'] ) ) {
	$sidebar       = get_option( 'cortex_posts' )['blog_sidebar'] !== 'hide' ? true : false;
	$sidebar_left  = get_option( 'cortex_posts' )['blog_sidebar'] === 'sidebar-left' && is_active_sidebar( 'left-sidebar' ) ? true : false;
	$sidebar_right = get_option( 'cortex_posts' )['blog_sidebar'] === 'sidebar-right' && is_active_sidebar( 'right-sidebar' ) ? true : false;
}
?>

<div class="wrapper" id="single-wrapper">
	<div class="container-narrow cortextoo" id="content" tabindex="-1">
		<div class="row no-gutters">

			<?php if ( $sidebar_left ) : ?>

				<div class="col-12 col-sm-2">

					<?php dynamic_sidebar( 'left-sidebar' ); ?>

				</div>
				<div class="col-12 col-sm-10 content-area" id="primary">

				<?php elseif ( $sidebar_right ) : ?>

					<div class="col-12 col-sm-10 content-area" id="primary">

					<?php else : ?>

						<div class="col-12 content-area" id="primary">

						<?php endif; ?>

						<main class="site-main" id="main">
							<?php
							while ( have_posts() ) :
the_post();
?>
								<?php
									get_template_part( 'loop-templates/content', 'single' );
									?>
								<?php cortextoo_post_nav(); ?>
								<?php
									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
									comments_template();
									endif;
									?>

							<?php
							endwhile; // end of the loop.
							?>

						</main><!-- #main -->

						<?php if ( $sidebar_right ) : ?>
						</div>

						<div class="col-12 col-sm-2 content-area" id="primary">

							<?php dynamic_sidebar( 'right-sidebar' ); ?>

						</div>

					<?php endif; ?>
					</div>
				</div>
		</div><!-- Row end -->

	</div><!-- Wrapper end -->
</div>

<?php get_footer(); ?>
