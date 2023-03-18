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

add_theme_support('post-thumbnails');
