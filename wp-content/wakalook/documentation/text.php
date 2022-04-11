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

                "@id": "https://wakalook.com/documentation?category=drawpen",

                "name": "テキストを貼り付ける"

            }

        }]

    }

</script>



<!-- パンくずリスト -->

<nav>

    <ol class="breadcrumbs">

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation">ドキュメンテーショントップ</a></li>

        <li>ペンで描く</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>テキストを貼り付ける</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=text#textsummary">概要</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=text#changesize">テキストのサイズを変更する</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=text#changetextcolor">テキストの色を変更する</a>

</div>



<h2 id="textsummary">概要</h2>



<!-- ここにイメージを挿入(テキストボタン) -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/text.png">



<p>

    上記がテキストボタンです。このボタンを用いることで、テキストを入力することが出来ます。<br>

    これは、上のメニューの「<span class="inline">コンテンツ挿入</span>」から選択することが出来ます。

</p>



<p>

    なお、このボタンを用いてテキストを入力する方法は、以下の通りです。

</p>



<ol>

    <li>テキストボックスに、貼り付けたいテキストを入力します。</li>

    <li>ボタンをクリックします。</li>

    <li>テキストを配置したい場所をクリックします。</li>

</ol>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        黒い枠線の外には、描画することができません。<br>

        この場合は、横にサイズを大きくするか、キャンバスを追加することで対応できます。<br>

        キャンバスの追加について、詳しくは<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#addcanvas">こちら</a>をご覧ください。

    </div>

</div>



<h2 id="changesize">テキストのサイズを変更する</h2>



<p>

    テキストボタンの下のテキストボックスにより、テキストのサイズを変えることが出来ます。<br>

    これは、上のメニューの「<span class="inline">コンテンツ挿入</span>」から調整することが出来ます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        テキストのサイズはpx単位で設定されます。

    </div>

</div>



<h2 id="changetextcolor">テキストの色を変更する</h2>



<!-- ここにイメージを挿入(color-rectangle) -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/colorrectangle.png">



<p>

    上記は色を変えるための長方形です。<br>

    これをクリックすると、カラーダイアログが表示され、そこで色を選択することが出来ます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        現状では、RGBなどで色を指定することができません。

    </div>

</div>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        これを使うと、ペンの色も変更できます。そのため、ペンで描画する前に色を変えるときはご注意ください。<br>

        ペンの色変更については、<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=drawpen#changepencolor">こちら</a>をご覧ください。

    </div>

</div>