<?php
//ファイルの読み込みに関する記述をまとめた関数
function custom_enqueue()
{
  wp_enqueue_style(
    'my_style',
    plugins_url(get_template_directory_uri() . '/css/style.css'),
  );
  wp_enqueue_style('child-style', get_template_directory_uri() . '/css/style.css?' . date("ymdHis", filemtime(get_template_directory() . '/css/style.css')), array('my_style'));

  wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', false, true);
}

//上記のファイルの読み込みに関する記述をまとめた関数を、「wp_enqueue_scripts」アクションにフックさせる。
add_action('wp_enqueue_scripts', 'custom_enqueue');
