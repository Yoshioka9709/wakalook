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

  <meta name="description" content="ここにサイト説明を入れます">

  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">

  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css">

  <?php if(get_the_permalink() == home_url() . "/edit") { ?>

    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/edit.css?ver2">

  <?php }?>

  <link rel="icon" href="<?php bloginfo("template_url"); ?>/images/favicon.png">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CMaterial+Icons+Outlined" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>

<header>

<section id="WakaLook">

  <section id="header">

    <a href="<?php echo esc_url( home_url('/') ) ?>">

      <img src="<?php bloginfo("template_url"); ?>/images/logo.png">

    </a>

  <div class="header">

    <a href="<?php bloginfo("home_url"); ?>/edit" class="headerContent">新規作成</a>

    <a href="<?php bloginfo("home_url"); ?>/usageguide" class="headerContent">利用案内</a>

    <a href="<?php bloginfo("home_url"); ?>/contact" class="headerContent">お問い合わせ</a>

    <a href="<?php echo esc_url( home_url('/') )?>?status=logout" class="headerContent">ログアウト</a>

  </div>

  </section>

</header>