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

add_action('init', 'create_banner_post');