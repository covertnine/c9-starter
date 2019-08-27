<?php
if (!class_exists('c9FooterHelpers')) {
    /**
     * WP_Bootstrap_Navwalker class.
     *
     * @extends Walker_Nav_Menu
     */
    class c9FooterHelpers
    {
        public static function build_social()
        {
            $social_links = array();
            $social_options = get_option('cortex_social') !== null ? get_option('cortex_social') : false;
            if ($social_options) {
                foreach ($social_options as $opt_key => $opt_value) {
                    $link_builder = 'build_' . $opt_key . '_link';
                    if ($opt_key !== 'fixed_social_links') {
                        $social_links[$opt_key] = self::$link_builder($opt_value);
                    }
                }
                return $social_links;
            } else {
                return false;
            }
        }
        public static function build_twitter_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(twitter\.com\/)?(.+)/';
            $replacement = '<a href="//twitter.com/${4}" target="_blank"><i class="fab fa-twitter"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_facebook_link($input)
        {
            $pattern = '/(https|http)?(:\/\/)?(facebook\.com\/)?(.+)/';
            $replacement = '<a href="//facebook.com/${4}" target="_blank"><i class="fab fa-facebook"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_instagram_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(instagram\.com\/)?(.+)/';
            $replacement = '<a href="//instagram.com/${4}" target="_blank"><i class="fab fa-instagram"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_pinterest_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(pinterest\.com\/)?(.+)/';
            $replacement = '<a href="//pinterest.com/${4}" target="_blank"><i class="fab fa-pinterest"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_spotify_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(open)?(spotify\.com\/)?(.+)/';
            $replacement = '<a href="//open.spotify.com/${5}" target="_blank"><i class="fab fa-spotify"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_youtube_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(youtube\.com\/)?(.+)/';
            $replacement = '<a href="//youtube.com/${4}" target="_blank"><i class="fab fa-youtube"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_flickr_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(flickr\.com\/)?(.+)/';
            $replacement = '<a href="//flickr.com/${4}" target="_blank"><i class="fab fa-flickr"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_tumblr_link($input)
        {
            // $pattern = '/(https|http)?(:\/\/)?(.+?)\.(tumblr\.com\/)?/';
            $link = '<a href="//' . $input . '.tumblr.com" target="_blank"><i class="fab fa-tumblr"></i></a>';
            // $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_yelp_link($input)
        {
            $pattern = '/(https|http)?(:\/\/)?(yelp\.com\/)?(.+)/';
            $replacement = '<a href="//yelp.com/biz/${4}" target="_blank"><i class="fab fa-yelp"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_subreddit_link($input)
        {
            $pattern = '/(https|http)?(:\/\/)?(www\.)?(reddit\.com\/r\/)?(.+)/';
            $replacement = '<a href="//reddit.com/r/${5}" target="_blank"><i class="fab fa-reddit"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_linkedin_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(linkedin\.com\/)?(.+)/';
            $replacement = '<a href="//linkedin.com/in/${4}" target="_blank"><i class="fab fa-linkedin"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_github_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(github\.com\/)?(.+)/';
            $replacement = '<a href="//github.com/${4}" target="_blank"><i class="fab fa-github"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_soundcloud_link($input)
        {
            $pattern = '/@?(https|http)?(:\/\/)?(soundcloud\.com\/)?(.+)/';
            $replacement = '<a href="//soundcloud.com/${4}" target="_blank"><i class="fab fa-soundcloud"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
    }
}
