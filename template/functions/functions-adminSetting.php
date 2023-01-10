<?php

/* 左メニューバー該当メニュー削除 */
function remove_menus()
{
  global $menu;

  remove_menu_page('edit-comments.php'); // コメントメニュー


}
add_action('admin_menu', 'remove_menus', 99);

/* wp管理画面ヘッドバー 該当ボタン削除*/
function remove_wp_nodes()
{
  global $wp_admin_bar; // 上部ツールバーのグローバル変数

  $wp_admin_bar->remove_node('comments'); // コメント
  $wp_admin_bar->remove_node('new-content'); // 新規投稿ボタン

}
add_action('admin_bar_menu', 'remove_wp_nodes', 99);
