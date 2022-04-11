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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=brace",

                "name": "かっこ"

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

        <li>かっこ</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>かっこ</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=brace#basicbrace">よく使う括弧</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=brace#dividecase">場合分け</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=brace#surroundparts">数式を囲むパーツ</a>

</div>



<h2 id="basicbrace">よく使う括弧</h2>



<!-- よく使う括弧の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/basicbrace.png">



<p>

    よく使われている括弧を入力することが出来ます。<br>

    ボタンを押すことにより、該当の記号が入力されます。

</p>



<h3>キーボード入力について</h3>



<p>

    かっこについては、キーボードから入力することが出来ます。<br>

</p>



<h2 id="dividecase">場合分け</h2>



<!-- 場合分けの一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/dividecase.png">



<h3>概要</h3>



<p>

    \(\left| x \right|\)などのように、場合分けを行ったりとか、連立方程式のように複数の数式をかっこでまとめたりする場合に利用できます。

</p>



<h3>入力のしかた（条件なし）</h3>



<p>

    まず、条件を付けない場合分けの入力方法です。

</p>



<!-- 条件なしの場合分けのボタンを挿入する -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/dividecase_1.png">



<p>

    上のボタンを押してください。そうすると、二つの場合を入力できる場合分けのテンプレートが出現します。<br>

    この状況で数式を入力すると、上段の方に数式が入力できます。

</p>



<p>

    次に、入力場所および場合分けの数を変更する方法です。<br>

    「<span class="inline">ベクトル</span>」メニューを開いてください。<br>

    そのとき、上から3番目に、「<span class="inline">縦ベクトル・行列のオプション</span>」というカテゴリーが存在します。<br>

    ここを用いて、場合分けを操作します。

</p>



<p>

    入力場所変更は、「<span class="inline">↑</span>」ボタンおよび「<span class="inline">↓</span>」ボタンを用いて変更します。<br>

    場合分けの数を変更する方法は、「<span class="inline">行を増やす</span>」ボタンおよび「<span class="inline">行を減らす</span>」ボタンを用いることで変更できます。

</p>



<h3>入力のしかた（条件あり）</h3>



<p>

    次に、条件を付けない場合分けの入力方法です。

</p>



<!-- 条件ありの場合分けのボタンを挿入する -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/dividecase_2.png">



<p>

    上のボタンを押してください。そうすると、二つの場合を入力できる場合分けのテンプレートが出現します。<br>

    他は条件を付けない場合とほぼ同じです。唯一違うことは、入力場所変更の方法です。<br>

    行を変更する場合は、従来通り「<span class="inline">↑</span>」ボタンおよび「<span class="inline">↓</span>」ボタンを用いて変更できますが、条件を入力するか数式を入力するかを変更する場合は、「<span class="inline">←</span>」ボタンおよび「<span class="inline">→</span>」ボタンを押してください。

</p>



<h2 id="surroundparts">数式を囲むパーツ</h2>



<!-- 数式を囲むパーツの一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/surroundparts.png">



<p>

    ここでは、以下のようなものを入力できます。

</p>



<ul>

    <li>絶対値</li>

    <li>ノルム</li>

    <li>床関数</li>

    <li>天井関数</li>

</ul>



<p>

    これらの入力方法は共通です。ボタンを押すと、各々の入力モードに入ります。<br>

    そこで数式を入力して、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h3>キーボード入力について</h3>



<p>

    絶対値のみ、キーボードから入力することが出来ます。<br>

    これは、「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">a</span>」で入力モードに入ることが出来ます。<br>

</p>