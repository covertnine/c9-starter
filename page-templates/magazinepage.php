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

<div class="wrapper" id="page-wrapper">

	<div class="page-container c9" id="content" tabindex="-1">


		<main class="site-main" id="main">

			<?php
			while (have_posts()) :
				the_post();
			?>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

					<div class="entry-content">

						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. 
			?>

		</main><!-- #main -->

	</div><!-- page-container end -->

</div><!-- wrapper end -->

<?php get_footer(); ?>