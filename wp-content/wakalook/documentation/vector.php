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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=vector",

                "name": "ベクトル"

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

        <li>ベクトル</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>ベクトル</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=vector#summary">概要</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=vector#arrow">矢印付きベクトルの入力方法</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=vector#vertical">縦ベクトルの入力方法</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=vector#horizontal">横ベクトルの入力方法</a>

</div>



<h2 id="summary">概要</h2>



<p>

    ベクトルはよく使われますが、一般的なエディタで入力できるのは横ベクトルくらいと言えそうです。<br>

    文字の上に矢印を設置するような\(\vec{x}\)と言った表記の仕方をすることができるエディタも少ないように思います。<br>

    そのようなベクトルを、簡単に入力することができるようにしました。

</p>



<h2 id="arrow">矢印付きベクトルの入力方法</h2>



<p>

    「ベクトル」カテゴリーにおいて、\(\vec{\Box}\)が記されているボタンを押してください。<br>

    こうすると、ベクトル入力モードに入ることが出来ます。<br>

    ここで、数式を入力することで、ベクトルの中に数式を記すことが出来ます。<br>

    「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h2 id="vertical">縦ベクトルの入力方法</h2>



<p>

    「ベクトル」カテゴリーにおいて、縦ベクトルが記されているボタンを押してください。<br>

    こうすることで、ベクトル入力モードに入り、「ベクトル」カテゴリーにおいて、「縦ベクトル・行列のオプション」カテゴリーが出現します。

</p>



<p>

    縦ベクトルの行は、「<span class="inline">行を増やす</span>」ボタンおよび「<span class="inline">行を減らす</span>」ボタンを押すことで、変更することが出来ます。<br>

    また、縦ベクトルの入力位置を変更するには、「<span class="inline">↑</span>」ボタンおよび「<span class="inline">↓</span>」ボタンを押すことで、変更することが出来ます。<br>

    なお、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h2 id="horizontal">横ベクトルの入力方法</h2>



<p>

    横ベクトルについては、「ベクトル」カテゴリーから入力することはできません。<br>

    横ベクトルについては、(および)を用いて、その間に数式およびコンマ、空白を入力し、横ベクトルとすることが出来ます。<br>

    コンマは、「その他」の「点」カテゴリーにあります。または、キーボードから「<span class="inline">,</span>」を打つことで、入力できます。<br>

    空白は、「<span class="inline">空白を空ける</span>」ボタンを押すことで、入力できます。

</p>



<p>

    または、間にコンマを入れない方法もあります。その場合は、空白を入力するのみで行うことも出来ます。<br>

    もう一つとしては、行列を作成し、その行を1列だけにするという方法もあります。<br>

    行列の入力方法については、<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=matrix">こちら</a>をご覧ください。

</p>