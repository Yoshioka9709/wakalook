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

                "@id": "https://wakalook.com/documentation?category=formula&content=formulasummary",

                "name": "数式入力の概要"

            }

        }]

    }

</script>



<!-- パンくずリスト -->

<nav>

    <ol class="breadcrumbs">

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation">ドキュメンテーショントップ</a></li>

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula">数式</a></li>

        <li>数式入力の概要</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>数式入力の概要</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulasummary#whyformula">なぜ数式入力に特化したのか</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulasummary#whatformula">どういう数式が入力できるのか</a>

</div>



<h2 id="whyformula">なぜ数式入力に特化したのか</h2>



<p>

    当アプリは、オンライン授業等を行う場合に、どれだけパソコン等電子機器に触れてきた時間が短いとしても、電子機器上で簡単にノートを取ることができることを目的として作られました。<br>

    その上で特に重点を置いた機能として、「数式入力」という機能が存在しています。

</p>



<p>

    これまでのツールでは、主に以下のような方法で数式を入力することがメインでした。

</p>



<ul>

    <li>テキストベースで分数や微積分等も表現する</li>

    <li>ボタンを押すことによって数式を入力する</li>

</ul>



<p>

    しかし、テキストベースによる数式の入力は、コマンドを覚えていなければ使うのは難しいものです。<br>

    入力する方法を一つ一つ調べて入力するようでは、とてもではないですが授業のペースについて数式を入力することはできません。

</p>



<p>

    ボタンを押すことによって数式を入力することは、当アプリでも行っていますが、そのような場合は、大抵数式を入力すること「だけ」に着眼したアプリであったり（つまり日本語などは打てない）、そのツールを利用する場合にお金がかかってしまったりと、気軽に教育現場に導入できるようなものではありませんでした。

</p>



<p>

    そこで当アプリ「Wakalook」は、数式を簡単に入力でき、かつ同時に板書もできる、まさに「ワープロとノート（グラフィックソフト）」のいいとこどりをすべく開発したアプリです。<br>

    もちろん、会員登録をしていただければ、全ての機能を無料で使うことができます。

</p>



<p>

    当アプリ「Wakalook」を使うことにより、もちろん従来通り手書きで数式を書くこともできますし、「数式入力ダイアログ」を利用することにより、きれいなレイアウトの数式を、誰でも簡単に作成することができます。<br>

    「数式入力ダイアログ」では、多数のショートカットキーも用意されており、それらを少し覚えれば、手書きで書くよりも素早く、きれいな数式が作れることでしょう。<br>

    誰もが自分のやりやすいようにノートを取れる、これこそ、当アプリの目標です。

</p>



<h2 id="whatformula">どういう数式が入力できるのか</h2>



<p>

    主に高校生までの学習範囲で出てくる数式であれば、およそどのようなものでも入力できます。<br>

    例えば、数学のみならず物理の数式でも、以下のようなものが入力できます。

</p>



<p>\[V = - L \frac{\Delta I}{\Delta t}\]</p>



<p>\[V = \frac{1}{\omega C} I_{0} \sin (\omega t - \frac{\pi}{2})\]</p>



<p>

    また、化学では単位などを数式に含むと理解しやすくなると言われることから、数式に単位を含むこともできます。<br>

    さらに、大学生が習うものについても、基礎的な数式なら、入力することができます。

</p>



<p>\[\forall \varepsilon \gt 0, \ \exists \delta \gt 0 \mathrm{s.t.} \forall x \in \mathbb{R}, \  0 \lt |x - a| \lt \delta \rightarrow |f(x) - b| \lt \varepsilon\]</p>



<P>これらの数式の入力方法は、<a class="inlineLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulaquickuse">次のドキュメント</a>をご覧ください。</P>