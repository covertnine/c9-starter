<?php

/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package c9-starter
 */

?>
<div class="col-xs-12 col-sm-6 col-md-3 cat-post">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<?php
		if (has_post_thumbnail()) {
			// grab src, srcset, sizes from featured image for Retina support
			$c9_img_id     = get_post_thumbnail_id();
			$c9_img_src    = wp_get_attachment_image_src($c9_img_id, 'c9-post-rectangle-sm');
			$c9_img_srcset = wp_get_attachment_image_srcset($c9_img_id, 'c9-post-rectangle-sm');
			$c9_img_alt    = get_post_meta($cortex_featured_img, '_wp_attachment_image_alt', true);

		?>


			<figure class="entry-image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img src="<?php echo esc_url($c9_img_src[0]); ?>" width="100%" srcset="<?php echo esc_attr($c9_img_srcset); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" sizes="(max-width: 414px) 100vw, (max-width: 991px) 500px, (min-width: 992px) 380px, (min-width: 1200px) 380px" />
				</a>
			</figure>

		<?php } ?>

		<header class="entry-header">
			<?php
			the_title(
				sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
				'</a></h2>'
			);
			?>

		</header><!-- .entry-header -->

	</article><!-- #post-## -->
</div>