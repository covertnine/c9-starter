<?php
/**
 * Template Name: Login Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

?>

<div class="wrapper" id="page-wrapper">

	<div class="cortextoo page-login" id="content" tabindex="-1">


		<main class="site-main" id="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

					<header class="entry-header">
						<div class="container">
							<div class="row">
								<div class="col">
									<?php
										if (!is_user_logged_in()) {

											the_title( '<h1 class="entry-title">', '</h1>' );
										} else {
											?>
											<h1 class="entry-title"><?php _e('Talent Account'); ?></h1>
											<?php
										}
									?>
								</div>
							</div>
						</div>
					</header><!-- .entry-header -->


					<div class="entry-content">
						<div class="container">
							<div class="row">
								<div class="col">


									<?php
										if (!is_user_logged_in()) {
											the_content();
										}
									?>

									<?php dynamic_sidebar( 'cea-login-sidebar' ); ?>

								</div><!-- .col-->
							</div><!-- .row-->
						</div><!-- .container-->

					</div><!-- .entry-content -->


				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->


</div><!-- page-container end -->

</div><!-- wrapper end -->

<?php get_footer(); ?>
