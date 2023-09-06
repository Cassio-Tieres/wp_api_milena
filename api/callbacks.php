<?php
// callback BANNERS
function api_get_banners() {
    $posts = array();
    $argsBanners = array(
        'post_type'     => 'banners',
        'post_per_page' => -1
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
// callback BANNER
function api_get_banner($request) {
    $slug_banner = sanitize_text_field($request->get_param('slug'));

    $banner = array(
        'slug' => $slug_banner
    );

    return rest_ensure_response($banner);
}