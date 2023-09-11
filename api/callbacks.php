<?php
// callback BANNERS
function api_get_banners() {
    $posts = array();
    $argsBanners = array(
        'post_type'     => 'banners',
        'post_per_page' => 1
    );

    $loopB = new WP_Query($argsBanners);

    while ($loopB->have_posts()){
        $loopB->the_post();

        $id_banner = get_the_ID();
        $slug_banner = get_post_field('post_name', $id_banner);
        $titulo_banner = get_the_title();
        $imgUrl = get_field('imagem_banner', $id_banner);


        $post = array(
            'id'     => $id_banner,
            'slug'   => $slug_banner,
            'titulo' => $titulo_banner,
            'imgUrl' => $imgUrl
        );

        $posts[$slug_banner] = $post;
    }

    return rest_ensure_response($posts);
}

// CALLBACK SOBRE
function api_get_sobre() {
    $posts = array();
    $argsSobre = array(
        'post_type'     => 'sobre',
        'post_per_page' => 1
    );
    $loopS = new WP_Query($argsSobre);

    while ($loopS->have_posts()){
        $loopS->the_post();

        $id_sobre = get_the_ID();
        $slug_sobre = get_post_field('post_name', $id_sobre);
        $titulo_sobre = get_the_title();
        $texto_sobre = get_field('texto_sobre', $id_sobre);
        $imgUrl = get_field('imagem_sobre', $id_sobre);


        $post = array(
            'id'     => $id_sobre,
            'slug'   => $slug_sobre,
            'titulo' => $titulo_sobre,
            'texto'  => $texto_sobre,
            'imgUrl' => $imgUrl
        );

        $posts[$slug_sobre] = $post;
    }

    return rest_ensure_response($posts);
}

// CALLBACK ABORDAGEM
function api_get_abordagem() {
    $posts = array();
    $argsAbordagem = array(
        'post_type'     => 'abordagem',
        'post_per_page' => 1
    );

    $loopA = new WP_Query($argsAbordagem);

    while ($loopA->have_posts()){
        $loopA->the_post();

        $id_abordagem = get_the_ID();
        $slug_abordagem = get_post_field('post_name', $id_abordagem);
        $titulo_abordagem = get_the_title();
        $texto_abordagem = get_the_content();


        $post = array(
            'id_abordagem'     => $id_abordagem,
            'slug_abordagem'   => $slug_abordagem,
            'titulo_abordagem' => $titulo_abordagem,
            'texto_abordagem'  => $texto_abordagem
        );

        $posts[$slug_abordagem] = $post;
    }

    return rest_ensure_response($posts);
}