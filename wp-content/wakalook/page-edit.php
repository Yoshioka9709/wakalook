<?php



session_start();

require_once(dirname( __FILE__ ) . "/db/ManagementLogic.php");



if(!isset($_SESSION['login_user'])) {

  header('Location: ' . home_url());

  exit();

}



if(isset($_GET['id'])) {

  $images = ManagementLogic::getImagesByPostId($_GET['id']);

  $imagePost = ManagementLogic::getPostById($_GET['id']);

  if(!$imagePost) {

    header('Location: . home_url()');

    exit();

  }

  if(isset($imagePost['autopwd'])) {

    if(!isset($_GET['autopwd'])) {

      header('Location: ' . home_url());

      exit();

    }

    if($imagePost['autopwd'] != $_GET['autopwd']){

      header(('Location: ' . home_url()));

      exit();

    }

  }

}



?>



<!DOCTYPE html>

<html lang="ja">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>WakaLook-編集画面</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="ここにサイト説明を入れます">

<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">

<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style2.css?ver4">

<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/edit.css?ver4">

<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/formulaStyle.css">

<link rel="icon" href="<?php bloginfo("template_url"); ?>/images/favicon.png">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/colorjoe@4.1.1/css/colorjoe.min.css"/>

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

</head>

<body>

  <section id="only">

    このサイズでは表示できません。<br>
    画面の幅を拡げてください。

  </section>

<section id="WakaLook">

<header>

<section id="main">

<div id="logo-button" class="logo-img-wrapper edit-btn" onclick="goToTopPage(<?php echo $_SESSION['login_user']['id'];?>)">

  <img src="<?php bloginfo("template_url"); ?>/images/logo.png">

  <span id="setsumei_logo" class="setsumei">マイページに戻ります</span>

</div>

<div class="headerTabs">

  <input id="headTabBasic" type="radio" name="head_tab_item" checked>

  <label class="head_tab_item" for="headTabBasic">基本ツール</label>

  <input id="headTabInsert" type="radio" name="head_tab_item">

  <label class="head_tab_item" for="headTabInsert">コンテンツ挿入</label>



  <!-- 基本要素 -->

  <div class="head_tab_content" id="head_basic_content">

    <div id="plus-button" class="edit-btn">

      <img src="<?php bloginfo("template_url"); ?>/images/icon/plus.png" alt="">

      <span id="setsumei_plus" class="setsumei">キャンバスを追加します</span>

    </div>

    <div id="pencil-button" class="edit-btn">

      <img src="<?php bloginfo("template_url"); ?>/images/icon/pencil.png" alt="">

      <span id="setsumei_pencil" class="setsumei">鉛筆で描画できます</span>

    </div>

    <div id="eraser-button" class="edit-btn">

      <img src="<?php bloginfo("template_url"); ?>/images/icon/eraser.png" alt="">

      <span id="setsumei_eraser" class="setsumei">消しゴムを使えます</span>

    </div>

    <div id="width-field" class="edit-btn">

      <input

        id="range-selector"

        type="range"

        value="5"

        min="1"

        max="50"

        step="0.1"

      />

      <input

        id="line-width-number-field"

        type="number"

        value="5"

        min="1"

        max="50"

        step="0.1"

      />

      <span id="setsumei_width" class="setsumei">線の細さを設定します</span>

    </div>

    <div id="color-rectangle" class="edit-btn">

      <span id="setsumei_color" class="setsumei">色を変更できます</span>

    </div>

    <div id="clear-button" class="edit-btn">

      <img src="<?php bloginfo("template_url"); ?>/images/icon/trash.png" alt="">

      <span id="setsumei_clear" class="setsumei">描いた内容を消します</span>

    </div>

    <div id="undo-button" class="edit-btn">

      <img src="<?php bloginfo("template_url"); ?>/images/icon/undo.png" alt="">

      <span id="setsumei_undo" class="setsumei">元に戻す</span>

    </div>

    <div id="redo-button" class="edit-btn">

      <img src="<?php bloginfo("template_url"); ?>/images/icon/redo.png" alt="">

      <span id="setsumei_redo" class="setsumei">やり直す</span>

    </div>

    <div id="calculation-button" class="edit-btn right-btn">

      <a class="math">

        <img src="<?php bloginfo("template_url"); ?>/images/icon/calc.png" class="calculation" onclick="createCalculation()">

      </a>

      <span id="setsumei_calculation" class="setsumei right">計算用紙を表示します</span>

    </div>

    <?php if(isset($_GET['id'])) {?>

    <div id="share-button" class="edit-btn">

      <a class="math">

        <img src="<?php bloginfo("template_url"); ?>/images/icon/share.png" class="calculation" onclick="shareUrl(<?php echo $_GET['id']; ?>)">

      </a>

      <span id="setsumei_share" class="setsumei right">URLで共有します</span>

    </div>

    <?php }?>

    <div id="save-button" class="edit-btn">

      <a id="download">

        <img src="<?php bloginfo("template_url"); ?>/images/icon/download.png" onclick="saveAndDownload(<?php echo ManagementLogic::getMaxTitleNumberByUserId($_SESSION['login_user']['id']); ?>, false)">

      </a>

      <span id="setsumei_save" class="setsumei right">描いた内容を保存します</span>

    </div>

  </div>

    

  <!-- 挿入ツール -->

  <div class="head_tab_content" id="head_insert_content">

    <div id="text-button" class="edit-btn">

      <input class="text-filed" id="text-input" type="text">

      <input

        id="text-size-number-field"

        class="size-number-field"

        type="number"

        value="12"

        min="1"

        max="50"

        step="0.5"

      />

      <span id="setsumei_text" class="setsumei">テキストを入力できます</span>

    </div>

    <div id="stamp-button" class="edit-btn">

      <img class="stamp-modal-button" src="<?php bloginfo("template_url"); ?>/images/icon/stamp.png" alt="">

      <div id="stamp-field-box" class="field-box">

        <input

          id="stamp-size-number-field"

          class="size-number-field"

          type="number"

          value="100"

          min="0"

          max="200"

          step="10"

        />

        <div class="percent-text" id="stamp-percent-text">%</div>

      </div>

      <span id="setsumei_stamp" class="setsumei">スタンプを貼り付けます</span>

    </div>

    <div id="picture-button" class="edit-btn">

      <form action="">

        <label for="selectFile">

          <input type="file" id="selectFile" onchange="loadImage(this);">

        </label>

        <style>

          form {

            height: 50px;

            width: 50px;

          }

          label {

            background:url('<?php echo bloginfo("template_url"); ?>/images/icon/picture.png');

            background-size: cover;

            cursor: pointer;

            display: inline-block;

            height: 100%;

            width: 100%;

          }

          label input {

            display: none;

          }

        </style>

      </form>

      <div id="image-field-box" class="field-box">

        <input

          id="image-size-number-field"

          class="size-number-field"

          type="number"

          value="100"

          min="0"

          max="200"

          step="10"

        />

        <div class="percent-text" id="image-percent-text">%</div>

      </div>

      <span id="setsumei_picture" class="setsumei">画像を貼り付けます</span>

    </div>

    <div id="formula-button" class="edit-btn">

      <img id="formula-image" src="<?php bloginfo("template_url"); ?>/images/icon/formula.png" alt="">

      <div id="formula-field-box" class="field-box">

        <input

          id="formula-size-number-field"

          class="size-number-field"

          type="number"

          value="100"

          min="0"

          max="200"

          step="10"

        />

        <div class="percent-text" id="formula-percent-text">%</div>

      </div>

    </div>

  </div>

    

  <span id="color-palette" style="display: flex;"></span>

  </section>

  <section>

    <?php

      for($i = 1; $i < 6; $i ++) {

      // パラメータ

      $args = array(

        'post_type' => 'stamp',

        'taxonomy' => 'dep',

        'field' => 'slug',

        'term' => 'category-' . $i,

      );

      $the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）

      if($the_query->found_posts == 0) {

        continue;

      }

    ?>

    <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>

      <div class="stamp-image-list">

        <img class="stamp-button" src="<?php echo CFS()->get('stamp-img')?>" alt="">

        <?php wp_reset_postdata(); ?>

        <?php endwhile; ?>

        <?php else: ?>

        <?php endif; ?>

      </div>

    <?php } ?>

  </section>

</div>

</header>



<script language="JavaScript">

  let images = new Array();

  let id = null;

  let dir = "<?php echo bloginfo("template_url") ?>";



  <?php if(isset($_GET['id'])) {?>

    id = <?php echo $_GET['id']?>;

  <?php } ?>

  <?php if(isset($images)) { ?>

    <?php foreach($images as $image) { ?>

      images.push("<?php echo $image['file_name'] ?>");

    <?php } ?>

  <?php } ?>

</script>

<script language="JavaScript" src="<?php echo bloginfo("template_url") ?>/edit.js"></script>

<script language="JavaScript" src="https://cdn.jsdelivr.net/npm/colorjoe@4/dist/colorjoe.min.js"></script>



<div id="blank">

  <div id="all-container">

    <span id="layerd-canvas-area">

      <canvas id="draw-area" style="border: 1px solid #000000; position: absolute;"></canvas>

      <canvas id="line-width-indicator" style="border: 1px solid #000000; position: absolute;"></canvas>

    </span>

  </div>

  <style>

    #all-container {

      display: flex;

      margin: 50px 0;

      flex-direction: row;

    }

    #right {

      display: flex;

      flex-direction: column;

      align-items: center;

      justify-content: center;

    }

    .menu {

      margin-bottom: 20px;

    }

  </style>

  <form id="form" action="/post" method="post" enctype="multipart/form-data">

    <input type="hidden" id="title" name="title" value="<?php if(isset($_GET['id'])) { echo $imagePost['title'] ;}?>">

    <input type="hidden" name="id" value="<?php if(isset($_GET['id'])) { echo $_GET['id'] ;}?>">

    <input type="hidden" id="backToMypage" name="backToMypage" value="false">

  </form>

</div>



<script>

  function shareUrl(id) {

    //var text = "http://wakalook.com/edit?id=" + id;

    var text = "http://wakalook.com/edit?id=" + id + "<?php echo ManagementLogic::getAutopwd($_SESSION['login_user']['id'], $_GET['id']); ?>";

    console.log(text);

    navigator.clipboard.writeText(text).then(e => {

      let oaDialog = document.getElementById("originalAlertDialog");

      let oadMessage = document.getElementById("oadialogMessage");

      oadMessage.textContent = "クリップボードに共有URLをコピーしました";

      oaDialog.style.display = "block";

      oaDialog.isSubmit = "false";

    });

  }

</script>

</body>

<?php 

  include('originalDialog.php');

  include('formulaDialog/formulaDialog.php');

?>

</html>