<?php


// 画像名前_変更
function rename_mediafile($filename)
{
  $info = pathinfo($filename);
  $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
  if ($info['filename'] != 'sitemap') {
    $filename = strtolower(time() . $ext);
  }
  return $filename;
}
add_filter('sanitize_file_name', 'rename_mediafile', 10);
