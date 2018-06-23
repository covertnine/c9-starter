<?php
/**
 * Left sidebar check.
 *
 * @package understrap
 */

?>

<?php
$sidebar_pos = get_theme_mod( 'cortextoo_sidebar_position' );
?>

<?php if ( 'left' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>
	<?php get_sidebar( 'left' ); ?>
<?php endif; ?>

<?php
	$html = '';
	if ( 'right' === $sidebar_pos || 'left' === $sidebar_pos ) {
		$html = '<div class="';
		if ( ( is_active_sidebar( 'right-sidebar' ) && 'right' === $sidebar_pos ) || ( is_active_sidebar( 'left-sidebar' ) && 'left' === $sidebar_pos ) ) {
			$html .= 'content-area" id="primary">';
		} else {
			$html .= 'content-area" id="primary">';
		}
		echo $html; // WPCS: XSS OK.
	} elseif ( 'both' === $sidebar_pos ) {
		$html = '<div class="';
		if ( is_active_sidebar( 'right-sidebar' ) && is_active_sidebar( 'left-sidebar' ) ) {
			$html .= 'content-area" id="primary">';
		} elseif ( is_active_sidebar( 'right-sidebar' ) || is_active_sidebar( 'left-sidebar' ) ) {
			$html .= 'content-area" id="primary">';
		} else {
			$html .= 'content-area" id="primary">';
		}
		echo $html; // WPCS: XSS OK.
	} else {
	    echo '<div class="content-area" id="primary">';
	}
