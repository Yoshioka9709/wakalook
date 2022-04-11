<!-- ヘッダを読み込む -->

<?php $title; $title = "-ドキュメント"; require_once(dirname(__FILE__) . "/documentation/docHeader.php"); ?>



<!-- 内容 -->

<body>

<div class="docBox">

    <section id="WakaLook">

        <!-- こちらではサイドメニューを表示する -->

        <div class="docSideMenu">

            <details class="sideDetails">

                <summary>クイックドキュメント</summary>

                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=quick&content=whatdo">Wakalookには何ができるのか</a></div>

                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=quick&content=quickuse">Wakalookのかんたんな使い方</a></div>

            </details>

            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=drawpen">ペンで描く</a></div>

            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=text">テキストを貼り付ける</a></div>

            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=picture">画像を使う</a></div>

            <details class="sideDetails">

                <summary>数式</summary>

                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulasummary">数式入力の概要</a></div>

                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulaquickuse">数式の簡単な貼り方</a></div>

                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard">キーボードで数式を入力する</a></div>

                    <details class="sideDetails">

                        <summary>数式のパーツの詳細</summary>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=basiccontent">基本要素</a></div>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=brace">かっこ</a></div>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=power">指数</a></div>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=sqrt">累乗根</a></div>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=unit">単位</a></div>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=letter">文字</a></div>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=formulafunction">関数</a></div>

                            <details class="sideDetails">

                                <summary>微積分・極限</summary>

                                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=differential">微分</a></div>

                                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=integral">積分</a></div>

                                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=limit">極限</a></div>

                            </details>

                            <details class="sideDetails">

                                <summary>ベクトル・行列</summary>

                                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=vector">ベクトル</a></div>

                                    <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=matrix">行列</a></div>

                            </details>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=sumprod">和の記号・積の記号</a></div>

                            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=detail&parts=other">その他</a></div>

                    </details>

            </details>

            <div class="sideDiv"><a class="sideLink" href="<?php bloginfo("home_url"); ?>/documentation?category=utility">ユーティリティ</a></div>

        </div>

    </section>

    <div class="docContent">

        <?php include(dirname(__FILE__) . "/docContent.php"); ?>

    </div>

</div>

<?php get_footer()?>

</body>

</html>