<?php
require 'callbacks.php';
// GET - BANNERS
function get_banners_routes() {
    register_rest_route('psimilenamod/v1', 'banners', array(
        'methods'  => 'GET',
        'callback' => 'api_get_banners'
    ));
}

add_action('rest_api_init', 'get_banners_routes');

// GET BANNER - id
function get_banner_routes() {
    register_rest_route('psimilenamod/v1', 'banner/(?P<slug>[-\w]+)', array(
        'methods'  => 'GET',
        'callback' => 'api_get_banner'
    ));
}
add_action('rest_api_init', 'get_banner_routes');