<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cortextoo
 */

$the_theme = wp_get_theme();
?>

<?php get_sidebar('footerfull'); ?>

<?php if (file_exists(locate_template('client/inc/footer.php'))) :

    include(locate_template('client/inc/footer.php'));
else :

    require_once(get_template_directory() . '/inc/class-footer.php'); ?>

    <div class="footer-wrapper" id="wrapper-footer">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <footer class="site-footer" id="colophon">


                        <div class="site-info">

                            <div class="container">

                                <div class="row text-center">
                                    <?php
                                        $social_links = c9FooterHelpers::build_social();
                                        if ($social_links) : ?>
                                        <div class="col-xs-6 col-sm-3 col-lg-2 p-0 footer-social-wrapper">
                                            <div class="footer-social text-center">
                                                <?php
                                                        foreach ($social_links as $link_key => $link_value) {
                                                            echo $link_value;
                                                        }
                                                        ?>
                                            </div>
                                        </div>
                                    <?php endif;
                                        ?>
                                    <div class="col-xs-6 col-sm-3 col-lg-3 footer-links-wrapper">
                                        <div class="footer-links">
                                            <a href="/terms">Terms</a> |
                                            <a href="/privacy">Privacy</a>
                                        </div>
                                    </div>
                                    <?php
                                        if (get_option('cortex_footer')) :
                                            if (get_option('cortex_footer')['copyright_content']) :
                                                echo '<div class="col-xs-12 col-sm-6 col-lg-5 p-0 footer-copyright-wrapper"><p class="text-center copyright">' . get_option('cortex_footer')['copyright_content'] . '</p></div>';
                                            endif;
                                            if (get_option('cortex_footer')['show_search'] === 'show') : ?>
                                            <div class="col-xs-12 col-sm-12 col-lg-2 text-left footer-search-wrapper">
                                                <div class="footer-search">
                                                    <?php get_search_form(); ?>
                                                </div>
                                            </div>
                                        <?php
                                                endif;
                                                ?>
                                </div>
                            </div>
                        <?php endif;
                            ?>
                        <?php
                            if (get_option('cortex_footer')) :
                                if (get_option('cortex_footer')['copyright_content']) :
                                    echo '<div class="col-xs-12 col-sm-6 col-lg-5 p-0 footer-copyright-wrapper"><p class="text-center copyright">' . get_option('cortex_footer')['copyright_content'] . '</p></div>';
                                endif;
                                if (get_option('cortex_footer')['show_search'] === 'show') : ?>
                                <div class="col-xs-12 col-sm-12 col-lg-2 text-left footer-search-wrapper">
                                    <div class="footer-search">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                        <?php endif;
                            endif; ?>
                        </div><!-- .container-->
                </div><!-- .site-info -->
                </footer><!-- #colophon -->
            </div>
            <!--col end -->
        </div><!-- row end -->
    </div><!-- container end -->
    </div><!-- wrapper end -->
<?php endif; //end of checking for client footer.php 
?>
</div><!-- #page we need this extra closing tag here -->
<div id="search">
    <button type="button" class="search-close accent-color-bg"><i class="fa fa-close"></i><span class="sr-only"><?php _e('Close', 'cortextoo'); ?></span></button>
    <form role="search" method="get" id="fullscreen" action="/">
        <div>
            <span class="sr-only"><?php _e('Search for:', 'cortextoo'); ?></span>
            <input type="search" class="search-field" name="s" value="" placeholder="<?php _e('Search...', 'cortextoo'); ?>" />
            <button type="submit" class="btn"><?php _e('Search', 'cortextoo'); ?></button>
        </div>
    </form>
</div>
<?php wp_footer(); ?>

</body>

</html>