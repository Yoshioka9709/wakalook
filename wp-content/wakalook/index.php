<?php
if($_GET['status'] == "logout") {
  $status = "logout";
}
$title =""; get_header(); ?>



<section id="only">

このサイズでは表示できません。<br>

画面の幅を広げてください。

</section>

<section id="WakaLook">


<section id="home1">

 <div id="contents1">

 <h1>オンライン勉強なら</h1>

 <h1>「WakaLook」</h1>

 <p>授業、自習、共同利用</p>

 <p>無料オンライン学習ツール</p>

 </div>

<img src="<?php bloginfo("template_url"); ?>/images/1.png">

</section>



<section id="button">

  <a href="<?php bloginfo("home_url"); ?>/register_form">　WakaLookを初めて利用する方はこちら　</a><br><br><br>

  <a href="<?php bloginfo("home_url"); ?>/login_form">WakaLookを利用したことがある方はこちら</a>

</section>



<section id="home2">

 <div id="contents2">

  <h2>オンラインでの勉強が不便な時代は、もう終わり。</h2>

  <p>アプリをインストールせずに、素早くテキスト生成、数式を入力し、仲間と協力しながら勉強に取り組める勉強特化テキストエディタです。</p>

  <p>事前の準備は一切必要ありません。いつでも「勉強するぞ！」と思ったあなたをWakaLookはサポートします。</p>

 </div>

<img src="<?php bloginfo("template_url"); ?>/images/2.png">

</section>



<section id="home3">

 <img src="<?php bloginfo("template_url"); ?>/images/3.png">

 <div id="contents3">

  <h2>直感的な操作が、効率的な学習環境を構築する。</h2>

  <p>オンライン上では面倒だった数式入力の操作に関して、直感的な操作だけで入力が可能になりました。</p>

  <p>従来のテキストエディタと比べ、<span class="span">※</span>約12倍速い入力操作が、効率的な学習空間を構築します。※当社調べ</p>

 </div>



</section>

<?php get_footer(); ?>

</section>

</body>

</html>