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

<?php if (file_exists(locate_template('client/inc/footer.php'))) {

    include(locate_template('client/inc/footer.php'));
} else {

    require_once(get_template_directory() . '/inc/class-footer.php'); ?>

<div class="footer-wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">


                    <div class="site-info">

                        <div class="container">
                            <div class="row text-center">
                                <div class="col-xs-6 col-sm-3 col-lg-2 p-0 footer-social-wrapper">
                                    <div class="footer-social text-center">
                                        <?php
                                            $social_links = c9FooterHelpers::build_social();
                                            foreach ($social_links as $link_key => $link_value) {
                                                echo $link_value;
                                            }
                                            ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-lg-3 footer-links-wrapper">
                                    <div class="footer-links">
                                        <a href="/terms">Terms</a> |
                                        <a href="/privacy">Privacy</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-5 p-0 footer-copyright-wrapper">
                                    <p class="text-center copyright">&copy; 2019 Wells Lamont | A Marmon Group/Berkshire Hathaway Company</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-lg-2 text-left footer-search-wrapper">
                                    <div class="footer-search">
                                        <form method="get" id="searchform" action="https://wl2.covertnine.com/account-profile" role="search">
                                            <label class="assistive-text sr-only" for="s">Search</label>
                                            <div class="input-group">
                                                <input class="field form-control" id="s" name="s" type="text" placeholder="Search &hellip;" value="">
                                                <span class="input-group-append">
                                                    <input class="btn btn-primary" id="searchsubmit" name="submit" type="submit" value="Search">
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .container-->

                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div>
            <!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->
<?php } //end of checking for client footer.php 
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