<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php cortextoo_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

	<div class="row">
	<div class="container">
		<?php the_content(); ?>
	</div>
	</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php cortextoo_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
