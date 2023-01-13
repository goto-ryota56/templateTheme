<?php

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
