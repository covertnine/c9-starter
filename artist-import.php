<?php
namespace C9Import;
// to get media-sideload image working
require_once(ABSPATH . 'wp-admin/includes/media.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/image.php');
ini_set('memory_limit', '1024M');
/**
 * REST_API Handler
 */
class ManImporter
{
    public function __construct()
    { }
    public $categories = array(
        'Band',
        'Cover Band',
        '90s',
        'Indie',
        'Jazz',
        'Country',
        'Rock',
        'DJ',
        'Magic',
        'Photography',
        'Jam Band',
        'Face Painting',
        'Funk'
    );
    public $profile_image = null;
    public $steps = array(
        array(
            'type' => 'create_user',
            'map' => array(
                'user_login' => 1,
                'user_email' => 6,
                'first_name' => 4,
                'last_name' => 5,
                'user_registered' => 8,
                'website' => 15,
            ),
        ),
        array(
            'type' => 'create_post',
            'map' => array(
                'post_content'          => 30,
                'post_title'            => 1,
                'post_excerpt'          => 31,
            ),
            'terms' => 34
        ),
        array(
            'type' => 'add_acf_meta',
            'meta' => array(
                'linked_wp_user' => [null, 'field_5c881fe0d2c81', 'user'],
                'profile_image' => [2, 'field_5c881f22d2c7e', 'image'],
                'background_images' => [[2], 'field_5c881f40d2c7f', 'gallery'],
                'talent_location_text' => [16, 'field_5c993155af669'],
                'travel_range_text' => [17, 'field_5c99316faf66a'],
                'videos' => [28, 'field_5c882b8bd1751', 'video_embed'],
                'profile_gallery' => [[2], 'field_5c882bb4d1753', 'gallery'],
                'facebook_profile' => [22, 'field_5c882be7d1754', 'facebook'],
                'twitter_profile' => [21, 'field_5c882a54d174e', 'twitter'],
                'instagram_profile' => [44, 'field_5c882c26d1756', 'instagram'],
                // 'soundcloud_profile' => [0, 'field_5c882c4dd1757'],
                // 'spotify_profile' => [0, 'field_5c882c61d1758'],
                'youtube_profile' => [23, 'field_5c882c73d1759', 'youtube'],
                // 'talent_rating' => [0, 'field_5c882a82d174f'],
                // 'talent_verified_bookings' => [0, 'field_5c882b31d1750'],
                'twitter_profile' => [21, 'field_5c882c0fd1755'],
                'talent_set_list' => [29, 'field_5c9a68b46f7a2'],
            )
        )
    );
    public function parse_facebook($url)
    {
        return preg_replace('/https?:\/\/(www\.)?facebook\.com\/(pages\/)?/', '', $url);
    }
    public function parse_twitter($url)
    {
        return preg_replace('/https?:\/\/(www\.)?twitter\.com\/@?/', '', $url);
    }
    public function parse_youtube($url)
    {
        return preg_replace('/https?:\/\/(www\.)?youtube\.com\/(user\/)?/', '', $url);
    }
    public function parse_reverb($url)
    {
        return preg_replace('/https?:\/\/(www\.)?reverbnation\.com\/(user\/)?/', '', $url);
    }
    public function parse_myspace($url)
    {
        return preg_replace('/https?:\/\/[(new\.)|(new\.)]?reverbnation\.com\/(user\/)?/', '', $url);
    }
    public function parse_iframe($url)
    {
        return preg_replace('/\<iframe.+? src="(http.+)"\>\<\/\iframe\>/', '$1', $url);
    }
    public function nicename_from_email($email)
    {
        return preg_replace('/(.+?)@(.+?)\.(.+)?/', '$1-at-$2-dot-$3', $email);
    }
    public function readCSV($csvFile)
    {
        $file_handle = fopen($csvFile, 'r');
        while (!feof($file_handle)) {
            $lines[] = fgetcsv($file_handle, 1024);
        }
        fclose($file_handle);
        return $lines;
    }
    public function run_import($data = "")
    {
        // $upload_id = $data['import_maps']['uploadedFileId'];
        $steps = $this->steps;
        $lines = $this->readCsv(get_template_directory() . "/artists.csv");
        $num_profiles = 40;
        $counter = 0;
        $lines = [$lines[128]];
        foreach ($lines as $line) {
            $counter += 1;
            if ($counter >= $num_profiles) {
                break;
            }
            foreach ($steps as $step) {
                switch ($step['type']): case 'create_post':
                        $this->profile_image = null;
                        $post_id = $this->create_post($step, $line);
                        break;
                    case 'create_user':
                        $user_id = $this->create_user($step, $line);
                        break;
                    case 'add_post_meta':
                        $this->add_meta('post', $post_id, $step, $line);
                        break;
                    case 'add_user_meta':
                        $this->add_meta('user', $post_id, $step, $line);
                        break;
                    case 'add_acf_meta':
                        $this->add_acf_meta($user_id, $post_id, $step, $line);
                        break;
                endswitch;
            }
        }
    }
    public function create_user($step, $line)
    {
        $args = array();
        $user_id = null;
        foreach ($step['map'] as $key => $value) {
            if ($key === 'user_email' && email_exists(strtolower($line[$value]))) {
                $email = strtolower($line[$value]);
                $user_id = get_user_by('email', $email);
                wp_update_user(
                    array(
                        'ID' => $user_id,
                        'user_role' => 'multi_profile_account',
                        'user_login' => $email,
                        'user_nicename' => $this->nicename_from_email($email)
                    )
                );
                break;
            }
            $args[$key] = $line[$value];
        }
        if ($user_id == null) {
            $args['role'] = 'talent_level_1';
            $user_id =  wp_insert_user(
                $args
            );
        }
        return $user_id;
    }
    public function create_post($step, $line)
    {
        $args = array();
        foreach ($step['map'] as $key => $value) {
            $args[$key] = $line[$value];
        }
        $args['post_type'] = 'profile';
        $post_id = wp_insert_post(
            $args
        );
        if (array_key_exists('terms', $step)) {
            $terms = explode(",", $line[$step['terms']]);
            foreach ($terms as $term) {
                if (strlen($term) > 25) {
                    continue;
                }
                $continue = false;
                foreach ($this->categories as $category) {
                    if (strpos(strtolower($term), strtolower($category)) != false) {
                        if (term_exists($category, 'category') == false) {
                            wp_insert_term($category, 'category');
                        }
                        wp_set_post_terms($post_id, $category, 'category');
                        $continue = true;
                        break;
                    }
                }
                if ($continue) {
                    $continue = false;
                } else {
                    wp_set_post_tags($post_id, $term);
                }
            }
        }
        return $post_id;
    }
    public function add_acf_meta($user_id, $post_id, $step, $line)
    {
        foreach ($step['meta'] as $key => $value) {
            $meta_type = array_key_exists(2, $value) ? $value[2] : 'none';
            // set initial values of meta based on index of line in CSV
            $meta_value = $meta_type === 'gallery' ? [] : $line[$value[0]];
            $old_url = 'https://www.chicagoentertainmentagency.com/';
            if ($meta_type === 'gallery') {
                foreach ($value[0] as $img_index) {
                    if ($this->profile_image !== null) {
                        $image_id = $this->profile_image;
                    } else {
                        $image_id = media_sideload_image($old_url . $line[$img_index], $post_id, '', 'id');
                        $this->profile_image = $image_id;
                    }
                    $meta_value[] = $image_id;
                }
                // $meta_value = serialize($meta_value);
                // return $meta_value;
            } else {
                switch ($meta_type): case 'image':
                        $meta_value = media_sideload_image($old_url . $line[$value[0]], $post_id, '', 'id');
                        $this->profile_image = $meta_value;
                        break;
                    case 'user':
                        $meta_value = $user_id;
                        break;
                    case 'facebook':
                        $meta_value = $this->parse_facebook($meta_value);
                        break;
                    case 'iframe':
                        $meta_value = $this->parse_iframe($meta_value);
                        break;
                    case 'twitter':
                        $meta_value = $this->parse_twitter($meta_value);
                        break;
                    case 'myspace':
                        $meta_value = $this->parse_myspace($meta_value);
                        break;
                    case 'youtube':
                        $meta_value = $this->parse_youtube($meta_value);
                        break;
                    case 'video_embed':
                        $meta_value = $this->parse_iframe($meta_value);
                        update_post_meta($post_id, $key . '_0_embed_link', $meta_value);
                        $meta_value = 1;
                        break;
                endswitch;
            }
            update_field($key, $meta_value, $post_id);
            // acf-specific meta thing
            // update_post_meta($post_id, '_' . $key, $value[1]);
        }
    }
    /**
     * Grab latest post title by an author!
     *
     * @param array $data Options for the function.
     * @return string|null Post title for the latest, or null if none.
     */
    public function get_csv($data)
    {
        get_attached_file($data['id']);
    }
}
// $man_importer = new ManImporter;
// $man_importer->run_import();