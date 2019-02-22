<?php
/*
 * Template for the output of the Cortex Subscribe Widget
 * Override by placing a file called widget-subscribe-template.php in your active theme in a directory called widgets
 */

/* Output
	link
*/
$icon_type = $instance['icon_type'];

echo $args['before_widget'];
echo $args['before_title'] . $instance['title_text'] .  $args['after_title'];

echo '
	<ul>';
if ( !empty( $instance['icon_facebook'] ) ) {
	echo '<li><a href="' . $instance['icon_facebook'] . '" target="_blank" title="Facebook" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i><span class="sr-only">Facebook</span></a></li>';
}
if ( !empty( $instance['icon_twitter'] ) ) {
	echo '<li><a href="' . $instance['icon_twitter'] . '" target="_blank" title="Twitter" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i><span class="sr-only">Twitter</span></a></li>';
}
if ( !empty( $instance['icon_instagram'] ) ) {
	echo '<li><a href="' . $instance['icon_instagram'] . '" target="_blank" title="Instagram" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a></li>';
}
if ( !empty( $instance['icon_flickr'] ) ) {
	echo '<li><a href="' . $instance['icon_flickr'] . '" target="_blank" title="Flickr" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-flickr"></i><span class="sr-only">Flickr</span></a></li>';
}
if ( !empty( $instance['icon_googleplus'] ) ) {
	echo '<li><a href="' . $instance['icon_googleplus'] . '" target="_blank" title="Google+" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-google-plus-g"></i><span class="sr-only">Google+</span></a></li>';
}
if ( !empty( $instance['icon_email'] ) ) {
	echo '<li><a href="' . $instance['icon_email'] . '" target="_blank" title="Email" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-envelope"></i><span class="sr-only">Email Newsletter</span></a></li>';
}
if ( !empty( $instance['icon_youtube'] ) ) {
	echo '<li><a href="' . $instance['icon_youtube'] . '" target="_blank" title="YouTube" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-youtube"></i><span class="sr-only">Youtube</span></a></li>';
}
if ( !empty( $instance['icon_tumblr'] ) ) {
	echo '<li><a href="' . $instance['icon_tumblr'] . '" target="_blank" title="Tumblr" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-tumblr"></i><span class="sr-only">Tumblr</span></a></li>';
}
if ( !empty( $instance['icon_yelp'] ) ) {
	echo '<li><a href="' . $instance['icon_yelp'] . '" target="_blank" title="Yelp" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-yelp"></i><span class="sr-only">Yelp</span></a></li>';
}
if ( !empty( $instance['icon_lastfm'] ) ) {
	echo '<li><a href="' . $instance['icon_lastfm'] . '" target="_blank" title="Last.fm" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-lastfm"></i><span class="sr-only">Last.fm</span></a></li>';
}
if ( !empty( $instance['icon_pinterest'] ) ) {
	echo '<li><a href="' . $instance['icon_pinterest'] . '" target="_blank" title="Pinterest" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-pinterest"></i><span class="sr-only">Pinterest</span></a></li>';
}
if ( !empty( $instance['icon_reddit'] ) ) {
	echo '<li><a href="' . $instance['icon_reddit'] . '" target="_blank" title="Reddit" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-reddit"></i><span class="sr-only">Reddit</span></a></li>';
}
if ( !empty( $instance['icon_linkedin'] ) ) {
	echo '<li><a href="' . $instance['icon_linkedin'] . '" target="_blank" title="Linkedin" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-linkedin"></i><span class="sr-only">LinkedIn</span></a></li>';
}
if ( !empty( $instance['icon_map'] ) ) {
	echo '<li><a href="' . $instance['icon_map'] . '" target="_blank" title="Google Maps" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-map-marker-alt"></i><span class="sr-only">Google Map</span></a></li>';
}
if ( !empty( $instance['icon_github'] ) ) {
	echo '<li><a href="' . $instance['icon_github'] . '" target="_blank" title="Git Hub" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-github"></i><span class="sr-only">Git Hub</span></a></li>';
}
if ( !empty( $instance['icon_soundcloud'] ) ) {
	echo '<li><a href="' . $instance['icon_soundcloud'] . '" target="_blank" title="SoundCloud" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-soundcloud"></i><span class="sr-only">Sound Cloud</span></a></li>';
}
if ( !empty( $instance['icon_deviantart'] ) ) {
	echo '<li><a href="' . $instance['icon_deviantart'] . '" target="_blank" title="Deviant Art" class="icon-subscribe d-flex align-items-center justify-content-center"><i class="fab fa-deviantart"></i><span class="sr-only">Deviant Art</span></a></li>';
}
echo '</ul>
	</aside>';
?>