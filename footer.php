<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cortextoo
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'cortextoo_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-7">
									<p>&copy; <?php echo date("Y"); ?> CEA | <a href="/terms-of-use/">Terms &amp; Conditions</a> | <a href="/privacy-policy/">Privacy Policy</a></p>
								</div>
								<div class="col-xs-12 col-sm-5">
									Sign Up For Emails [email form]
								</div>
							</div>
						</div><!-- .container-->

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

