<?php

/**
 *  WordPress標準機能
 */
require_once get_template_directory() . '/inc/allSetting.php';

/**
 * 管理画面設定
 */
require_once get_template_directory() . '/inc/adminSetting.php';

/**
 * CSS読み込み
 */
require_once get_template_directory() . '/inc/cssLink.php';

/**
 * JavaScript読み込み
 */
require_once get_template_directory() . '/inc/scriptLink.php';


/**
 * パンくず
 */
require_once get_template_directory() . '/inc/breadcrumb.php';

/**
 * パンくずリストの「ホーム」テキストの書き換え
 *
 * @param string $home 書き換え前のホーム.
 * @return string $home 書き換え後のホーム.
 */
function my_breadcrumb_home_change($home)
{
  return 'Home';
}
add_filter('my_breadcrumb_home', 'my_breadcrumb_home_change');

/**
 * パンくずリストの区切り文字の書き換え
 *
 * @param string $bridge 書き換え前の区切り文字.
 * @return string $bridge 書き換え後の区切り文字.
 */
function my_breadcrumb_bridge_change($bridge)
{
  return $bridge;
}
add_filter('my_breadcrumb_bridge', 'my_breadcrumb_bridge_change');

/**
 * パンくずリストのタイトルの書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_breadcrumb_title_change($title)
{
  if (is_home()) {
    $title = 'ブログ';
  }
  return $title;
}
add_filter('my_breadcrumb_title', 'my_breadcrumb_title_change');


/**
 * アーカイブタイトル書き換え
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title($title)
{

  if (is_home()) { /* ホームの場合 */
    $title = '';
  } elseif (is_category()) { /* カテゴリーアーカイブの場合 */
    $title = '' . single_cat_title('', false) . '';
  } elseif (is_tag()) { /* タグアーカイブの場合 */
    $title = '' . single_tag_title('', false) . '';
  } elseif (is_post_type_archive()) { /* 投稿タイプのアーカイブの場合 */
    $title = '' . post_type_archive_title('', false) . '';
  } elseif (is_tax()) { /* タームアーカイブの場合 */
    $title = '' . single_term_title('', false);
  } elseif (is_search()) { /* 検索結果アーカイブの場合 */
    $title = '「' . esc_html(get_query_var('s')) . '」の検索結果';
  } elseif (is_author()) { /* 作者アーカイブの場合 */
    $title = '' . get_the_author() . '';
  } elseif (is_date()) { /* 日付アーカイブの場合 */
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');
