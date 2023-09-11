<?php
require_once TEMPLATEPATH . '/api/routes.php';

function create_banner_post() {
    register_post_type('banners', 
        array(
            'labels' => array(
                'name'          => 'Banners',
                'singular_name' => 'Banner'
            ),
            'public'      => true,
            'has_archive' => true
        )
    );
}

function create_sobre_posts() {
    register_post_type('sobre', 
        array(
            'labels' => array(
                'name'          => 'Sobre',
                'singular_name' => 'Sobre'
            ),
            'public'      => true,
            'has_archive' => true
        )
    );
}

function create_abordagem_posts() {
    register_post_type('abordagem',
        array(
            'labels' => array(
                'name'          => 'Abordagem',
                'singular_name' => 'Abordagens'
            ),
            'public'      => true,
            'has_archive' => true
        )
    );
}

function create_publico_posts() {
    register_post_type('publico-alvo',
        array(
            'labels' => array(
                'name'          => 'Público-alvo',
                'singular_name' => 'Público-alvo'
            ),
            'public'      => true,
            'has_archive' => true
        )
    );
}

// inits
add_action('init', 'create_banner_post');
add_action('init', 'create_sobre_posts');
add_action('init', 'create_abordagem_posts');
add_action('init', 'create_publico_posts');
