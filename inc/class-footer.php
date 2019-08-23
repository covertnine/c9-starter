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
            $pattern = '/(https|http)?(:\/\/)?(twitter\.com\/)?(.+)/';
            $replacement = '<a href="https://twitter.com/${4}" target="_blank"><i class="fab fa-twitter"></i></a>';
            $link = preg_replace($pattern, $replacement, $input);
            return $link;
        }
        public static function build_facebook_link($input)
        {
            return '<a href="https://facebook.com/' . $input . '" target="_blank"><i class="fab fa-facebook"></i></a>';
        }
        public static function build_instagram_link($input)
        {
            return '<a href="https://instagram.com/' . $input . '" target="_blank"><i class="fab fa-instagram"></i></a>';
        }
        public static function build_pinterest_link($input)
        {
            return '<a href="https://pinterest.com/' . $input . '" target="_blank"><i class="fab fa-pinterest"></i></a>';
        }
        public static function build_spotify_link($input)
        {
            return '<a href="https://spotify.com/' . $input . '" target="_blank"><i class="fab fa-spotify"></i></a>';
        }
        public static function build_youtube_link($input)
        {
            return '<a href="https://youtube.com/' . $input . '" target="_blank"><i class="fab fa-youtube"></i></a>';
        }
        public static function build_flickr_link($input)
        {
            return '<a href="https://flickr.com/' . $input . '" target="_blank"><i class="fab fa-flickr"></i></a>';
        }
        public static function build_tumblr_link($input)
        {
            return '<a href="https://tumblr.com/' . $input . '" target="_blank"><i class="fab fa-tumblr"></i></a>';
        }
        public static function build_yelp_link($input)
        {
            return '<a href="https://yelp.com/' . $input . '" target="_blank"><i class="fab fa-yelp"></i></a>';
        }
        public static function build_subreddit_link($input)
        {
            return '<a href="https://reddit.com/r/' . $input . '" target="_blank"><i class="fab fa-reddit"></i></a>';
        }
        public static function build_linkedin_link($input)
        {
            return '<a href="https://linkedin.com/' . $input . '" target="_blank"><i class="fab fa-linkedin"></i></a>';
        }
        public static function build_github_link($input)
        {
            return '<a href="https://github.com/' . $input . '" target="_blank"><i class="fab fa-github"></i></a>';
        }
        public static function build_soundcloud_link($input)
        {
            return '<a href="https://soundcloud.com/' . $input . '" target="_blank"><i class="fab fa-soundcloud"></i></a>';
        }
    }
}
