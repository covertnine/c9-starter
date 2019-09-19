<?php
/**
 * Single post partial template.
 *
 * @package c9
 */
$header_size = isset( get_post_meta( $post->ID, 'c9_post_header_size', true )['c9_post_header_size'] ) ? get_post_meta( $post->ID, 'c9_post_header_size', true )['c9_post_header_size'] : 'small';

if ( isset( get_option( 'cortex_posts' )['blog_sidebar'] ) ) {
	$sidebar       = 'hide' !== get_option( 'cortex_posts' )['blog_sidebar'] ? true : false;
	$sidebar_left  = 'sidebar-left' === get_option( 'cortex_posts' )['blog_sidebar'] && is_active_sidebar( 'left-sidebar' ) ? true : false;
	$sidebar_right = 'sidebar-right' === get_option( 'cortex_posts' )['blog_sidebar'] && is_active_sidebar( 'right-sidebar' ) ? true : false;
} else {
	$sidebar_right = false;
	$sidebar_left  = false;
}
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if ( 'large' === $header_size ) { ?>

		<header class="entry-big-header">
			<div class="entry-title-box">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php c9_posted_on(); ?>

				</div>
			</div>
			<!--.entry-title-box-->

			<?php
				if ( has_post_thumbnail() ) {

				// grab src, srcset, sizes from featured image for Retina support
				$c9_img_id  = get_post_thumbnail_id( $post->ID );
				$c9_img_src = wp_get_attachment_image_url( $c9_img_id, 'c9-feature-hd-wide' );

				?>
				<figure class="entry-header-bgimg" style="background: url(<?php echo esc_url( $c9_img_src ); ?>) center fixed no-repeat;"></figure>

			<?php } ?>

		</header>
	<?php
	} if ( 'small' === $header_size ) {
	if ( has_post_thumbnail() ) {

			// grab src, srcset, sizes from featured image for Retina support
			$c9_img_id     = get_post_thumbnail_id( $post->ID );
			$c9_img_src    = wp_get_attachment_image_url( $c9_img_id, 'c9-feature-medium-wide' );
			$c9_img_srcset = wp_get_attachment_image_srcset( $c9_img_id, 'c9-feature-medium-wide' );
			$c9_img_sizes  = wp_get_attachment_image_sizes( $c9_img_id, 'c9-feature-medium-wide' );

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
				<?php c9_posted_on(); ?>

			</div>

		</header>

	<?php
	}

	if ( $sidebar_left ) :

		get_sidebar( 'left' );

	endif;
	?>

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->
	<?php

	if ( $sidebar_right ) :

	get_sidebar( 'right' );

	endif;
	?>

	<footer class="entry-footer">
		<div class="entry-footer-content mar30B">
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'c9' ),
					'after'  => '</div>',
				)
				);
			?>
		</div>

		<?php c9_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
