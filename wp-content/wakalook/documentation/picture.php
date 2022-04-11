<!-- JSON-LD -->

<script type="application/ld+json">

    {

        "@context": "http://schema.org",

        "@type": "BreadcrumbList",

        "itemListElement": [{

            "@type": "ListItem",

            "position": 1,

            "item": {

                "@id": "https://wakalook.com/documentation",

                "name": "ドキュメンテーショントップ"

            }

        },

        {

            "@type": "ListItem",

            "position": 2,

            "item": {

                "@id": "https://wakalook.com/documentation?category=picture",

                "name": "画像を使う"

            }

        }]

    }

</script>



<!-- パンくずリスト -->

<nav>

    <ol class="breadcrumbs">

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation">ドキュメンテーショントップ</a></li>

        <li>画像を使う</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>画像を使う</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=drawpen#drawstamp">スタンプを貼り付ける</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=drawpen#drawpicture">画像を貼り付ける</a>

</div>



<h2 id="drawstamp">スタンプを貼り付ける</h2>



<!-- ここにイメージを挿入(スタンプボタン) -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/stamp.png">



<p>

    上記がスタンプボタンです。これを押すことにより、当アプリで登録されているスタンプを押すことが出来ます。<br>

    これは、上のメニューの「<span class="inline">コンテンツ挿入</span>」から選択することが出来ます。

</p>



<p>

    なお、ボタン下に存在するテキストボックスは、このスタンプの大きさを調整するものです。<br>

    100%が初期時点での大きさであり、それより大きくしたり小さくしたりすることで調整できます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        黒い枠線の外には、描画することができません。<br>

        この場合は、横にサイズを大きくするか、キャンバスを追加することで対応できます。<br>

        キャンバスの追加について、詳しくは<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#addcanvas">こちら</a>をご覧ください。

    </div>

</div>



<h2 id="drawpicture">画像を貼り付ける</h2>



<!-- ここにイメージを挿入(画像ボタン) -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/picture.png">



<p>

    上記が画像ボタンです。これを押すことにより、パソコンの中に保存している画像を貼り付けることが出来ます。<br>

    これは、上のメニューの「<span class="inline">コンテンツ挿入</span>」から選択することが出来ます。

</p>



<p>

    なお、ボタン下に存在するテキストボックスは、この画像の大きさを調整するものです。<br>

    100%が初期時点での大きさであり、それより大きくしたり小さくしたりすることで調整できます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        画像の大きさを100%にすることは、画像の縦の大きさを、キャンバスの縦の大きさと一致させることを意味します。<br>

        そのため、100%より大きくする場合は、<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#addcanvas">キャンバスを追加</a>しないとき、画像でカットされる部分があることを意味します。

    </div>

</div>