<?php

/**
 * Template Name: Digital Menu Boards
 *
 * Template for displaying a blank page with no header or footer that refreshes automatically every hour to get new menu updates
 *
 * @package c9-starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$page = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$clean_url = substr($page, 0, strpos($page, "?")) . '?cache-reload=' . rand('4234', '9999999999999999');
$sec = "1800";
?>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $clean_url; ?>'">
	<?php wp_head(); ?>
</head>

<body class="theme-c9 c9 page-template-blank">
	<?php
	while (have_posts()) :
		the_post();
	?>

		<?php get_template_part('loop-templates/content', 'blank'); ?>

	<?php endwhile; // end of the loop.
	?>
	<?php wp_footer(); ?>
</body>

</html>
