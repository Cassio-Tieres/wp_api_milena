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



// inits
add_action('init', 'create_banner_post');
add_action('init', 'create_sobre_posts');