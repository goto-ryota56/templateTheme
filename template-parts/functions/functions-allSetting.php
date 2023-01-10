<?php
/* headタグ内 不要タグ削除 */
function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support('html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

  // RSSフィード削除
  remove_action('do_feed_rdf', 'do_feed_rdf');
  remove_action('do_feed_rss', 'do_feed_rss');
  remove_action('do_feed_rss2', 'do_feed_rss2');
  remove_action('do_feed_atom', 'do_feed_atom');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);

  /* テキストエディタの絵文字に対応する為の各種出力を排除する */
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');

  /* wlwmanifestの出力を排除する */
  remove_action('wp_head', 'wlwmanifest_link');

  /* 外部ブログツールからの投稿を行う為の出力を排除する */
  remove_action('wp_head', 'rsd_link');

  /* 短縮URLの出力を排除する */
  remove_action('wp_head', 'wp_shortlink_wp_head');

  /* DNS Prefetchingの出力を排除する */
  remove_action('wp_head', 'wp_resource_hints', 2);

  /* WordPressのバージョン出力を排除する */
  remove_action('wp_head', 'wp_generator');
}
add_action('after_setup_theme', 'my_setup');

/* JS, CSS要素のバージョン出力を排除する */
function remove_cssjs_ver2($src)
{
  if (strpos($src, 'ver='))
    $src = remove_query_arg('ver', $src);
  return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver2', 9999);
add_filter('script_loader_src', 'remove_cssjs_ver2', 9999);

/* ブロックエディタ（Gutenberg）用CSSの出力を排除する */
function remove_editor_style()
{
  wp_dequeue_style('wp-block-library');
}

/* headタグ 最適化 */
function ogp_prefix()
{
  if (!is_admin()) {
    $ogp_ns = 'og: https://ogp.me/ns#';
    $fb_ns = 'fb: https://ogp.me/ns/fb#';

    if (!is_singular()) {
      $type_ns = 'website: https://ogp.me/ns/website#';
    } else {
      $type_ns = 'article: https://ogp.me/ns/article#';
    }
    printf('prefix="%1$s %2$s %3$s"', $ogp_ns, $fb_ns, $type_ns);
  }
}


// WordPress バージョンアップ修正

/* v5.9 追加項目削除 */
add_action('wp_enqueue_scripts', 'remove_my_global_styles');
function remove_my_global_styles()
{
  wp_dequeue_style('global-styles');
}

/* v6.1 追加項目削除 */
add_action('wp_enqueue_scripts', 'remove_classic_theme_style');
function remove_classic_theme_style()
{
  wp_dequeue_style('classic-theme-styles');
}
