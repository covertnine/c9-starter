<?php

/**
 * The template for displaying search forms
 *
 * @package c9-togo
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>" role="search">
    <label class="assistive-text sr-only" for="s"><?php esc_html_e('Search', 'c9-togo'); ?></label>
    <div class="input-group">
        <input class="field form-control search-field" name="s" type="text" placeholder="<?php esc_attr_e('Search &hellip;', 'c9-togo'); ?>" value="<?php the_search_query(); ?>">
        <span class="input-group-append">
            <input class="btn btn-primary" name="submit" type="submit" value="<?php esc_attr_e('Search', 'c9-togo'); ?>">
        </span>
    </div>
</form>
