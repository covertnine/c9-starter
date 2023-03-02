<?php

/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package c9-starter
 */

get_header();

?>


<div class="wrapper" id="author-wrapper">

    <div class="c9" id="content" tabindex="-1">

        <main class="site-main" id="main">
            <div class="container">
                <header class="page-header author-header entry-header">
                    <div class="container-narrow has-color-light-background-color pl-0 pr-0">
                        <div class="row author-profile">
                            <?php
                            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                            ?>
                            <?php if (!empty($curauth->ID)) : ?>
                                <div class="col-xs-12 col-sm-4">
                                    <?php echo get_avatar($curauth->ID, 512); ?>
                                </div>
                            <?php endif; ?>
                            <div class="col-xs-12 col-sm-8">
                                <div class="pt-5 pr-5 pl-5">
                                    <h1><?php esc_html_e('About: ', 'c9-starter'); ?><?php echo esc_html($curauth->nickname); ?></h1>

                                    <dl class="pr-5">
                                        <?php if (!empty($curauth->user_url)) : ?>
                                            <dt><?php esc_html_e('Website', 'c9-starter'); ?></dt>
                                            <dd>
                                                <a href="<?php echo esc_url($curauth->user_url); ?>"><?php echo esc_html($curauth->user_url); ?></a>
                                            </dd>
                                        <?php endif; ?>

                                        <?php if (!empty($curauth->user_description)) : ?>
                                            <dt><?php esc_html_e('Profile', 'c9-starter'); ?></dt>
                                            <dd><?php echo wp_kses($curauth->user_description, array(
  'strong' => array(),
  'em' => array('class' => true),
  'a' => array('href' => true, 'title' => true),
)); ?></dd>
                                        <?php endif; ?>
                                    </dl>
                                </div>
                            </div>
                            <!--.col-->
                        </div><!-- row-->
                    </div>
                    <!--container-->
                </header><!-- .page-header -->
                <div class="container-narrow pl-0 pr-0">
                    <div class="row author-post-container mar30B mar30T">

                        <?php if (have_posts()) : ?>

                            <?php
                            while (have_posts()) :
                                the_post();
                                get_template_part('loop-templates/content', get_post_format());
                            endwhile;
                            ?>
                        <?php
                        else :
                            get_template_part('loop-templates/content', 'none');
                        endif;
                        ?>
                    </div>
                    <!--.row-->
                </div>
                <!--.container-narrow-->
            </div>
            <!--end container-->
        </main><!-- #main -->

        <!-- The pagination component -->
        <?php c9_pagination(); ?>

    </div><!-- .c9 end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>