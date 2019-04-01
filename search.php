<?php
/**
 * The template for displaying search results pages.
 *
 * @package cortextoo
 */

get_header();

?>

<div class="wrapper" id="search-wrapper">

	<div class="page-search-results cortextoo" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php if ( have_posts() ) : ?>


			<div class="wp-block-covertnine-blocks-column-containers mar20B home-search">
				<div class="container-fluid header-container-search">
					<div class="row no-gutter">

						<div class="wp-block-covertnine-blocks-column col">
							<div class="container">
								<h1 class="entry-title text-center"><?php printf(
								/* translators:*/
								 esc_html__( 'Results for: %s', 'cortextoo' ),
									'<span>' . get_search_query() . '</span>' ); ?></h1>

								<?php echo do_shortcode("[ceasearch]"); ?>

							</div>

						</div><!-- .wp-block-covertnine-blocks-column-->
					</div><!-- .row-->
				</div><!-- .container-fluid-->
			</div><!-- .c9 block column container -->


			<div class="container">
				<div class="row">
					<div class="col text-center">
						[ pre-set categories will be linked here hidden on mobile but visible on min-width: 768]
					</div>
				</div>
				<div class="row no-gutter">

					<div class="col-xs-12 col-sm-3">
						[filter by tag]

						[filter by rating]
					</div>
					<div class="col-xs-12 col-sm-9">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

					</div><!-- .col-->
				</div><!-- .row-->
			</div><!-- .container-->

		</main><!-- #main -->

		<!-- The pagination component -->
		<?php cortextoo_pagination(); ?>


	</div><!-- .cortextoo end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
