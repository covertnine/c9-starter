<?php

/**
 * Single post partial template.
 *
 * @package C9
 */
$header_size = get_post_meta($post->ID, 'c9_header_size', true);
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-big-header">
		<div class="entry-title-box">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

			<div class="entry-meta">
				<?php cortextoo_posted_on(); ?>

			</div>
		</div><!--.entry-title-box-->

		<?php
	if (has_post_thumbnail()) {

		//grab src, srcset, sizes from featured image for Retina support
		$c9_img_id		= get_post_thumbnail_id($post_id);
		$c9_img_src 	= wp_get_attachment_image_url($c9_img_id, 'c9-feature-hd-wide');

		?>
		<figure class="entry-header-bgimg" style="background: url(<?php echo esc_url($c9_img_src);?>) center fixed no-repeat;"></figure>

	<?php } ?>

	</header>

<?php
	if (has_post_thumbnail()) {

		//grab src, srcset, sizes from featured image for Retina support
		$c9_img_id		= get_post_thumbnail_id($post_id);
		$c9_img_src 	= wp_get_attachment_image_url($c9_img_id, 'c9-feature-medium-wide');
		$c9_img_srcset 	= wp_get_attachment_image_srcset($c9_img_id, 'c9-feature-medium-wide');
		$c9_img_sizes	= wp_get_attachment_image_sizes($c9_img_id, 'c9-feature-medium-wide');

		?>
	<figure class="entry-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php echo esc_url($c9_img_src); ?>" srcset="<?php echo esc_attr($c9_img_srcset); ?>" class="img-fluid mx-auto d-block" alt="<?php the_title_attribute(); ?>" sizes="<?php echo esc_attr($c9_img_sizes); ?>" />
		</a>
	</figure>

	<?php } ?>

	<header class="entry-header">

		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		<div class="entry-meta">
			<?php cortextoo_posted_on(); ?>

		</div>

	</header>

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-footer-content mar30B">
			<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'cortextoo' ),
			'after'  => '</div>',
		) );
		?>
		</div>

		<?php cortextoo_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->