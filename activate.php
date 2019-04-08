<?php

define( 'WP_INSTALLING', true );

global $current_site;

// include GF User Registration functionality
require_once( gf_user_registration()->get_base_path() . '/includes/signups.php' );

GFUserSignups::prep_signups_functionality();

do_action( 'activate_header' );

function do_activate_header() {
    do_action( 'activate_wp_head' );
}
add_action( 'wp_head', 'do_activate_header' );

function wpmu_activate_stylesheet() {
    ?>
    <style type="text/css">
        #submit, #key { width: 90%; font-size: 24px; }
        #language { margin-top: .5em; }
        .error { background: #f66; }
        span.h3 { padding: 0 8px; font-size: 1.3em; font-family: "Lucida Grande", Verdana, Arial, "Bitstream Vera Sans", sans-serif; font-weight: bold; color: #333; }
    </style>
    <?php
}
add_action( 'wp_head', 'wpmu_activate_stylesheet' );

get_header(); ?>

<div class="full-width-page-wrapper cortextoo page-activation">
	<div class="page">
		<header class="entry-header">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 class="entry-title"><?php echo __('Account Activation', 'cortextoo'); ?></h1>
					</div>
				</div>
			</div>
		</header>

		<div class="container-narrow">
			<div class="entry-content">
		    <?php if ( empty($_GET['key']) && empty($_POST['key']) ) { ?>

		        <h2><?php _e('Activation Key Required') ?></h2>
		        <form name="activateform" id="activateform" method="post" action="<?php echo network_site_url('?page=gf_activation'); ?>">
		            <p>
		                <label for="key"><?php _e('Activation Key:') ?></label>
		                <br /><input type="text" name="key" id="key" value="" size="50" />
		            </p>
		            <p class="submit">
		                <input id="submit" type="submit" name="Submit" class="submit" value="<?php esc_attr_e('Activate') ?>" />
		            </p>
		        </form>

		    <?php } else {

		        $key = !empty($_GET['key']) ? $_GET['key'] : $_POST['key'];
		        $result = GFUserSignups::activate_signup($key);
		        if ( is_wp_error($result) ) {
		            if ( 'already_active' == $result->get_error_code() || 'blog_taken' == $result->get_error_code() ) {
		                $signup = $result->get_error_data();
		                ?>
		                <h2><?php _e('Your account is now active!'); ?></h2>
		                <?php
		                echo '<p class="lead-in">';
		                if ( $signup->domain . $signup->path == '' ) {
		                    printf( __('You may now <a href="%1$s" class="cea-link-text">log in</a> to the site using your chosen username of <strong>%2$s</strong>. <br /><br />Please check your email inbox at %3$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. <br /><br />If you still do not receive an email within an hour, you can <a href="%4$s" class="cea-link-text">reset your password</a>.'), network_site_url( '/login', 'login' ), $signup->user_login, $signup->user_email, network_site_url( 'wp-login.php?action=lostpassword', 'login' ) );
		                } else {
		                    printf( __('Your account is now active. Login with your username <strong>%3$s</strong>. Please check your email inbox at %4$s for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%5$s" class="cea-text-link">reset your password</a>.'), '//' . $signup->domain, $signup->domain, $signup->user_login, $signup->user_email, network_site_url( 'wp-login.php?action=lostpassword' ) );
		                }
		                echo '</p>';
		            } else {
		                ?>
		                <h2><?php _e('An error occurred during the activation'); ?></h2>
		                <?php
		                echo '<p>'.$result->get_error_message().'</p>';
		            }
		        } else {
		            extract($result);
		            $url = is_multisite() ? get_blogaddress_by_id( (int) $blog_id) : home_url('', 'http');
		            $user = new WP_User( (int) $user_id);
		            ?>
		            <h2><?php _e('Your account is now active!'); ?></h2>

		            <div id="signup-welcome">
			            <p><?php _e('Be sure to save your username somewhere safely.', 'cortextoo'); ?></p>
		                <p><span class="h5"><?php _e('Your username is'); ?></span> <?php echo $user->user_login ?></p>
		            </div>

		            <?php if ( $url != network_home_url('', 'http') ) : ?>
		                <p class="view"><?php printf( __('<a href="%1$s" class="btn btn-cea">Log in</a>'), $url, $url . '/login' ); ?></p>
		            <?php else: ?>
		                <p class="view"><?php printf( __('<a href="%1$s" class="btn btn-cea">Log in</a>' ), network_site_url('/login', 'login'), network_home_url() ); ?></p>
		            <?php endif;
		        }
		    }
		    ?>
			</div><!-- .entry-content-->
		</div><!-- .container-narrow-->
	</div><!-- .page-->
</div><!-- full-width-page-wrapper-->
<script type="text/javascript">
    var key_input = document.getElementById('key');
    key_input && key_input.focus();
</script>
<?php get_footer(); ?>