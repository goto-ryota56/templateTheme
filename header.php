<!DOCTYPE html>
<html>

<head <?php ogp_prefix(); ?>>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="email=no,telephone=no,address=no" />
  <link rel="icon" href="/favicon.ico" />
  <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png" />
  <?php wp_head(); ?>
</head>

<body>
  <div id="wrapper">
    <?php get_template_part('template-parts/header/header', 'nav');  ?>