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


// GET SOBRE
function get_sobre_routes() {
    register_rest_route('psimilenamod/v1', 'sobre', array(
            'methods'  => 'GET',
            'callback' => 'api_get_sobre'
    ));
}
add_action('rest_api_init', 'get_sobre_routes');

// GET ABORDAGEM
function get_abordagem_routes() {
    register_rest_route('psimilenamod/v1', 'abordagem', array(
        'methods'  => 'GET',
        'callback' => 'api_get_abordagem'
    ));
}
add_action('rest_api_init', 'get_abordagem_routes');
