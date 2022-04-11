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

                "@id": "https://wakalook.com/documentation?category=formula&content=formulaquickuse",

                "name": "数式の簡単な貼り方"

            }

        }]

    }

</script>



<!-- パンくずリスト -->

<nav>

    <ol class="breadcrumbs">

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation">ドキュメンテーショントップ</a></li>

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation?category=formula">数式</a></li>

        <li>数式の簡単な貼り方</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>数式の簡単な貼り方</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulaquickuse#steps">試しに貼り付ける</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formulaquickuse#complex">複雑な数式を入力する</a>

</div>



<h2 id="steps">試しに貼り付ける</h2>



<p>\[75+25=100\]</p>



<p>

    まずは、上の数式を入力してみましょう。

</p>



<p>

    はじめに、「数式入力ダイアログ」を開きます。<br>

    <span class="inline">コンテンツ挿入</span>」のところから「数式入力」とあるボタンをクリックします。

</p>



<!-- ここに、数式ダイアログの画像を挿入する -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/formulaDialog.png">



<p>

    そうすると、上記のダイアログが出現します。<br>

    タブのところで「<span class="inline">基本要素</span>」を選択すると、数字や演算子があると思います。<br>

    これで、「<span class="inline">7</span>」→「<span class="inline">5</span>」→「<span class="inline">+</span>」→「<span class="inline">2</span>」→「<span class="inline">5</span>」→「<span class="inline">=</span>」→「<span class="inline">1</span>」→「<span class="inline">0</span>」→「<span class="inline">0</span>」と押すと、プレビューに「<span class="inline">75+25=100</span>」と出てくると思います。<br>

    ところで、「<span class="inline">7</span>」, 「<span class="inline">5</span>」, 「<span class="inline">2</span>」, 「<span class="inline">1</span>」, 「<span class="inline">0</span>」は全て数字、「<span class="inline">+</span>」は演算子、「<span class="inline">=</span>」は等号カテゴリーにあります。

</p>



<p>

    もし間違えてボタンを押してしまったときは、「<span class="inline">一文字消去</span>」ボタンを押してください。<br>

    ただし、「<span class="inline">分数</span>」や「<span class="inline">平方根</span>」など、「<span class="inline">一文字消去</span>」を押しても消えないものがあります。<br>

    その場合は、ダイアログ下部にある「<span class="inline">キャンセル</span>」ボタンを押してください。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        「<span class="inline">一文字消去</span>」を押しても消えないものは、ダイアログ左上のメッセージが「<span class="inline">数式を入力する</span>」ではないものです。<br>

        「<span class="inline">一文字消去</span>」ボタンは、「<span class="inline">平方根</span>」や「<span class="inline">分数</span>」そのものを消すことはできませんが、「<span class="inline">平方根</span>」の中や「<span class="inline">分数</span>」の中にある数式の内容を消すことはできます。

    </div>

</div>



<p>

    入力を終えたら、ダイアログ下部にある「<span class="inline">OK</span>」ボタンを押してください。<br>

    そうすると、先ほど入力した数字がスタンプのようになって、マウスについてきます。<br>

    あとは貼り付けたい場所をクリック（タップ）するだけで完了です。<br>

    必要に応じて、「<span class="inline">数式入力</span>」ボタンの下にあるテキストボックスの値を変更すれば、数式の大きさを変更することもできます。

</p>



<p>

    また、今の数式は、キーボードだけでも入力することが出来ます。<br>

    ダイアログを開いた状態で、「<span class="inline">7</span>」キーをクリックすると、<span class="inline">7</span>が出てきます。<br>

    同様に、「<span class="inline">5</span>」キーを押すと、<span class="inline">5</span>が出てきます。<br>

    「<span class="inline">+</span>」は、テンキーの「<span class="inline">+</span>」キーでも良いですし、キーボードの「<span class="inline">+</span>」、すなわち「<span class="inline">Shift</span>」+「<span class="inline">;</span>」キーでも入力できます。<br>

    同様に「<span class="inline">2</span>」、「<span class="inline">5</span>」を入力してください。<br>

    「<span class="inline">=</span>」は、テンキーの「<span class="inline">=</span>」キーでも良いですし、キーボードの「<span class="inline">=</span>」、すなわち「<span class="inline">Shift</span>」+「<span class="inline">-</span>」キーでも入力できます。<br>

    同様に「<span class="inline">1</span>」、「<span class="inline">0</span>」、「<span class="inline">0</span>」と入力してください。<br>

    あとは、「<span class="inline">OK</span>」ボタンを押して、先ほどと同様に入力できます。「<span class="inline">OK</span>」ボタンは、「<span class="inline">ctrl(command)</span>」+「<span class="inline">Enter</span>」で押すことも出来ます。

</p>



<hr>



<p>\[\frac{1}{2} + \frac{1}{3} = \frac{1 \times 3 + 1 \times 2}{2 \times 3} = \frac{3 + 2}{6} = \frac{5}{6}\]</p>



<p>

    次は、上の数式を入力してみましょう。<br>

    先ほどと同様に「数式入力ダイアログ」を開きます。

</p>



<p>

    次に、分数を入力します。「<span class="inline">基本要素</span>」のところで、「<span class="inline">分数</span>」のところにある、\(\frac{\Box}{\Box}\)を選択します。<br>

    これを選択すると、以下のようになります。

</p>



<!-- 分数を入力する直前の画像を挿入する -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/frac_1.png">



<p>

    分数では、黒色になっている部分を編集することが出来ます。<br>

    例えば、上記の画像では分子を編集することが出来ます。<br>

    ここでは、先ほどの<span class="inline">75 + 25</span>のような数式も入力することが出来ますし、さらに分数を入力することもできます。<br>

    ここでは、\(\frac{1}{2}\)を入力したいので、<span class="inline">1</span>を入力します。

</p>



<p>

    次に、分母を入力します。分母を入力するには、「<span class="inline">入力項目切り替え</span>」ボタンを押します。<br>

    そうすることにより、入力のフォーカスが分母に移動します。<br>

    フォーカスが分母に移動したところで、<span class="inline">2</span>を入力します。<br>

    これで分数の入力は完了なので、「<span class="inline">OK</span>」ボタンを押します。そうすると、分数の色が全て黒色になります。

</p>



<div class="warnBlock">

    <div class="warnTitle">注意</div>

    <div class="warnMessage">

        一度分数の編集を終えてしまうと、再び分数の中を編集することはできません。<br>

        分数の編集を終了する場合は、必ず全て入力し終えてからにしてください。

    </div>

</div>



<p>

    以後上記と同様に、「<span class="inline">+</span>」を入力し、また\(\frac{1}{3}\)を入力します。<br>

    そして、「<span class="inline">=</span>」を入力します。

</p>



<p>

    次に、分子および分母が1文字でない場合の分数を入力します。<br>

    ただし、これは1文字の場合の入力方法と変わりません。<br>

    先ほどと同様に分数のボタン(\(\frac{\Box}{\Box}\))を押し、分子に「<span class="inline">1 × 3 + 1 × 2</span>」と入力し、分母に「<span class="inline">2 × 3</span>」と入力してください。<br>

    ちなみに、「<span class="inline">×</span>」は、演算子のところにあります。

</p>



<p>

    以後はこれまでと同様に入力していけば、完成させることが出来ます。

</p>



<p>

    また、今の数式も、キーボードのみで入力することが出来ます。<br>

    まず、先ほどと同様にダイアログを開きます。<br>

    次に、「<span class="inline">ctrl(command)</span>」+「<span class="inline">alt</span>」+「<span class="inline">f</span>」を押します。<br>

    そうすると、分数の型が出現します。そこに、先ほどと同様に<span class="inline">1</span>や<span class="inline">2</span>, <span class="inline">3</span>を入力します。

</p>



<p>\[\frac{1}{2} + \frac{1}{3} = \frac{1}{\Box}\]</p>



<p>

    上述の通りキーボードで入力すると、ここまで入力できるかと思います。<br>

    \(\times\)ですが、「<span class="inline">*</span>」キーを押すことによって入力できます。<br>

    これは、テンキーの「<span class="inline">*</span>」でも良いですし、キーボードの「<span class="inline">Shift</span>」+「<span class="inline">:</span>」キーでも入力できます。<br>

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        <span class="inline">\(\times\)</span>をキーボードで打つことは可能ですが、<span class="inline">\(\div\)</span>をキーボードで打つことは現状できません。<br>

        この場合は、必要に応じてボタンをクリックしてください。

    </div>

</div>



<p>

    残りも同様に入力を進めていくと、キーボードのみで、この数式を入力することが出来ます。

</p>



<h2 id="complex">複雑な数式を入力する</h2>



<p>\[V = - L \frac{\Delta I}{\Delta t}\]</p>



<p>

    次に、上の数式を入力してみましょう。文字ばかりの数式ですが、Wakalookではこのような数式も簡単に入力することが出来ます。

</p>



<p>

    文字を入力する場合は、「<span class="inline">未知数</span>」を選択して下さい。<br>

    当アプリで入力できる文字は、現状では全てここに入っています。

</p>



<p>

    まず、\(V\)を入力してみましょう。これは、「<span class="inline">アルファベット（大文字）</span>」のところにあります。<br>

    クリックすると、確かに入力されます。「<span class="inline">=</span>」は先ほどと同様に入力してください。<br>

    次に、「<span class="inline">-</span>」を入力しましょう。これは「<span class="inline">基本要素</span>」の「<span class="inline">演算子</span>」にあります。<br>

    これは引き算の時に使用される<span class="inline">-</span>でもありますが、このように符号としても利用することが出来ます。<br>

    次に、\(L\)を入力してみましょう。先ほど選択した「<span class="inline">アルファベット（大文字）</span>」のところにあります。<br>

</p>



<p>

    ここからは、分数を用いて表記していきます。<br>

    先ほどと同様に、「分数」を入力しましょう。

</p>



<p>\[V = - L \frac{\Box}{\Box}\]</p>



<p>

    上記のように入力できたら、まず分子から入力します。<br>

    \(\Delta\)は変化量などで割合よく使われる文字なので、「<span class="inline">よく使われるギリシャ文字</span>」のところにあります。<br>

    もちろん、「<span class="inline">よく使われるギリシャ文字</span>」から探すのが面倒だったら、「<span class="inline">ギリシャ文字（大文字）</span>」にもあります。<br>

    これをクリックして入力しましょう。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        現状では、「よく使われる○○」の内容を変更することはできません。

        今後実装予定ですので少々お待ちください。

    </div>

</div>



<p>

    次の\(I\)は、先ほどと同様に「<span class="inline">アルファベット（大文字）</span>」から入力することが出来ます。<br>

    そして、「<span class="inline">入力項目切り替え</span>」で分母にフォーカスを移します。<br>

    そして、「<span class="inline">よく使われるギリシャ文字</span>」から、「\(\Delta\)」を再び入力しましょう。<br>

    最後に、「<span class="inline">アルファベット（小文字）</span>」から「<span class="inline">t</span>」を入力し、「<span class="inline">OK</span>」ボタンを押して完成です。

</p>



<p>

    もちろん、これもほとんどキーボードで入力することが出来ます。<br>

    \(V\), \(L\), \(I\), \(t\)といったアルファベットは、すべてキーボードでそのまま入力することが出来ます。<br>

    （大文字は「<p class="inline">Shift」キーを押して入力してください。）<br>

    また、\(-\)に関しても、キーボードまたはテンキーの「<span class="inline">-</span>」キーで入力することが出来ます。

</p>



<p>\[V = - L \frac{\Box}{\Box}\]</p>



<p>

    これらのことを用いると、上の数式まで入力することが出来ると思います。<br>

    ただ、申し訳ありませんが、ギリシャ文字に関してはキーボードで入力する方法が現状ありません。<br>

    こちらについては、従来通りボタンをクリックして入力してください。

</p>



<hr>



<p>\[V = \frac{1}{\omega C} I_{0} \sin (\omega t - \frac{\pi}{2})\]</p>



<p>

    次は、上記の数式の入力方法です。<br>

    こちらについても、これまでの入力方法とほぼ同様になります。

</p>



<p>

    \(V\), \(=\)および分数に関しては、これまでの入力方法と同様です。<br>

    また、\(\omega\)に関しては、「<span class="inline">よく使われるギリシャ文字</span>」から選択することが出来ます。<br>

    \(C\)については、「<span class="inline">アルファベット（大文字）</span>」から選択してください。

</p>



<p>\[V = \frac{1}{\omega C}\]</p>



<p>

    上記まで入力されたことと思います。<br>

    次に、\(I_{0}\)の入力方法です。<br>

    まず、\(I\)を入力してください。入力の仕方は先述のものと同様です。<br>

    次に、「<span class="inline">指数</span>」のところを選び、「<span class="inline">添字</span>」の\(\Box_{\Box}\)をクリックしてください。<br>

    そうすると、\(I\)の右下に、小さな□が現れると思います。この状態で「<span class="inline">0</span>」を入力して、「<span class="inline">OK</span>」ボタンを押してください。<br>

    こうすることで、下付き文字（添字）を入力することが出来ます。

</p>



<p>

    次に、\(\sin\)の入力の仕方です。<br>

    「<span class="inline">関数</span>」を選択し、その中の「<span class="inline">三角関数</span>」から、\(\sin \Box\)を選択してください。<br>

    そうすると、\(\sin\)のみ入力されます。あとは、その直後に数式を入力すると、\(\sin\)と数式の間に適切な距離を取って入力されます。<br>

    なお、かっこに関しては、「<span class="inline">かっこ</span>」の「<span class="inline">よく使う括弧</span>」から選択することが出来ます。<br>

    ここにおける\(\pi\)については、「<span class="inline">よく使われるギリシャ文字</span>」から選択することが出来ます。

</p>



<p>

    ここで、キーボードで入力することが出来るのは、ギリシャ文字以外のところ全てです。<br>

    そのうち、添字の部分とかっこだけお伝えしていないと思うのでお伝えします。<br>

    まず、\(I\)を入力するところまでは同じです。そこで、「<span class="inline">_</span>」を入力してください。<br>

    「<span class="inline">_</span>」については、「<span class="inline">Shift</span>」+「<span class="inline">\</span>」で入力できます。<br>

    こうすることにより、添字の入力モードに入れます。<br>

    かっこ（丸括弧）については、「<span class="inline">Shift</span>」+「<span class="inline">8</span>」で始めのかっこ、「<span class="inline">Shift</span>」+「<span class="inline">9</span>」で終わりのかっこを入力することが出来ます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        現状では、かっこ内の数式の大きさにより、かっこのサイズを調整することはできません。

    </div>

</div>



<hr>



<p>\[\forall \varepsilon \gt 0, \ \exists \delta \gt 0 \mathrm{s.t.} \forall x \in \mathbb{R}, \  0 \lt |x - a| \lt \delta \rightarrow |f(x) - b| \lt \varepsilon\]</p>



<p>

    最後に、上記の式の入力方法です。<br>

    \(\forall\)は、「<span class="inline">その他</span>」の「<span class="inline">論理記号</span>」にあります。これを押してください。<br>

    \(\varepsilon\)については、「<span class="inline">未知数</span>」の「<span class="inline">よく使われるギリシャ文字</span>」にあります。<br>

    \(\gt\)については、「<span class="inline">基本要素</span>」の「<span class="inline">不等号（大なり）</span>」にあります。これを押してください。<br>

    \(,\)については、「<span class="inline">その他</span>」の「<span class="inline">点</span>」にあります。<br>

    空白については、「<span class="inline">空白を空ける</span>」ボタンを押してください。<br>

    \(\exists\)は、「<span class="inline">その他</span>」の「<span class="inline">論理記号</span>」にあります。これを押してください。<br>

    \(\delta\)については、「<span class="inline">未知数</span>」の「<span class="inline">よく使われるギリシャ文字</span>」にあります。<br>

</p>



<p>\[\forall \varepsilon \gt 0, \ \exists \delta \gt 0\]</p>



<p>

    ここまで入力されていると思います。<br>

    次に、\(\mathrm{s.t.}\)の入力方法です。<br>

    ここでは、アルファベットは斜体ではないので、先ほどのアルファベットとは違うところを使います。<br>

    「<span class="inline">未知数</span>」の「<span class="inline">アルファベット（小文字ローマン体）</span>」の中から\(\mathrm{s}\)および\(\mathrm{t}\)を選択してください。<br>

    また、\(.\)については、意味こそ違うように感じますが、「<span class="inline">基本要素</span>」の「<span class="inline">数字</span>」のところにある\(.\)を選択してください。<br>

    これは本来小数点のために用いられるものですが、このように用いても差支えありません。<br>

    \(\forall\)は先ほどと同様に入力してください。<br>

    \(x\)は、「<span class="inline">未知数</span>」の「<span class="inline">よく使われるアルファベット</span>」にあります。<br>

    \(\in\)は、「<span class="inline">その他</span>」の「<span class="inline">集合</span>」にあります。<br>

    \(\mathbb{R}\)は、「<span class="inline">その他</span>」の「<span class="inline">中抜き文字</span>」にあります。<br>

    \(,\)は先ほどと同様に入力してください。<br>

    空白も、先ほどと同様に入力してください。<br>

    \(\lt\)については、「<span class="inline">基本要素</span>」の「<span class="inline">不等号（小なり）</span>」にあります。これを押してください。<br>

</p>



<p>\[\forall \varepsilon \gt 0, \ \exists \delta \gt 0 \mathrm{s.t.} \forall x \in \mathbb{R}, \ 0 \lt\]</p>



<p>

    ここまで入力されていると思います。<br>

    次に、\(|x-a|\)の入力方法です。<br>

    「<span class="inline">かっこ</span>」の「<span class="inline">数式を囲むパーツ</span>」のところに、\(|\Box|\)があります。これを押してください。<br>

    そうすると、分数の時と同様に、\(\Box\)だけ黒色になり、絶対値の部分が灰色になると思います。<br>

    ここで、\(x-a\)を入力するとうまく出来ます。<br>

    \(x\)および\(a\)については、「<span class="inline">未知数</span>」の「<span class="inline">よく使われるアルファベット</span>」にあります。<br>

    また、\(-\)については、「<span class="inline">基本要素</span>」の「<span class="inline">演算子</span>」のところにあります。<br>

    ここまで入力を終えたら、「<span class="inline">OK</span>」ボタンを押して、絶対値の入力モードから抜けてください。<br>

    \(\lt\)は「<span class="inline">基本要素</span>」の「<span class="inline">不等号（小なり）</span>」にあります。<br>

    \(\delta\)は「<span class="inline">未知数</span>」の「<span class="inline">よく使われるギリシャ文字</span>」にあります。<br>

    \(\rightarrow\)は「<span class="inline">その他</span>」の「<span class="inline">矢印</span>」にあります。

</p>



<p>\[\forall \varepsilon \gt 0, \ \exists \delta \gt 0 \mathrm{s.t.} \forall x \in \mathbb{R}, \  0 \lt |x - a| \lt \delta \rightarrow\]</p>



<p>

    ここまで入力されていると思います。<br>

    次に、\(|f(x)-b|\)の入力方法です。<br>

    まず先ほどと同じように、「<span class="inline">かっこ</span>」の「<span class="inline">数式を囲むパーツ</span>」から、\(|\Box|\)を選択します。<br>

    \(f(x)\)に関しては、「f」→「(」→「x」→「)」と入力する方法を用います。<br>

    アルファベットについては、「<span class="inline">未知数</span>」の「<span class="inline">アルファベット（小文字）</span>」から、かっこについては、「<span class="inline">かっこ</span>」の「<span class="inline">よく使う括弧</span>」から選択することが出来ます。

    \(-\)に関しては、「<span class="inline">基本要素</span>」の「<span class="inline">演算子</span>」から選択できます。<br>

    \(b\)に関しては、「<span class="inline">未知数</span>」の「<span class="inline">よく使われるアルファベット</span>」にあります。<br>

    なお、\(\lt\)は「<span class="inline">基本要素</span>」の「<span class="inline">不等号（小なり）</span>」にあり、\(\varepsilon\)は「<span class="inline">未知数</span>」の「<span class="inline">よく使われるギリシャ文字</span>」にあります。

</p>



<p>

    他の入力方法については、サイドメニューから他のページをご覧ください。

</p>