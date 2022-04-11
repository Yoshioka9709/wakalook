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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=sumprod",

                "name": "和の記号・積の記号"

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

        <li>和の記号・積の記号</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>和の記号・積の記号</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=sumprod#summary">概要</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=sumprod#howto">入力方法</a>

</div>



<h2 id="summary">概要</h2>



<p>

    数列において、ΣやΠは不可欠なものです。<br>

    しかし、書き方としては、一般的なエディタでは伝えづらいような記法しかできません。<br>

    当アプリでは、和の記号Σや積の記号Πも、簡単に分かりやすく入力できるようにします。

</p>



<h2 id="howto">入力方法</h2>



<!-- 和の記号の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/sum.png">

<!-- 積の記号の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/prod.png">



<p>

    「和の記号」カテゴリーに存在する\(\sum\)および、「積の記号」カテゴリーに存在する\(\prod\)に関しては、押すとその内容がそのまま入力されます。

</p>



<p>

    それ以外については、押すと入力モードに入ります。

    \(\sum_{\Box}^{\Box}\)および\(\prod_{\Box}^{\Box}\)に関しては、「<span class="inline">入力項目切り替え</span>」ボタンを押すことにより、入力場所を変更することが出来ます。<br>

    入力モードでは、数式を入力すると、該当箇所に入力した数式が記されます。<br>

    「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>