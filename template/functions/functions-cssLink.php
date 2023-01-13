<?php
/* CSS読み込み　*/
function my_styles_init()
{
  // 共通CSS読み込み
  wp_enqueue_style('reset', '/common/css/normalize.css');
  wp_enqueue_style('all', '/common/css/common_style.css');

  // page専用のCSS読み込み
  if (is_front_page()) {
    wp_enqueue_style('top', '/index/css/layout.css');
  }
}
add_action('wp_enqueue_scripts', 'my_styles_init');
