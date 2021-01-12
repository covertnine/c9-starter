<?php
/**
 * Partial template for content in page.php
 *
 * @package c9-togo
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'c9-feature-hd-wide', $attr='class=mb-5' ); ?>

	<div class="entry-content">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'c9-togo' ),
					'after'  => '</div>',
				)
				);
			?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
