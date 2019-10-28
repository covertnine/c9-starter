<?php
/**
 * Partial template for content in page.php
 *
 * @package c9
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'c9-feature-hd-wide' ); ?>

	<div class="entry-content">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'c9' ),
					'after'  => '</div>',
				)
				);
			?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
