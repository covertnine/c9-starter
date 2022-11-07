<?php

/**
 * Search results partial template.
 *
 * @package c9-starter
 */

?>
<div class="col-xs-12 col-sm-3 mb-5 cat-post">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<?php
		if (has_post_thumbnail()) {
			// grab src, srcset, sizes from featured image for Retina support
			$c9_img_id     = get_post_thumbnail_id();
			$c9_img_src    = wp_get_attachment_image_url($c9_img_id, 'c9-feature-medium-crop');
			$c9_img_srcset = wp_get_attachment_image_srcset($c9_img_id, 'c9-feature-medium-crop');
			$c9_img_sizes  = wp_get_attachment_image_sizes($c9_img_id, 'c9-feature-medium-crop');

		?>

			<figure class="entry-image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img src="<?php echo esc_url($c9_img_src); ?>" srcset="<?php echo esc_attr($c9_img_srcset); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" sizes="<?php echo esc_attr($c9_img_sizes); ?>" />
				</a>
			</figure>

		<?php } else { 
			// grab src, srcset, sizes from featured image for Retina support of placeholder img since no featured image is set
			$c9_img_id     = '78896';
			$c9_img_src    = wp_get_attachment_image_url($c9_img_id, 'c9-feature-medium-crop');
			$c9_img_srcset = wp_get_attachment_image_srcset($c9_img_id, 'c9-feature-medium-crop');
			$c9_img_sizes  = wp_get_attachment_image_sizes($c9_img_id, 'c9-feature-medium-crop');
			
			?>
			<figure class="entry-image img-placeholder">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img src="<?php echo esc_url($c9_img_src); ?>" srcset="<?php echo esc_attr($c9_img_srcset); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" sizes="<?php echo esc_attr($c9_img_sizes); ?>" />
				</a>
			</figure>
		<?php } ?>
		<header class="entry-header text-center">

			<?php
			the_title(
				sprintf('<h2 class="entry-title text-left"><a href="%s" rel="bookmark" class="c9-smooth">', esc_url(get_permalink())),
				'</a></h2>'
			);

			if ('post' === get_post_type()) :
			?>

				<div class="entry-meta text-left mt-3 mb-1">

					<?php c9_posted_on(); ?>

				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

	</article><!-- #post-## -->
</div>