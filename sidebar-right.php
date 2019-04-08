<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package cortextoo
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'cortextoo_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="widget-area" id="right-sidebar" role="complementary">
	<?php else : ?>
<div class="widget-area" id="right-sidebar" role="complementary">
	<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #secondary -->
