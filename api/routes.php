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

// GET PUBLICO-ALVO
function get_publico_alvo_routes() {
    register_rest_route('psimilenamod/v1', 'publico-alvo', array(
        'methods' => 'GET',
        'callback' => 'api_get_publico_alvo'
    ));
}
add_action('rest_api_init', 'get_publico_alvo_routes');

// GET POSTS
function get_posts_routes() {
    register_rest_route('psimilenamod/v1', 'posts', array(
        'methods' => 'GET',
        'callback' => 'api_get_posts'
    ));
}
add_action('rest_api_init', 'get_posts_routes');