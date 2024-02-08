<?php
/**
* Plugin Name: IWS Custom Code
* Plugin URI: https://www.your-site.com/
* Description: Add custom code.
* Version: 0.1
* Author: Jenish kotiya
* Author URI: https://www.your-site.com/
**/

remove_filter('the_excerpt', 'wpautop');
remove_filter('the_content', 'wpautop');

function iwsGetFeaturedImgSrc($obj, $fieldName, $request) {
    if ($obj['featured_media']) {
        $img = wp_get_attachment_image_src($obj['featured_media'], 'full');
        return $img[0];
    }
    return false;
}

add_action('rest_api_init', function () {
    register_rest_field('post', 'featured_src', [
        'get_callback' => 'iwsGetFeaturedImgSrc',
    ]);
});