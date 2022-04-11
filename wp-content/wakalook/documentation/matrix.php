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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=matrix",

                "name": "行列"

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

        <li>行列</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>行列</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=matrix#summary">概要</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=matrix#howto">入力方法</a>

</div>



<h2 id="summary">概要</h2>



<p>

    行列は、高校数学の指導範囲に入ったり入らなかったりというのを繰り返してきました。<br>

    ただ、大学数学では必須と言っていいほど重要なツールです。<br>

    その上、数年前から勢いが出てきて、今では生活にも溶けこみ始めたAI、いわゆる人工知能の機械学習やディーブラーニングでも必須のツールになっています。<br>

    そのような行列について、分かりやすく入力でき、しかもレイアウトがきれいになるような入力方法を提供します。

</p>



<h2 id="howto">入力方法</h2>



<!-- 行列の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/matrix.png">



<p>

    「行列」カテゴリーに存在するボタンを押すことにより、行列のフレームが入力されます。<br>

    この状態で数式を入力すると、該当箇所に数式が入力されます。

</p>



<p>

    行の数を変更する場合には、「<span class="inline">行を増やす</span>」ボタンおよび「<span class="inline">行を減らす</span>」ボタンを押すことで調整できます。<br>

    列の数を変更する場合には、「<span class="inline">列を増やす</span>」ボタンおよび「<span class="inline">列を減らす</span>」ボタンを押すことで調整できます。<br>

    また、行の入力箇所を変更する場合には、「<span class="inline">↑</span>」ボタンおよび「<span class="inline">↓</span>」ボタンを押すことで調整できます。<br>

    さらに、列の入力箇所を変更する場合には、「<span class="inline">←</span>」ボタンおよび「<span class="inline">→</span>」ボタンを押すことで調整できます。

</p>



<p>

    なお、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>