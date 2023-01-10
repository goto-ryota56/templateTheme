# Wordpress テンプレートテーマファイル

## 概要

各 Wordpress 案件をこちらのテーマを用いて統一しています。<br>
クラシックエディターを前提で作成しています。<br>

### 使用言語

- HTML
- CSS (SCSS)
- JavaScript (jQuery)
- PHP

### 使用技術

- Gulp 　<small>※node_module 参照</small>

<br>
<br>

## ディレクトリー階層

<pre>
・
┣━━━━ assets
┃ ┣━━━━ /css/
┃    ┗━━━━ / (例：common) / …… 各ページごとのcssファイルが格納されている
┃ ┣━━━━ /js/
┃    ┗━━━━ / (例：work) / …… 各ページごとのjsファイルが格納されている　※jQueryファイルはデフォルトで読み込まれるため不要
┃ ┗━━━━ /img/
┃    ┗━━━━ / (例：about) / …… 各ページごとのimgファイルが下部の【slice_img】フォルダーから出力される
┃
┣━━━━ template
┃ ┣━━━━ /functions/ …… functions.phpの部品別ファイル群【例：functions-●●●.php】
┃ ┣━━━━ /header/ …… headの部品別ファイル群【例：head-●●●.php】
┃ ┣━━━━ /footer/ …… footer.phpの部品別ファイル群【例：footer-●●●.php】
┃ ┗━━━━ /page/ …… 個別page内の部品ファイル群【例：page-●●●.php】
┃
┣━━━━ functions.php …… テーマ全体に適用する設定ファイル
┃
┣━━ index.php
┣━━ header.php
┣━━ footer.php
┃
┣━━ front-page.php
┣━━ single.php
┣━━ 404.php
┃
┗━━ README.md
</pre>
