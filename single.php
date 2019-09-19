<?php
/**
 * The template for displaying all single posts.
 *
 * @package C9
 */

get_header();
?>

<div class="wrapper" id="single-wrapper">
	<div class="container-narrow c9" id="content" tabindex="-1">
		<div class="row no-gutters">

						<div class="col-12 content-area" id="primary">

						<main class="site-main" id="main">
							<?php
							while ( have_posts() ) :

								the_post();

								get_template_part( 'loop-templates/content', 'single' );

								c9_post_nav();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :

									comments_template();

								endif;
							endwhile; // end of the loop.
							?>

						</main><!-- #main -->

					</div>
		</div><!-- Row end -->
	</div><!-- Wrapper end -->
</div>

<?php get_footer(); ?>
