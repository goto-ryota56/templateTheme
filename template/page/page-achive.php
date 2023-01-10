<?php

/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
});

/* カスタム投稿タイプ 独自URL設定 */
function custom_post_type_link($link, $post)
{
  if ($post->post_type === 'works') {
    return home_url('/works/' . $post->ID);
  } else if ($post->post_type === 'news') {
    return home_url('/news/' . $post->ID);
  } else if ($post->post_type === 'column') {
    return home_url('/column/' . $post->ID);
  } else {
    return $link;
  }
}
add_filter('post_type_link', 'custom_post_type_link', 1, 2);

function custom_rewrite_rules_array($rules)
{
  $new_rewrite_rules = array(
    'works/([0-9]+)/?$' => 'index.php?post_type=works&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'custom_rewrite_rules_array');


// カスタム投稿タイプ 投稿画面設定
add_action(
  'init',
  function () {
    remove_post_type_support('works', 'editor');
  },
  99
);
