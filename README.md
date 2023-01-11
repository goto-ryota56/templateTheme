# Wordpress テンプレートテーマファイル

## 概要

WordPress 案件をこちらのテーマを用いて統一しています。<br>
クラシックエディターを前提で作成しています。<br>

### 使用言語

- HTML
- CSS (SCSS)
- JavaScript (jQuery)
- PHP

### 使用技術

- Gulp 　<small>※package.json 参照</small>
- Node 　 ver 14.15.5
  <br>
  <br>

## ディレクトリー階層

<pre>
・
┣━━━━ assets
┃ ┣━━━━ /各ページdir/
┃ ┃  ┗━━━━ / img / …… 各ページごとのimgファイルが下部の【slice_img】フォルダーから出力される
┃ ┃  ┗━━━━ / css / …… 各ページごとのcssファイルが格納されている
┃ ┃  ┗━━━━ / js /  …… 各ページごとのjsファイルが格納されている
┃ ┃
┃ ┗━━━━ /common/
┃    ┗━━━━ / img / …… 各ページごとのimgファイルが下部の【slice_img】フォルダーから出力される
┃    ┗━━━━ / css / …… 全体共通のcssファイルが格納されている
┃    ┗━━━━ / js /  …… 全体共通のjsファイルが格納されている
┃
┣━━━━ template
┃ ┣━━━━ /functions/ …… functions.phpの部品別ファイル群  【例：functions-●●●.php】
┃ ┣━━━━ /header/    …… headの部品別ファイル群           【例：head-●●●.php】
┃ ┣━━━━ /footer/    …… footer.phpの部品別ファイル群     【例：footer-●●●.php】
┃ ┗━━━━ /page/      …… 個別page内の部品ファイル群       【例：page-●●●.php】
┃
┣━━━━ functions.php  …… テーマ全体に適用する設定ファイル
┃
┣━━ index.php  …… 基本テンプレートファイル      <small>※テーマ作成時必須</small>
┣━━ header.php …… header用テンプレートファイル  <small>※テーマ作成時必須</small>
┣━━ footer.php …… footer用テンプレートファイル  <small>※テーマ作成時必須</small>
┃
┣━━ front-page.php ……  TOPページ用テンプレートファイル
┣━━ single.php     ……  個別投稿ページ用テンプレートファイル
┣━━ 404.php        ……  404ページ用テンプレートファイル
┃
┗━━ README.md
</pre>
