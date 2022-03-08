<?php

/**
 * The right sidebar containing the main widget area.
 *
 * @package c9-starter
 */

if (!is_active_sidebar('right-sidebar')) {
    return;
}
$c9_post_sidebar = get_post_meta(get_the_id(), 'sidebar', true);

?>


<div class="widget-area sidebar<?php if ($c9_post_sidebar == 'sidebar-none') {
                                    echo " d-none";
                                } ?>" id="right-sidebar" role="complementary">

    <?php dynamic_sidebar('right-sidebar'); ?>

</div><!-- #secondary -->