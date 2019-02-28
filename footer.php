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

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
	<form action="https://covertnine.us4.list-manage.com/subscribe/post?u=136895fb25511307a983ed582&amp;id=4b9b22ae91" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">

			<div class="mc-field-group">
				<label for="mce-EMAIL">Sign Up For Newsletter</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
			    <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-secondary btn-sm">
			</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>
		    <div style="position: absolute; left: -5000px;" aria-hidden="true">
			    <input type="text" name="b_136895fb25511307a983ed582_4b9b22ae91" tabindex="-1" value="" placeholder="Email">
			</div>
	    </div><!-- #mc_embed_signup_scroll-->
	</form>
</div><!-- #mc_embed_signup-->

<!--End mc_embed_signup-->
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

