<?php
//スタイル、スクリプトの読み込み
function load_my_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . 'src/css/style.css');
    wp_enqueue_style('reset', "//unpkg.com/ress/dist/ress.min.css", array('style'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . 'src/js/index.js', 'jquery');
    wp_enqueue_script('inview', '//cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'load_my_styles');

//カスタム投稿タイプ
function create_post_type()
{
    register_post_type('requirements', [
        'labels' => [
            'name' => '募集要項',
            'singular_name' => 'requirements',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ]);
    register_taxonomy(
        'requirements-category',
        'requirements',
        array(
            'hierarchical' => true,
            'update_count_callback' => '_update_post_term_count',
            'label' => '募集要項カテゴリー',
            'singular_label' => '募集要項カテゴリー',
            'public' => true,
            'show_ui' => true,
        )
    );
}
add_action('init', 'create_post_type');


add_theme_support('post-thumbnails');
