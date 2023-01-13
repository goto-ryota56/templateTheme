<?php
/* CSS読み込み　*/
function my_styles_init()
{
  // 共通CSS読み込み
  wp_enqueue_style('reset', get_template_directory_uri() . '/assets/common/css/destyle.css');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_style('all', get_template_directory_uri() . '/assets/common/css/common.css');
}
add_action('wp_enqueue_scripts', 'my_styles_init');
