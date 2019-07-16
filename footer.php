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

<div class="wrapper footer-wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">


                    <div class="site-info">

                        <div class="container">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <p class="text-center">&copy; <?php echo date("Y") . ' ';
                                                                    echo bloginfo('name'); ?></p>
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

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>