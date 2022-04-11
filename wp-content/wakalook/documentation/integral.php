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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=integral",

                "name": "積分"

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

        <li>積分</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>積分</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=integral#summary">概要</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=integral#basic">一般的な積分</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=integral#line">周回積分</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=integral#brace">積分でのかっこ</a>

</div>



<h2 id="summary">概要</h2>



<p>

    大学受験において微積分は重要な分野の一つであり、大学に入ってもなおその利用頻度は褪せることを知りません。<br>

    高校数学においての積分は多くの場合、（特に）グラフに囲まれた部分の面積や体積を求めたり、大学範囲で必要になるような積分の計算方法を習得します。<br>

    図形的な処理では手に負えないような問題について、有効な解析手段となっています。

</p>



<p>

    そんな積分ですが、積分の記法には多くの種類があることもまたしかり。<br>

    高校範囲では不定積分か定積分というのが大きな記法の違いですが、その他にも様々なものがあります。<br>

    当ツールでは、そのようにいくつかある積分記法の中でも、一般的な積分と周回積分について、テンプレートを用意しています。

</p>



<h2 id="basic">一般的な積分</h2>



<!-- 一般的な積分を囲った画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/integral_1.png">



<p>

    ここで言う「一般的な積分」とは、周回積分ではなく、積分を習いたてのころに習う、「いわゆる積分」のことを意味します。<br>

    いずれも、ボタンを押すと積分入力モードに入ります。

</p>



<h3>積分入力モードについて</h3>



<p>

    各々のボタンにおいて、\(\Box\)の部分は、みなさんが変更する場所になります。<br>

    入力モードにおいて、数式を入力すると、入力した数式が、該当の場所にそのまま格納されます。<br>

    「<span class="inline">入力項目切り替え</span>」ボタンを押すことにより、入力箇所を切り替えることが出来ます。<br>

    また、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h2 id="line">周回積分</h2>



<!-- 周回積分を囲った画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/integral_2.png">



<p>

    当ツールでは「周回積分」を入力することが出来ます。<br>

    いずれも、ボタンを押すと積分入力モードに入ります。<br>

    その後の入力方法は、上記の「一般的な積分」の場合と同じです。

</p>



<h2 id="brace">積分でのかっこ</h2>



<!-- 積分でのかっこを囲った画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/integral_3.png">



<p>

    定積分において、以下のような式を書く必要のあるときがあります。

</p>



<p>\[\left[ \frac{1}{2}x^{2} \right]^{1}_{0}\]</p>



<p>

    このような場合、確かに「かっこ」のところの「よく使う括弧」における[]と、添字や指数を用いて入力すればよいと見えます。<br>

    それでも確かに入力することは可能ですが、かっこは大きくならないので、上記に示した例のように、分数等を入力した場合のレイアウトが崩れてしまいます。<br>

    それを防止するために、この「積分」カテゴリーに存在するかっこを用いるとよいです。

</p>



<p>

    入力方法は、他の積分のものとほぼ変わりません。<br>

    かっこのボタンを押すことにより、フレームが出現します。<br>

    この状態で数式を入力することにより、指定した場所に数式が入力されます。<br>

    また、「<span class="inline">入力項目切り替え</span>」ボタンを押すことにより、入力箇所を切り替えることが出来ます。<br>

    さらに、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>