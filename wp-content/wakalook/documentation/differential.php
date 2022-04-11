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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=differencial",

                "name": "微分"

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

        <li>微分</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>微分</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=differencial#summary">概要</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=differencial#lagrange">ラグランジュの微分記法</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=differencial#leibniz">ライプニッツの微分記法</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=differencial#newton">ニュートンの微分記法</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=differencial#partial">偏微分</a>

</div>



<h2 id="summary">概要</h2>



<p>

    大学受験において微積分は重要な分野の一つであり、大学に入ってもなおその利用頻度は褪せることを知りません。<br>

    高校数学においての微分は多くの場合、（特に）グラフや関数の解析を行う場合に用いられることが多く、図形的な処理では手に負えないような問題について、有効な解析手段となっています。

</p>



<p>

    そんな微分ですが、微分の記法には多くの種類があることもまたしかり。<br>

    数学で使われる微分の記法と、物理で使われる微分の記法では、すこしずつ違う部分があります。<br>

    当ツールでは、そのようにいくつかある微分記法の中でも、特に使用頻度が高い三つの記法について、テンプレートを用意しています。

</p>



<h2 id="lagrange">ラグランジュの微分記法</h2>



<!-- 微分1の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/differential_1.png">



<p>

    カテゴリーにおいて「<span class="inline">微分1</span>」のところに存在する記法は、ラグランジュの微分記法と呼ばれるものです。<br>

    プライム記号を入力することで、微分を表す記法を言います。<br>

    ここにあるボタンは、押すとその内容がそのまま入力されます。

</p>



<h2 id="leibniz">ライプニッツの微分記法</h2>



<!-- 微分2の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/differential_2.png">



<p>

    カテゴリーにおいて「<span class="inline">微分2</span>」のところに存在する記法は、ライプニッツの微分記法と呼ばれるものです。<br>

    分数を用いて微分を表す記法を言います。<br>

    ここにあるボタンを押すと、微分入力モードに入ります。

</p>



<h3>微分入力モードについて</h3>



<p>

    各々のボタンにおいて、\(\Box\)の部分は、みなさんが変更する場所になります。<br>

    入力モードにおいて、数式を入力すると、入力した数式が、該当の場所にそのまま格納されます。<br>

    「<span class="inline">入力項目切り替え</span>」ボタンを押すことにより、入力箇所を切り替えることが出来ます。<br>

    また、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h2 id="newton">ニュートンの微分記法</h2>



<!-- 微分3の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/differential_3.png">



<p>

    カテゴリーにおいて「<span class="inline">微分3</span>」のところに存在する記法は、ニュートンの微分記法と呼ばれるものです。<br>

    文字の上のドットを用いて、微分を表す記法を言います。<br>

    \(\Box\)が含まれていないボタンを押すと、その内容がそのまま入力されますが、そうでないものを押した場合、微分入力モードに入ります。

</p>



<h3>微分入力モードについて</h3>



<p>

    入力モードにおいて、数式を入力すると、入力した数式が、該当の場所にそのまま格納されます。<br>

    なお、基本的に変数一つを入力することを前提としていますが、複数の文字を入力することも一応可能です。<br>

    「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h2 id="partial">偏微分</h2>



<!-- 偏微分の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/partial.png">



<h3>概要</h3>



<p>

    偏微分に関しては時々使われる程度かもしれません。それより、大学範囲で使われていることの方が多いと思います。<br>

    しかし、必要になった場合のために、偏微分の入力を行うためのパーツを用意しています。<br>

</p>



<h3>入力方法</h3>



<p>

    \(\partial\)に関しては、そのまま入力することが出来ます。<br>

    しかし、それ以外の\(\Box\)が含まれるものについては、偏微分入力モードに入って編集することになります。<br>

    なお、入力方法について、これ以外は「ライプニッツの微分記法」のものとほぼ同じです。

</p>