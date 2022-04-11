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

                "@id": "https://wakalook.com/documentation?category=formula",

                "name": "数式"

            }

        },

        {

            "@type": "ListItem",

            "position": 3,

            "item": {

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails",

                "name": "数式のパーツの詳細"

            }

        },

        {

            "@type": "ListItem",

            "position": 4,

            "item": {

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=formulafunction",

                "name": "関数"

            }

        }]

    }

</script>



<!-- パンくずリスト -->

<nav>

    <ol class="breadcrumbs">

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation">ドキュメンテーショントップ</a></li>

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula">数式</a></li>

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails">数式のパーツの詳細</a></li>

        <li>関数</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>関数</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=formulafunction#howto">どのように使うか</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=formulafunction#category">各カテゴリーの詳細</a>

    <ul>

        <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=formulafunction#trigonometric">三角関数</a>

        <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=formulafunction#inversetrigonometric">逆三角関数</a>

        <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=formulafunction#logarithmic">対数関数</a>

    </ul>

</div>



<h2 id="howto">どのように使うか</h2>



<p>

    ここでは、三角関数、逆三角関数および対数関数を入力することが出来ます。<br>

    対数関数における\(\log_{\Box} \Box\)以外は、押すとその内容がそのまま入力できます。<br>

    \(\log_{\Box} \Box\)については、押すと対数関数の底の入力モードに入ります。<br>

    底を入力し、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h2 id="category">各カテゴリーの詳細</h2>



ここからは、各々のカテゴリーの単位についてご紹介します。



<h3 id="trigonometric">三角関数</h3>



<!-- 三角関数の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/trigonometric.png">



<p>

    三角関数をまとめたものです。<br>

    正弦、余弦、正接関数を入力することが出来ます。

</p>



<h3 id="inversetrigonometric">逆三角関数</h3>



<!-- 逆三角関数の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/inversetrigonometric.png">



<p>

    逆三角関数をまとめたものです。<br>

    頭に「arc」を付けたものと、上付き文字の-1を付けたものの二通りがあります。

</p>



<h3 id="logarithm">対数関数</h3>



<!-- 対数関数の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/logarithm.png">



<p>

    対数関数をまとめたものです。<br>

    自然対数（二種類）、常用対数、底が2の対数については、そのまま入力できます。<br>

    底が\(\Box\)となっている対数については、底を指定する入力モードに入ります。

</p>