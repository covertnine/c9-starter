<?php
/**
 * cortextoo functions and definitions
 *
 * @package cortextoo
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Load Client-Specific Files
 */
if (file_exists(get_template_directory() . '/client/client.php')) {
    require get_template_directory() . '/client/client.php';
} else {
    add_action('admin_notices', 'need_client_folder');
}

function need_client_folder()
{
    ?>
    <div class="update-nag notice">
        <p><?php _e('You need a client! If you have no client-specific code, add an empty client/client.php to the parent theme. If you still dont know what&#39;s going on, contact sam@covertnine.com'); ?></p>
    </div>
<?php

}
