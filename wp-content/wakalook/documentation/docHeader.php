<?php

if (session_status() == PHP_SESSION_NONE) {
  // セッションは有効で、開始していないとき
  session_start();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WakaLook<?php global $title; echo $title;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="WakaLookのドキュメントページです。">
  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/docStyle.css">
  <script type="text/x-mathjax-config">
    MathJax = {
        loader: {load: ['[tex]/colorv2', '[tex]/physics']}
        tex: {
            inlineMath: [['$', '$'], ['\\(', '\\)']]
            packages: {
                '[+]': ['colorv2', 'physics'],
                '[-]': ['color', 'bracket']
            }
        }
    };
  </script>
  <script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg-full.js">
  </script>
  <link rel="icon" href="<?php bloginfo("template_url"); ?>/images/favicon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CMaterial+Icons+Outlined" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
<header>
  <section id="only">
    <a href="<?php echo esc_url( home_url('/') ) ?>">
      <img src="<?php bloginfo("template_url"); ?>/images/logo.png">
    </a>
    <section id="header">
      <div class="header">
        <a href="<?php echo esc_url( home_url('/') )?>" class="headerContent">ワカルックのトップページ</a>
        <a href="<?php bloginfo("home_url"); ?>/documentation" class="headerContent">ドキュメントのトップページ</a>
        <a href="<?php bloginfo("home_url"); ?>/contact" class="headerContent">お問い合わせ</a>
      </div>
    </section>
  </section>
  <section id="WakaLook">
    <section id="header">
      <a href="<?php echo esc_url( home_url('/') ) ?>">
        <img src="<?php bloginfo("template_url"); ?>/images/logo.png">
      </a>
      <div class="header">
        <a href="<?php echo esc_url( home_url('/') )?>" class="headerContent">ワカルックのトップページ</a>
        <a href="<?php bloginfo("home_url"); ?>/documentation" class="headerContent">ドキュメントのトップページ</a>
        <a href="<?php bloginfo("home_url"); ?>/contact" class="headerContent">お問い合わせ</a>
      </div>
    </section>
  </section>
</header>
