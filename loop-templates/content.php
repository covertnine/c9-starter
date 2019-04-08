<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package cortextoo
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php
		if ( has_post_thumbnail() ) {

			//grab src, srcset, sizes from featured image for Retina support
			$c9_img_id		= get_post_thumbnail_id( $post_id );
			$c9_img_src 	= wp_get_attachment_image_url( $c9_img_id, 'c9-feature-wide' );
			$c9_img_srcset 	= wp_get_attachment_image_srcset( $c9_img_id, 'c9-feature-wide' );
			$c9_img_sizes	= wp_get_attachment_image_sizes($c9_img_id, 'c9-feature-wide');

	?>

	<figure class="entry-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php echo esc_url( $c9_img_src ); ?>" srcset="<?php echo esc_attr( $c9_img_srcset ); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>" sizes="<?php echo esc_attr( $c9_img_sizes ); ?>" />
		</a>
	</figure>

	<?php } ?>


	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php cortextoo_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->
	<div class="entry-content">

		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'cortextoo' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php cortextoo_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->