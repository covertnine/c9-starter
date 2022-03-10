<?php
if (!class_exists('c9FooterHelpers')) {
	/**
	 * WP_Bootstrap_Navwalker class.
	 *
	 * @extends Walker_Nav_Menu
	 */
	class c9FooterHelpers
	{

		public static function build_c9_social()
		{
			$social_links   = array();
			// $social_options = get_theme_mod( 'c9_show_social' ) !== 'hide' ? get_theme_mod( 'c9_show_social' ) : false;
			$social_options = get_theme_mod('c9_show_social', 'show');
			if ($social_options != 'hide') {
				$social_options_selected = array(
					'c9_instagram' 		=> get_theme_mod('c9_instagram', ''),
					'c9_twitter' 		=> get_theme_mod('c9_twitter', ''),
					'c9_pinterest' 		=> get_theme_mod('c9_pinterest', ''),
					'c9_spotify' 		=> get_theme_mod('c9_spotify', ''),
					'c9_youtube' 		=> get_theme_mod('c9_youtube', ''),
					'c9_yelp' 			=> get_theme_mod('c9_yelp', ''),
					'c9_subreddit' 		=> get_theme_mod('c9_subreddit', ''),
					'c9_linkedin' 		=> get_theme_mod('c9_linkedin', ''),
					'c9_github' 		=> get_theme_mod('c9_github', ''),
					'c9_soundcloud' 	=> get_theme_mod('c9_soundcloud', ''),
					'c9_tiktok' 		=> get_theme_mod('c9_tiktok', ''),
					'c9_facebook' 		=> get_theme_mod('c9_facebook', ''),
				);
				foreach ($social_options_selected as $opt_key => $opt_value) {
					$link_builder = 'build_' . $opt_key . '_link';
					if ('' !== $opt_key && '' !== $opt_value) {
						if (filter_var($opt_value, FILTER_VALIDATE_URL)) {
							$social_links[$opt_key] = self::$link_builder(sanitize_text_field(esc_url($opt_value)), 'url');
						} else {
							$social_links[$opt_key] = self::$link_builder(sanitize_text_field(esc_attr($opt_value)), 'username');
						}
					}
				}
				return $social_links;
			} else {
				return false;
			}
		}


		public static function build_c9_instagram_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-instagram"></i><span class="sr-only">' . __('Instagram', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//instagram.com/' . $input . '" target="_blank"><i class="fab fa-instagram"></i><span class="sr-only">' . __('Instagram', 'c9-starter') . '</span></a>';
			}
			return $link;
		}
		public static function build_c9_twitter_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">' . __('Twitter', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//twitter.com/' . $input . '" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">' . __('Twitter', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_facebook_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">' . __('Facebook', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//facebook.com/' . $input . '" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">' . __('Facebook', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_pinterest_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-pinterest"></i><span class="sr-only">' . __('Pinterest', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//pinterest.com/' . $input . '" target="_blank"><i class="fab fa-pinterest"></i><span class="sr-only">' . __('Pinterest', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_spotify_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-spotify"></i><span class="sr-only">' . __('Spotify', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//open.spotify.com/' . $input . '" target="_blank"><i class="fab fa-spotify"></i><span class="sr-only">' . __('Spotify', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_youtube_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-youtube"></i><span class="sr-only">' . __('YouTube', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//youtube.com/' . $input . '" target="_blank"><i class="fab fa-youtube"></i><span class="sr-only">' . __('YouTube', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_tiktok_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank" class="footer-tiktok"><span class="sr-only">' . __('TikTok', 'c9-starter') . '</span><svg width="24" height="24" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z" /></svg></a>';
			} else {
				$link = '<a href="//tiktok.com/' . $input . '" target="_blank" class="footer-tiktok"><span class="sr-only">' . __('TikTok', 'c9-starter') . '</span><svg width="24" height="24" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z" /></svg></a>';
			}
			return $link;
		}

		public static function build_c9_flickr_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-flickr"></i><span class="sr-only">' . __('Flickr', 'c9-starter') . '</span></a';
			} else {
				$link = '<a href="//flickr.com/' . $input . '" target="_blank"><i class="fab fa-flickr"></i><span class="sr-only">' . __('Flickr', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_tumblr_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-tumblr"></i><span class="sr-only">' . __('Tumblr', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//' . $input . '.tumblr.com" target="_blank"><i class="fab fa-tumblr"></i><span class="sr-only">' . __('Tumblr', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_yelp_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-yelp"></i><span class="sr-only">' . __('Yelp', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//yelp.com/biz/' . $input . '" target="_blank"><i class="fab fa-yelp"></i><span class="sr-only">' . __('Yelp', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_subreddit_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-reddit"></i><span class="sr-only">' . __('Reddit', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//reddit.com/r/' . $input . '" target="_blank"><i class="fab fa-reddit"></i><span class="sr-only">' . __('Reddit', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_linkedin_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-linkedin"></i><span class="sr-only">' . __('LinkedIn', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//linkedin.com/in/' . $input . '" target="_blank"><i class="fab fa-linkedin"></i><span class="sr-only">' . __('LinkedIn', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_github_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-github"></i><span class="sr-only">' . __('GitHub', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//github.com/' . $input . '" target="_blank"><i class="fab fa-github"></i><span class="sr-only">' . __('GitHub', 'c9-starter') . '</span></a>';
			}
			return $link;
		}

		public static function build_c9_soundcloud_link($input, $type)
		{
			if ('url' === $type) {
				$link = '<a href="' . $input . '" target="_blank"><i class="fab fa-soundcloud"></i><span class="sr-only">' . __('SoundCloud', 'c9-starter') . '</span></a>';
			} else {
				$link = '<a href="//soundcloud.com/' . $input . '" target="_blank"><i class="fab fa-soundcloud"></i><span class="sr-only">' . __('SoundCloud', 'c9-starter') . '</span></a>';
			}
			return $link;
		}
	}
}
