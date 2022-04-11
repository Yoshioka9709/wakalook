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

                "@id": "https://wakalook.com/documentation?category=formula&content=formulakeyboard",

                "name": "キーボードで数式を入力する"

            }

        }]

    }

</script>



<!-- パンくずリスト -->

<nav>

    <ol class="breadcrumbs">

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation">ドキュメンテーショントップ</a></li>

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula">数式</a></li>

        <li>キーボードで数式を入力する</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>キーボードで数式を入力する</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#category">カテゴリー切り替え</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#basic">基本要素</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#brace">かっこ</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#power">指数</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#sqrt">累乗根</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#unit">単位</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#letter">未知数</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#function">関数</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#differential">微積分</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#vector">ベクトル</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#sumprod">和の記号・積の記号</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#other">その他</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulakeyboard#hayami">キーボードショートカット早見表</a>

</div>



<h2 id="category">カテゴリー切り替え</h2>



<p>

    全ての文字は、ボタンを通じて入力することが出来ますが、全ての文字がキーボードから入力できるわけではありません。<br>

    それゆえ、カテゴリーを逐次変えて編集をする必要があります。<br>

    この場合については、カテゴリー切り替えでキーボードを用いて変更することが出来ます。<br>

    対応表は以下の通りです。

</p>



<table>

    <tr>

        <th>カテゴリー名</th> <th>ショートカットキー</th>

    </tr>



    <tr>

        <td>基本要素</td> <td><span class="inline">alt</span> + <span class="inline">1</span></td>

    </tr>



    <tr>

        <td>かっこ</td> <td><span class="inline">alt</span> + <span class="inline">2</span></td>

    </tr>



    <tr>

        <td>指数</td> <td><span class="inline">alt</span> + <span class="inline">3</span></td>

    </tr>



    <tr>

        <td>累乗根</td> <td><span class="inline">alt</span> + <span class="inline">4</span></td>

    </tr>



    <tr>

        <td>単位</td> <td><span class="inline">alt</span> + <span class="inline">5</span></td>

    </tr>



    <tr>

        <td>未知数</td> <td><span class="inline">alt</span> + <span class="inline">6</span></td>

    </tr>



    <tr>

        <td>関数</td> <td><span class="inline">alt</span> + <span class="inline">7</span></td>

    </tr>



    <tr>

        <td>微積分</td> <td><span class="inline">alt</span> + <span class="inline">8</span></td>

    </tr>



    <tr>

        <td>ベクトル</td> <td><span class="inline">alt</span> + <span class="inline">9</span></td>

    </tr>



    <tr>

        <td>和の記号・積の記号</td> <td><span class="inline">alt</span> + <span class="inline">0</span></td>

    </tr>



    <tr>

        <td>その他</td> <td><span class="inline">alt</span> + <span class="inline">-</span></td>

    </tr>

</table>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        カテゴリー切り替えでの数字は、テンキーを用いて入力することはできません。

    </div>

</div>



<h2 id="basic">基本要素</h2>



<p>

    基本要素であるからこそ、入力回数も多くなります。<br>

    それゆえ、キーボードで簡単に入力することができるようにしています。<br>

    対応表は以下の通りです。

</p>



<table>

    <tr>

        <th>項目</th> <th>キーボード</th>

    </tr>



    <tr>

        <th>数字</th> <th></th>

    </tr>



    <tr>

        <td>1</td> <td><span class="inline">1</span></td>

    </tr>



    <tr>

        <td>2</td> <td><span class="inline">2</span></td>

    </tr>



    <tr>

        <td>3</td> <td><span class="inline">3</span></td>

    </tr>



    <tr>

        <td>4</td> <td><span class="inline">4</span></td>

    </tr>



    <tr>

        <td>5</td> <td><span class="inline">5</span></td>

    </tr>



    <tr>

        <td>6</td> <td><span class="inline">6</span></td>

    </tr>



    <tr>

        <td>7</td> <td><span class="inline">7</span></td>

    </tr>



    <tr>

        <td>8</td> <td><span class="inline">8</span></td>

    </tr>



    <tr>

        <td>9</td> <td><span class="inline">9</span></td>

    </tr>



    <tr>

        <td>0</td> <td><span class="inline">0</span></td>

    </tr>



    <tr>

        <td>.</td> <td><span class="inline">.</span></td>

    </tr>



    <tr>

        <th>演算子</th> <th></th>

    </tr>



    <tr>

        <td>+</td> <td><span class="inline">+</span></td>

    </tr>



    <tr>

        <td>-</td> <td><span class="inline">-</span></td>

    </tr>



    <tr>

        <td>×</td> <td><span class="inline">*</span></td>

    </tr>



    <tr>

        <td>/</td> <td><span class="inline">/</span></td>

    </tr>



    <tr>

        <th>等号</th> <th></th>

    </tr>



    <tr>

        <td>=</td> <td><span class="inline">=</span></td>

    </tr>



    <tr>

        <th>不等号（小なり）</th> <th></th>

    </tr>



    <tr>

        <td>&lt;</td> <td><span class="inline">&lt;</span>(<span class="inline">shift</span> + <span class="inline">,</span>)</td>

    </tr>


    <tr>

        <th>不等号（大なり）</th> <th></th>

    </tr>



    <tr>

        <td>&gt;</td> <td><span class="inline">&gt;</span>(<span class="inline">shift</span> + <span class="inline">.</span>)</td>

    </tr>



    <tr>

        <th>分数</th> <th></th>

    </tr>



    <tr>

        <td>\(\frac{\Box}{\Box}\)</td> <td><span class="inline">ctrl</span> + <span class="inline">alt</span> + <span class="inline">f</span></td>

    </tr>

</table>



<h2 id="brace">かっこ</h2>



<p>

    基本要素であるからこそ、入力回数も多くなります。<br>

    それゆえ、キーボードで簡単に入力することができるようにしています。<br>

    対応表は以下の通りです。

</p>



<table>

    <tr>

        <th>項目</th> <th>キーボード</th>

    </tr>



    <tr>

        <td>(</td> <td><span class="inline">(</span>(<span class="inline">shift</span> + <span class="inline">8</span>)</td>

    </tr>



    <tr>

        <td>)</td> <td><span class="inline">)</span>(<span class="inline">shift</span> + <span class="inline">9</span>)</td>

    </tr>



    <tr>

        <td>[</td> <td><span class="inline">[</span></td>

    </tr>



    <tr>

        <td>]</td> <td><span class="inline">]</span></td>

    </tr>



    <tr>

        <td>{</td> <td><span class="inline">{</span>(<span class="inline">shift</span> + <span class="inline">[</span>)</td>

    </tr>



    <tr>

        <td>}</td> <td><span class="inline">}</span>(<span class="inline">shift</span> + <span class="inline">]</span>)</td>

    </tr>



    <tr>

        <td>\(\left| \Box \right|\)</td> <td><span class="inline">ctrl</span> + <span class="inline">alt</span> + <span class="inline">a</span></td>

    </tr>

</table>



<h2 id="power">指数</h2>



<p>

    指数や添字は、使うときにはかなりの勢いで使うので、そのたびにわざわざ「指数」カテゴリーを開くのは面倒です。<br>

    それゆえ、キーボードで簡単に入力することができるようにしています。<br>

    対応表は以下の通りです。

</p>



<table>

    <tr>

        <th>項目</th> <th>キーボード</th>

    </tr>



    <tr>

        <td>\(\Box^{\Box}\)</td> <td><span class="inline">^</span></td>

    </tr>



    <tr>

        <td>\(\Box_{\Box}\)</td> <td><span class="inline">_</span>(<span class="inline">shift</span> + <span class="inline">\</span>)</td>

    </tr>

</table>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        環境に応じて、上記の<span class="inline">\</span>が円マークになっている場合があります。<br>

        この場合は、バックスラッシュに読みかえてください。（バックスラッシュを全角で描くと、＼となります。）

    </div>

</div>



<h2 id="sqrt">累乗根</h2>



<p>

    平方根に関しては、かなりの頻度で入力すると思います。<br>

    立方根や累乗根の場合はそこまで入力することもないかもしれませんので、平方根のみショートカットキーで入力できます。<br>

    対応表は以下の通りです。

</p>



<table>

    <tr>

        <th>項目</th> <th>キーボード</th>

    </tr>



    <tr>

        <td>\(\sqrt{\Box}\)</td> <td><span class="inline">ctrl</span> + <span class="inline">alt</span> + <span class="inline">s</span></td>

    </tr>

</table>



<h2 id="unit">単位</h2>



<p>

    単位に関しては、文字の羅列なので、キーボード入力で行うことが出来ます。<br>

    「<span class="inline">斜字にしない</span>」ボタンを押した後に、該当の単位をキーボードから入力すると入力できます。<br>

    もし「<span class="inline">斜字にしない</span>」ボタンが存在せず、代わりに「<span class="inline">斜字にする</span>」ボタンが存在する場合は、すでに字体が斜字ではないので、そのまま入力してください。

</p>



<h2 id="letter">未知数</h2>



<p>

    未知数に関しては、ギリシャ文字の場合はキーボードから入力することはできません。<br>

    しかし、アルファベットであれば、いかなるアルファベットでもキーボードから入力することが出来ます。<br>

    必要に応じて、「<span class="inline">斜字にしない</span>」ボタンまたは「<span class="inline">斜字にする</span>」ボタンを押して、入力したいアルファベットを入力してください。

</p>



<h2 id="function">関数</h2>



<p>

    これらも、とりあえずキーボードから入力することは可能です。<br>

    例えば、「\(\sin x\)」と入力するとします。<br>

    このとき、「<span class="inline">斜字にしない</span>」ボタンが有効になっている場合は、それを押してください。<br>

    その状態で、「sin」と入力して、「<span class="inline">空白を空ける</span>」ボタンを押してください。<br>

    その後、関数の引数を入力することにより、入力できます。<br>

    しかし、基本的に関数に関しては、必要ならば「関数」のところから入力することをお勧めします。

</p>



<h2 id="differential">微積分</h2>



<h3>微分1</h3>



<p>

    ラグランジュの微分記法は、キーボードから直接文字を入力することで入力できます。<br>

    例えば、\(f'(x)\)については、「<span class="inline">f</span>」→「<span class="inline">'</span>」→「<span class="inline">(</span>」→「<span class="inline">x</span>」→「<span class="inline">)</span>」で入力できます。<br>

    ただし、「<span class="inline">'</span>」については、「<span class="inline">shift</span>」+「<span class="inline">7</span>」で入力できます。<br>

    \(f''(x)\)等の場合も同様に、「<span class="inline">'</span>」の入力する数を一つずつ増やしていくと入力できます。<br>

    また、\(f^{(n)}(x)\)の場合は、「<span class="inline">f</span>」を入力し終わった後に、「<span class="inline">^</span>」を押すことで、指数入力モードに入ってください。<br>

    この中で「<span class="inline">(</span>」→「<span class="inline">n</span>」→「<span class="inline">)</span>」を入力して、「<span class="inline">ctrl</span>」+「<span class="inline">Enter</span>」を押してください。<br>

    そうして、「<span class="inline">(</span>」→「<span class="inline">x</span>」→「<span class="inline">)</span>」を押すことにより、入力できます。

</p>



<h3>微分2</h3>



<p>

    ライプニッツの微分記法は、ショートカットキーからでも入力できますし、キーボードで地道に入力することも可能です。

</p>



<h4>入力方法その1</h4>



<p>

    まずは、キーボードショートカットの方法です。<br>

    「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">l</span>」を押してください。<br>

    このとき、以下のような数式が出現します。

</p>



<p>\[\frac{d^{\Box} \Box}{d \Box^{\Box}}\]</p>



<p>

    ここからは、キーボードを用いて数式を入力したり、矢印キーを使って入力場所を変更するなりして、数式を入力してください。<br>

    入力終了後は、「<span class="inline">ctrl</span>」+「<span class="inline">Enter</span>」で入力モードから抜け出すことが出来ます。

</p>



<h4>入力方法その2</h4>



<p>

    上記の「入力方法その1」で入力できないタイプの微分は、手入力する必要があります。<br>

    例えば、\(\frac{dy}{dx}\)の場合は、まず「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">f</span>」で分数入力モードに入ってください。<br>

    この後、分子に「<span class="inline">dy</span>」と入力し、分母に「<span class="inline">dx</span>」と入力したのち、「<span class="inline">ctrl</span>」+「<span class="inline">Enter</span>」を押すことにより、入力できます。<br>

</p>



<p>

    次に、\(\frac{d^{2}}{dx^{2}}f(x)\)の場合です。<br>

    この場合も、まずは「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">f</span>」で分数入力モードに入ってください。<br>

    その次に、分子に\(d^{2}\)を入力します。これは指数入力モードを用いて入力します。<br>

    まず<span class="inline">d</span>と入力したのち、「<span class="inline">^</span>」を押して指数入力モードに入ってください。<br>

    入ったところで、<span class="inline">2</span>を入力したのち、「<span class="inline">ctrl</span>」+「<span class="inline">Enter</span>」を押して入力モードから抜け出してください。<br>

    分母も同様に入力します。まず<span class="inline">dx</span>と入力したところで、「<span class="inline">^</span>」を押して指数入力モードに入ってください。<br>

    そののち、<span class="inline">2</span>を入力したのち、「<span class="inline">ctrl</span>」+「<span class="inline">Enter</span>」を押して入力モードから抜け出してください。<br>

    そのあとは、「<span class="inline">f</span>」→「<span class="inline">(</span>」→「<span class="inline">x</span>」→「<span class="inline">)</span>」と入力すれば完成です。<br>

</p>



<h4>入力方法その3</h4>



<p>

    ライプニッツの微分記法を入力するうえで、\(d\)を、斜字ではない\(\mathrm{d}\)で書く記法もあります。<br>

    この場合は、\(\mathrm{d}\)を入力する直前で、「<span class="inline">斜字にしない</span>」ボタンを押すことで、入力できます。<br>

    関数\(f(x)\)は基本的に斜字なので、<span class="inline">d</span>を入力した後にはもう一度「<span class="inline">斜字にする</span>」ボタンを押してください。

</p>



<h3>微分3</h3>



<p>

    こちらについては、キーボードで入力する方法はありません。ご了承ください。

</p>



<h3>偏微分</h3>



<p>

    偏微分については、\(\partial\)を入力するところに関してはボタンを押してください。<br>

    それ以外のところについては、これまでと同様キーボードで入力することが出来ます。

</p>



<h3>積分</h3>



<p>

    不定積分および定積分のみ、キーボードのショートカットから入力することが出来ます。<br>

    対応表は以下の通りです。

</p>



<table>

    <tr>

        <th>項目</th> <th>キーボード</th>

    </tr>



    <tr>

        <td>\(\int \Box d \Box\)</td> <td><span class="inline">ctrl</span> + <span class="inline">alt</span> + <span class="inline">i</span></td>

    </tr>



    <tr>

        <td>\(\int_{\Box}^{\Box} \Box d \Box\)</td> <td><span class="inline">ctrl</span> + <span class="inline">alt</span> + <span class="inline">d</span></td>

    </tr>

</table>



<h3>極限</h3>



<p>

    極限をキーボードから入力することはできません。申し訳ありません。

</p>



<h2 id="vector">ベクトル</h2>



<p>

    ベクトルは、特に幾何学ではかなりの頻度で用いることになります。<br>

    それゆえ、ベクトルにはショートカットがあります。<br>

    また、オーソドックスな丸括弧で囲む行列も、ショートカットキーがあります。<br>

    対応表は以下の通りです。

</p>



<table>

    <tr>

        <th>項目</th> <th>キーボード</th>

    </tr>



    <tr>

        <td>\(\vec{\Box}\)</td> <td><span class="inline">ctrl</span> + <span class="inline">alt</span> + <span class="inline">v</span></td>

    </tr>



    <tr>

        <td>\(\begin{pmatrix} \Box & \Box \\ \Box & \Box \end{pmatrix}\)</td> <td><span class="inline">ctrl</span> + <span class="inline">alt</span> + <span class="inline">m</span></td>

    </tr>

</table>



<h2 id="sumprod">和の記号・積の記号</h2>



<p>

    積の記号を使うことはあまりないかもしれませんが、和の記号に関してはショートカットキーがあります。<br>

    「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">u</span>」を押すことにより、入力できます。

</p>



<h2 id="other">その他</h2>



<p>

    ここにあるものは、申し訳ありませんがほとんどキーボードで入力することはできません。<br>

    ただし、「順列・組み合わせ」の部分において、\({}_{\Box}\mathrm{C}_{\Box}\)については、「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">c</span>」を押すことにより、入力できます。

</p>



<h2 id="hayami">キーボードショートカット早見表</h2>



<p>

    以下は、<span class="inline">ctrl</span> + <span class="inline">alt</span>と同時に押すと、何か入力できる場合の一覧表です。

</p>



<table>

    <tr>

        <th>押すキーボード</th> <th>入力できるもの</th> <th>表示されるもの</th>

    </tr>



    <tr>

        <td>f</td> <td>分数(<font color="red">f</font>raction)</td> <td>\(\frac{\Box}{\Box}\)</td>

    </tr>



    <tr>

        <td>l</td> <td>ライプニッツの微分記法(<font color="red">l</font>eibniz)</td> <td>\(\frac{d^{\Box} \Box}{d \Box ^{\Box}}\)</td>

    </tr>



    <tr>

        <td>s</td> <td>平方根(<font color="red">s</font>qrt)</td> <td>\(\sqrt{\Box}\)</td>

    </tr>



    <tr>

        <td>v</td> <td>ベクトル(<font color="red">v</font>ector)</td> <td>\(\vec{\Box}\)</td>

    </tr>



    <tr>

        <td>i</td> <td>不定積分(<font color="red">i</font>ntegral)</td> <td>\(\int \Box d \Box\)</td>

    </tr>



    <tr>

        <td>d</td> <td>定積分(<font color="red">d</font>efinite integral)</td> <td>\(\int_{\Box}^{\Box} \Box d \Box\)</td>

    </tr>



    <tr>

        <td>m</td> <td>行列(<font color="red">m</font>atrix)</td> <td>\(\begin{pmatrix} \Box & \Box \\ \Box & \Box \end{pmatrix}\)</td>

    </tr>



    <tr>

        <td>u</td> <td>総和(s<font color="red">u</font>m)</td> <td>\(\sum_{\Box}^{\Box}\)</td>

    </tr>



    <tr>

        <td>c</td> <td>nCr(n<font color="red">C</font>r)</td> <td>\({}_{\Box}\mathrm{C}_{\Box}\)</td>

    </tr>



    <tr>

        <td>a</td> <td>絶対値(<font color="red">a</font>bsolute value)</td> <td>\(\left| \Box \right|\)</td>

    </tr>

</table>