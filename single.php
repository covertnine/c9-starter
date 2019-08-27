<?php

/**
 * The template for displaying all single posts.
 *
 * @package cortextoo
 */

get_header();

?>

<div class="wrapper" id="single-wrapper">

	<div class="container-narrow cortextoo" id="content" tabindex="-1">

		<main class="site-main" id="main">
			<?php while (have_posts()) : the_post(); ?>
			<?php 
			get_template_part('loop-templates/content', 'single'); 
			?>
			<?php cortextoo_post_nav(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. 
			?>

		</main><!-- #main -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>