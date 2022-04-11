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

                "name": "ペンで描く"

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



<h1>ペンで描く</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=drawpen#peneraser">鉛筆と消しゴムを使う</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=drawpen#changewidth">ペンの太さを変える</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=drawpen#changepencolor">ペンの色を変える</a>

</div>



<h2 id="peneraser">鉛筆と消しゴムを使う</h2>



<!-- ここにイメージを挿入(鉛筆ボタン) -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/pencil.png">



<p>

    上記が鉛筆ボタンです。これを押すことにより、自由に描画できます。<br>

    これは、上のメニューの「<span class="inline">基本ツール</span>」から選択することが出来ます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        黒い枠線の外には、描画することができません。<br>

        この場合は、横にサイズを大きくするか、キャンバスを追加することで対応できます。<br>

        キャンバスの追加について、詳しくは<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#addcanvas">こちら</a>をご覧ください。

    </div>

</div>



<!-- ここにイメージを挿入(消しゴムボタン) -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/eraser.png">



<p>

    上記が消しゴムボタンです。これを押すことにより、書いた内容を消すことが出来ます。<br>

    この消しゴムは、鉛筆で描いたものを始め、画像、数式等も消すことが出来ます。<br>

    これは、上のメニューの「<span class="inline">基本ツール</span>」から選択することが出来ます。

</p>



<h2 id="changewidth">ペンの太さを変える</h2>



<!-- ここにイメージを挿入(width-indicator等々) -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/widthindicator.png">



<p>

    上のスライダーとテキストボックスにより、ペンおよび消しゴムの太さを変えることが出来ます。<br>

    これは、上のメニューの「<span class="inline">基本ツール</span>」から調整することが出来ます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        スライダーおよびテキストボックスの矢印(↑↓ボタン)で設定できる最小値は1, 最大値は50です。<br>

        1未満、または50より大きい値を設定する場合は、キーボードから数字を直接テキストボックスに入力することでできます。

    </div>

</div>



<h2 id="changepencolor">ペンの色を変える</h2>



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

        これを使うと、テキストの色も変更できます。そのため、テキスト貼り付け前に色を変えるときはご注意ください。<br>

        テキストの色変更については、<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=text#changetextcolor">こちら</a>をご覧ください。

    </div>

</div>