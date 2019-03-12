<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package cortextoo
 */

?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="assistive-text sr-only" for="s"><?php esc_html_e( 'Search', 'cortextoo' ); ?></label>
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search &hellip;', 'cortextoo' ); ?>" value="<?php the_search_query(); ?>">
		<span class="input-group-append">
			<input class="btn btn-primary" id="searchsubmit" name="submit" type="submit"
			value="<?php esc_attr_e( 'Search', 'cortextoo' ); ?>">
	</span>
	</div>
</form>
