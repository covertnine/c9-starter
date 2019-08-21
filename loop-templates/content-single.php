<?php
/**
 * Single post partial template.
 *
 * @package cortextoo
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php
		if ( has_post_thumbnail() && $post_id ) {

			//grab src, srcset, sizes from featured image for Retina support
			$c9_img_id		= get_post_thumbnail_id( $post_id );
			$c9_img_src 	= wp_get_attachment_image_url( $c9_img_id, 'large' );
			$c9_img_srcset 	= wp_get_attachment_image_srcset( $c9_img_id, 'large' );
			$c9_img_sizes	= wp_get_attachment_image_sizes($c9_img_id, 'large');

	?>

	<figure class="entry-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php echo esc_url( $c9_img_src ); ?>" srcset="<?php echo esc_attr( $c9_img_srcset ); ?>" class="img-fluid mx-auto d-block" alt="<?php the_title_attribute(); ?>" sizes="<?php echo esc_attr( $c9_img_sizes ); ?>" />
		</a>
	</figure>

	<?php } ?>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php cortextoo_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php cortextoo_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
