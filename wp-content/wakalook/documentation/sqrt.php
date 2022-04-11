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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=sqrt",

                "name": "累乗根"

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

        <li>累乗根</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>累乗根</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=sqrt#sqrt2">平方根</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=sqrt#sqrt3">立方根</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=sqrt#sqrtn">べき根</a>

</div>



<h2 id="sqrt2">平方根</h2>



<!-- 平方根の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/sqrt2.png">



<p>

    平方根を入力することが出来ます。<br>

    \(\sqrt{2}\)または\(\sqrt{x}\)を押すと、それぞれの要素がそのまま入力されます。<br>

</p>



<p>

    また、\(\sqrt{\Box}\)を押すと、平方根入力モードに入ることが出来ます。<br>

    これで、数式を入力することにより、平方根内に入力した数式を格納することが出来ます。<br>

    「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h3>キーボード入力について</h3>



<p>

    平方根（\(\sqrt{\Box}\)）に関しては、キーボードから入力モードに入ることが出来ます。<br>

    「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">s</span>」を押すことにより平方根入力モードに入ることが出来ます。

</p>



<h2 id="sqrt3">立方根</h2>



<!-- 立方根の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/sqrt3.png">



<p>

    立方根を入力することが出来ます。<br>

    \(\sqrt[3]{x}\)を押すと、これがそのまま入力されます。

</p>



<p>

    また、\(\sqrt[3]{\Box}\)を押すと、立方根入力モードに入ることが出来ます。<br>

    これで、数式を入力することにより、立方根内に入力した数式を格納することが出来ます。<br>

    「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h2 id="sqrtn">べき根</h2>



<!-- べき根の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/sqrtn.png">



<p>

    べき根を入力することが出来ます。<br>

    \(\sqrt[n]{x}\)を押すと、これがそのまま入力されます。

</p>



<p>

    また、\(\sqrt[n]{\Box}\)を押すと、べき根入力モードに入ることが出来ます。<br>

    これで、数式を入力することにより、べき根内に入力した数式を格納することが出来ます。<br>

    「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<p>

    また、\(\sqrt[\Box]{\Box}\)を押すと、同様にべき根入力モードに入ることが出来ます。<br>

    この場合の先ほどとの違いは、指数も指定することが出来る点にあります。<br>

    これについては、「<span class="inline">入力項目切り替え</span>」ボタンを押すことで変更することが出来ます。<br>

    初期状態では、指数を入力することが出来ます。入力項目切り替えをすることにより、べき根内も入力することが出来ます。<br>

    「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>