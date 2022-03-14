<?php

/**
 * Template Name: Riot Fest Magazine
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package c9-starter
 */

get_header('magazine');
?>

<div class="container-width-page-wrapper c9 riot-magazine" id="container-width-page-wrapper">

	<main class="site-main" id="main" role="main">

		<?php
		while (have_posts()) :
			the_post();
		?>

			<div class="entry-content">
				<div class="container">
					<div class="row">
						<div class="col">
							<?php the_content(); ?>
						</div><!-- .col-->
					</div><!-- .row-->
				</div><!-- .container-->

			</div><!-- .entry-content -->

		<?php endwhile; // end of the loop. 
		?>

	</main><!-- #main -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>