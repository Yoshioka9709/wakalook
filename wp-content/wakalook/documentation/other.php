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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=other",

                "name": "その他"

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

        <li>その他</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>その他</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#logical">論理記号</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#set">集合</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#hollow">中抜き文字</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#shape">図形</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#point">点</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#arrow">矢印</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#combination">順列・組み合わせ</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=other#accent">アクセント</a>

</div>



<h2 id="logical">論理記号</h2>



<p>

    多くの場合、日本語等の自然言語を含めて、数学の記述を行いますが、<br>

    \(\forall\)や\(\exists\)等を用いて、自然言語の記述無しで定理を述べる方法があります。<br>

    一応変換候補としては出てきますが、一部環境依存文字だったり、そもそも変換までしないと出てこないのは面倒ということで、<br>

    ボタンを押すだけで入力できるように用意しました。

</p>



<h3>入力方法</h3>



<p>

    ボタンを押すことにより、該当の文字が入力できます。<br>

    ただし、\(\overline{\Box}\)については、押すと入力モードに入ります。<br>

    これは、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>意味</th>

    </tr>



    <tr>

        <td>\(\because\)</td> <td>なぜならば</td>

    </tr>



    <tr>

        <td>\(\therefore\)</td> <td>ゆえに</td>

    </tr>



    <tr>

        <td>\(\forall\)</td> <td>全ての</td>

    </tr>



    <tr>

        <td>\(\exists\)</td> <td>存在する</td>

    </tr>



    <tr>

        <td>\(\nexists\)</td> <td>存在しない</td>

    </tr>



    <tr>

        <td>\(\land\)</td> <td>論理積</td>

    </tr>



    <tr>

        <td>\(\lor\)</td> <td>論理和</td>

    </tr>



    <tr>

        <td>\(\lnot\)</td> <td>否定1</td>

    </tr>



    <tr>

        <td>\(\overline{\Box}\)</td> <td>否定2</td>

    </tr>



    <tr>

        <td>\(\oplus\)</td> <td>排他的論理和</td>

    </tr>

</table>



<h2 id="set">集合</h2>



<p>

    集合論は、高校数学で学習します。<br>

    ド・モルガンの定理などにアプローチして解く問題もあるでしょう。<br>

    そういった場合を踏まえて、こちらもボタンを押すだけで入力が出来るものを用意しました。

</p>



<h3>入力方法</h3>



<p>

    こちらは全て、ボタンを押すことにより、該当の文字が入力できます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>意味</th>

    </tr>



    <tr>

        <td>\(\in\)</td> <td>（集合に要素が）含まれる1</td>

    </tr>



    <tr>

        <td>\(\ni\)</td> <td>（集合に要素が）含まれる2</td>

    </tr>



    <tr>

        <td>\(\not \in\)</td> <td>（集合に要素が）含まれない1</td>

    </tr>



    <tr>

        <td>\(\not \ni\)</td> <td>（集合に要素が）含まれない2</td>

    </tr>



    <tr>

        <td>\(\subset\)</td> <td>（集合に集合が）含まれる1</td>

    </tr>



    <tr>

        <td>\(\supset\)</td> <td>（集合に集合が）含まれる2</td>

    </tr>



    <tr>

        <td>\(\subseteq\)</td> <td>（集合に集合が）含まれるか等しい1</td>

    </tr>



    <tr>

        <td>\(\supseteq\)</td> <td>（集合に集合が）含まれるか等しい2</td>

    </tr>



    <tr>

        <td>\(\not \subset\)</td> <td>（集合に集合が）含まれない1</td>

    </tr>



    <tr>

        <td>\(\not \supset\)</td> <td>（集合に集合が）含まれない2</td>

    </tr>



    <tr>

        <td>\(\cap\)</td> <td>積集合</td>

    </tr>



    <tr>

        <td>\(\cup\)</td> <td>和集合</td>

    </tr>

</table>



<h2 id="hollow">中抜き文字</h2>



<p>

    「実数」や「有理数」など、わざわざ文字で書くことが面倒であるとか、<br>

    論理記号や集合の記号と併用する場合の都合上、\(\mathbb{R}\)のような中抜き文字を試用することが多々あります。<br>

    そういった場合を踏まえて、こちらもボタンを押すだけで入力が出来るものを用意しました。

</p>



<h3>入力方法</h3>



<p>

    こちらは全て、ボタンを押すことにより、該当の文字が入力できます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>意味</th>

    </tr>



    <tr>

        <td>\(\mathbb{N}\)</td> <td>自然数</td>

    </tr>



    <tr>

        <td>\(\mathbb{Z}\)</td> <td>整数</td>

    </tr>



    <tr>

        <td>\(\mathbb{Q}\)</td> <td>有理数</td>

    </tr>



    <tr>

        <td>\(\mathbb{R}\)</td> <td>実数</td>

    </tr>



    <tr>

        <td>\(\mathbb{C}\)</td> <td>複素数</td>

    </tr>

</table>



<h2 id="shape">図形</h2>



<p>

    数学は代数的なアプローチのみならず、幾何学的なアプローチがあります。<br>

    図を手描きで書くことができることを用いて、幾何学的な問題を思考するのも当アプリの一つの使い方です。

</p>



<h3>入力方法</h3>



<p>

    こちらは全て、ボタンを押すことにより、該当の文字が入力できます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>意味</th>

    </tr>



    <tr>

        <td>\(\triangle\)</td> <td>三角形</td>

    </tr>



    <tr>

        <td>\(\Box\)</td> <td>四角形</td>

    </tr>



    <tr>

        <td>\(\perp\)</td> <td>垂直</td>

    </tr>



    <tr>

        <td>\(/\!/\)</td> <td>平行</td>

    </tr>



    <tr>

        <td>\(\angle\)</td> <td>角</td>

    </tr>

    

    <tr>

        <td>\({}^{\circ}\)</td> <td>（角度）度</td>

    </tr>

    

    <tr>

        <td>\(\propto\)</td> <td>相似</td>

    </tr>

</table>



<h2 id="point">点</h2>



<p>

    行列やベクトルにおいて、\(\cdots\)などを入力して省略することはあります。<br>

    そのために、点を簡単に入力する方法があります。

</p>



<h3>入力方法</h3>



<p>

    こちらは全て、ボタンを押すことにより、該当の文字が入力できます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>意味</th>

    </tr>



    <tr>

        <td>\(\cdot\)</td> <td>一点</td>

    </tr>



    <tr>

        <td>\(\cdots\)</td> <td>三点（水平線）</td>

    </tr>



    <tr>

        <td>\(\ldots\)</td> <td>三点（水平線・下側）</td>

    </tr>



    <tr>

        <td>\(\vdots\)</td> <td>三点（鉛直線）</td>

    </tr>



    <tr>

        <td>\(\ddots\)</td> <td>三点（斜め）</td>

    </tr>



    <tr>

        <td>\(,\)</td> <td>\(,\)</td>

    </tr>

</table>



<h2 id="arrow">矢印</h2>



<p>

    論理の関係を記す際に、矢印を使うことはとても有用です。<br>

    当アプリでは、シンプルな一本線矢印のほかに、二重線矢印も利用することが出来ます。

</p>



<h3>入力方法</h3>



<p>

    こちらは全て、ボタンを押すことにより、該当の文字が入力できます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>意味</th>

    </tr>



    <tr>

        <td>\(\leftarrow\)</td> <td>左矢印（一本線）</td>

    </tr>



    <tr>

        <td>\(\rightarrow\)</td> <td>右矢印（一本線）</td>

    </tr>



    <tr>

        <td>\(\uparrow\)</td> <td>上矢印（一本線）</td>

    </tr>



    <tr>

        <td>\(\downarrow\)</td> <td>下矢印（一本線）</td>

    </tr>



    <tr>

        <td>\(\leftrightarrow\)</td> <td>両向き矢印（一本線）</td>

    </tr>



    <tr>

        <td>\(\Leftarrow\)</td> <td>左矢印（二重線）</td>

    </tr>



    <tr>

        <td>\(\Rightarrow\)</td> <td>右矢印（二重線）</td>

    </tr>



    <tr>

        <td>\(\Uparrow\)</td> <td>上矢印（二重線）</td>

    </tr>



    <tr>

        <td>\(\Downarrow\)</td> <td>下矢印（二重線）</td>

    </tr>



    <tr>

        <td>\(\Leftrightarrow\)</td> <td>両向き矢印（二重線）</td>

    </tr>

</table>



<h2 id="combination">順列・組み合わせ</h2>



<p>

    組み合わせや確率においては、nPrやnCrの考え方は必須のものになります。<br>

    これは下付き文字や上付き文字が必要となるので、すこし入力が面倒です。<br>

    当アプリでは、nCrやnPrに加えて、nHrも入力することが出来ます。

</p>



<h3>入力方法</h3>



<p>

    \(!\), \({}_{n}\mathrm{C}_{r}\), \({}_{n}\mathrm{P}_{r}\), \({}_{n}\mathrm{H}_{r}\)については、<br>

    押すだけで入力することが出来ます。<br>

    しかし、それ以外については、各々の入力モードに入ります。<br>

    モードに入ったとき、「<span class="inline">入力項目切り替え</span>」ボタンを押すことにより、入力場所を変更することが出来ます。<br>

    また、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>意味</th>

    </tr>



    <tr>

        <td>\({}_{n}\mathrm{C}_{r}\)</td> <td>nCr</td>

    </tr>



    <tr>

        <td>\({}_{\Box}\mathrm{C}_{\Box}\)</td> <td>nCr(nとrを変更可能)</td>

    </tr>



    <tr>

        <td>\({}_{n}\mathrm{P}_{r}\)</td> <td>nPr</td>

    </tr>



    <tr>

        <td>\({}_{\Box}\mathrm{P}_{\Box}\)</td> <td>nPr(nとrを変更可能)</td>

    </tr>



    <tr>

        <td>\({}_{n}\mathrm{H}_{r}\)</td> <td>nHr</td>

    </tr>



    <tr>

        <td>\({}_{\Box}\mathrm{H}_{\Box}\)</td> <td>nHr(nとrを交換可能)</td>

    </tr>

</table>



<h2 id="accent">アクセント</h2>



<p>

    シンプルなエディタでも、いわゆる普通のアルファベットを入力することはできますが、<br>

    数学において式を書く場合は、アルファベットの上にアクセントが必要になる場合があります。<br>

    当アプリでは、様々なアクセントをアルファベット上に配置することが出来ます。

</p>



<h3>入力方法</h3>



<p>

    押すと、アクセント入力モードに入ります。<br>

    ここで、アクセントを付けたいアルファベットを入力し、「<span class="inline">OK</span>」ボタンを押すことにより、入力を完了することが出来ます。

</p>



<h3>含まれているもの</h3>



<table>

    <tr>

        <th>記号</th> <th>名称</th>

    </tr>



    <tr>

        <td>\(\hat{\Box}\)</td> <td>ハット</td>

    </tr>



    <tr>

        <td>\(\grave{\Box}\)</td> <td>グレーブ</td>

    </tr>



    <tr>

        <td>\(\acute{\Box}\)</td> <td>アキュート</td>

    </tr>



    <tr>

        <td>\(\check{\Box}\)</td> <td>チェック</td>

    </tr>



    <tr>

        <td>\(\tilde{\Box}\)</td> <td>チルダ</td>

    </tr>



    <tr>

        <td>\(\breve{\Box}\)</td> <td>ブレーブ</td>

    </tr>

</table>