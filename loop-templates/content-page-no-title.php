<?php
/**
 * Partial template for content in page.php
 *
 * @package cortextoo
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content no-entry-title">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'cortextoo' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
