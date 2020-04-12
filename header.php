<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package C9
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="hfeed site c9" id="page">
		<div id="smoothwrapper" <?php body_class(); ?>>
		<?php
		if ( file_exists( locate_template( 'client/inc/topnav.php' ) ) ) {
			include( locate_template( 'client/inc/topnav.php' ) );
		}
		?>
		<?php
		if ( file_exists( locate_template( 'client/inc/header.php' ) ) ) {
			include( locate_template( 'client/inc/header.php' ) );
		} else {
		?>
			<div id="wrapper-navbar" class="header-navbar" itemscope itemtype="http://schema.org/WebSite">

				<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'c9' ); ?></a>

				<nav class="navbar navbar-expand-lg navbar-light">

					<div class="container">
						<?php

							// get custom logo, if not set, use customizer logo, if that's not set, show text of site title
							$c9_site_name = get_bloginfo( 'name' );

							if (has_custom_logo()) {
								the_custom_logo();
							} else {
							?>
							<a href="<?php echo get_home_url(); ?>" title="<?php echo $c9_site_name . __( ' Homepage', 'c9' ); ?>" class="navbar-brand c9-custom-logo">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/c9-black-text-logo.svg'; ?>" class="c9-home-logo img-fluid" alt="<?php echo $c9_site_name . __( ' Logo', 'c9' );
								?>" />
							</a>
							<?php
							}
							?>

						<div class="navbar-small-buttons">
							<div class="nav-search">
								<a href="#" class="btn-nav-search">
									<i class="fa fa-search"></i>
									<span class="sr-only"><?php __( 'Search', 'c9' ); ?></span>
								</a>
							</div>
							<?php if (has_nav_menu('primary')) { ?>

							<div class="nav-toggle">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
									<i class="fa fa-bars"></i>
								</button>
							</div>
							<!--.nav-toggle-->
							<?php
							}
							?>
						</div><!-- .navbar-small-buttons-->

						<!-- The WordPress Menu goes here -->
						<?php
						wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'collapse navbar-collapse justify-content-center navbar-expand-lg',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav nav nav-fill justify-content-between',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new c9_WP_Bootstrap_Navwalker(),
								)
							);
							?>
					</div><!-- .container -->

				</nav><!-- .site-navigation -->
			</div><!-- .header-navbar-->
		<?php } ?>
