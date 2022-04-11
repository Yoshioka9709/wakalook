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

                "@id": "https://wakalook.com/documentation?category=formula&content=formuladetails&parts=basiccontent",

                "name": "基本要素"

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

        <li>基本要素</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>基本要素</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=basiccontent#number">数字</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=basiccontent#operator">演算子</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=basiccontent#equal">等号</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=basiccontent#smaller">不等号（小なり）</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=basiccontent#greater">不等号（大なり）</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=basiccontent#fraction">分数</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=formula&content=formuladetails&parts=basiccontent#formulanumber">式番号</a>

</div>



<h2 id="number">数字</h2>



<h3>概要</h3>



<!-- 数字の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/numbers.png">



<p>

    基本的な算用数字を入力することが出来ます。<br>

    ボタンを押すことにより、該当の数字が入力されます。

</p>



<p>

    <span class="inline">.</span>は小数点です。小数点以外に用いることも出来ます。（例：<span class="inline">s.t.</span>）<br>

    <span class="inline">\(\infty\)</span>は無限大を表します。

</p>



<h3>キーボード入力について</h3>



<p>

    算用数字については、キーボードから入力することが出来ます。<br>

    または、テンキーから入力することもできます。<br>

    さらに、小数点はピリオド（<span class="inline">.</span>）を押すことで入力できます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        現状では、無限大をキーボードから入力することはできません。

    </div>

</div>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        テンキーから入力できる記号は、基本的に演算子、小数点及び数字のみです。<br>

        「00」などの特殊な数字は入力できませんのでご注意ください。

    </div>

</div>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        テンキーで数字を入力しても画面がスクロールされるだけで、数字が入力できない場合は、NumLockがOnになっていない場合が考えられます。<br>

        もう一度NumLockが入っているかを確認して、再入力してください。

    </div>

</div>



<h2 id="operator">演算子</h2>



<h3>概要</h3>



<!-- 演算子の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/operator.png">



<p>

    基本的な演算子を入力することが出来ます。<br>

    ボタンを押すことにより、該当の演算子が入力されます。

</p>



<h3>キーボード入力について</h3>



<p>

    以下の演算子については、キーボードから入力できます。

</p>



<ul>

    <li>+</li>

    <li>-</li>

    <li>×</li>

    <li>/</li>

</ul>



<p>

    これ以外については、キーボードから入力することはできません。

</p>



<p>

    なお、×については、アスタリスク（<span class="inline">*</span>）を押すことで入力できます。<br>

    それ以外は、キーボードから該当する記号を押すことで入力できます。

</p>



<h2 id="equal">等号</h2>



<!-- 等号の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/equal.png">



<p>

    基本的な等号を入力することが出来ます。<br>

    ボタンを押すことにより、該当の等号が入力されます。

</p>



<h3>キーボード入力について</h3>



<p>

    <span class="inline">=</span>についてのみ、キーボードから入力することが出来ます。<br>

    これは、「<span class="inline">Shift</span>」+「<span class="inline">-</span>」で入力することが出来ます。

</p>



<h2 id="smaller">不等号（小なり）</h2>



<!-- 不等号（小なり）の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/lt.png">



<p>

    不等号（小なり）を入力することが出来ます。<br>

    ボタンを押すことにより、該当の記号が入力されます。

</p>



<h3>キーボード入力について</h3>



<p>

    <span class="inline">&lt;</span>についてのみ、キーボードから入力することが出来ます。<br>

    これは、「<span class="inline">Shift</span>」+「<span class="inline">,</span>」で入力することが出来ます。

</p>



<h2 id="greater">不等号（大なり）</h2>



<!-- 不等号（大なり）の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/gt.png">



<p>

    不等号（大なり）を入力することが出来ます。<br>

    ボタンを押すことにより、該当の記号が入力されます。

</p>



<h3>キーボード入力について</h3>



<p>

    <span class="inline">&gt;</span>についてのみ、キーボードから入力することが出来ます。<br>

    これは、「<span class="inline">Shift</span>」+「<span class="inline">.</span>」で入力することが出来ます。

</p>



<h2 id="fraction">分数</h2>



<!-- 分数の一覧の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/fraction.png">



<p>

    分数を入力することが出来ます。<br>

    ボタンを押すことにより、分数入力モードに入ります。

</p>



<h3>分数入力モードについて</h3>



<p>

    分数には分子および分母の両方を指定する必要があります。<br>

    そのため、分数を入力する際には、分子と分母の入力を切り替えられる「分数入力モード」に入ります。

</p>



<!-- 分数入力モード時の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/frac_1.png">



<p>

    分数入力モードでは上記の画像のようになります。<br>

    初期の状態で数字を入力すると、以下のようになると思います。

</p>



<!-- 分数入力モードで数字を入力した際の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/frac_2.png">



<p>

    これにより、分子には好きなように数字や数式を入力することが出来ます。<br>

    分子に新たに分数を組み込むこともできます。

</p>



<p>

    また、分数入力モードでは、プレビュー欄の下に、「<span class="inline">入力項目切り替え</span>」ボタンが出現します。<br>

    これを押した後に数字や数式を入力すると、以下のように、分母に数式が入力されるようになります。

</p>



<!-- 分数入力モードで、分母に数字を入力した際の画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/frac_3.png">



<p>

    このようにすることにより、分母にも好きなように数字や数式を入力することが出来ます。<br>

    分子、分母の入力切替は、何度でも行うことが出来ます。

</p>



<p>

    目的の数式を入力後、分数入力モードを抜ける必要があります。<br>

    抜けるためには、ダイアログ下部に存在する「<span class="inline">OK</span>」ボタンを押す必要があります。

    これは、「<span class="inline">ctrl</span>」+「<span class="inline">Enter</span>」で押すことも可能です。

</p>



<div class="warnBlock">

    <div class="warnTitle">注意</div>

    <div class="warnMessage">

        一度分数の編集を終えてしまうと、再び分数の中を編集することはできません。<br>

        分数の編集を終了する場合は、必ず全て入力し終えてからにしてください。

    </div>

</div>



<p>

    また、分数の入力が必要無くなった場合は、ダイアログ下部に存在する「<span class="inline">キャンセル</span>」ボタンを押してください。<br>

    このとき、分数入力モードから抜け出し、その分数も消去されます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        分数入力モードにおいて、「<span class="inline">OK</span>」ボタンを押しても入力モードから出られない場合は、分母または分子に一切数式などが入力されていない場合が考えられます。<br>

        「<span class="inline">OK</span>」ボタンを押す場合には、必ず分母および分子に何かしらの数式を入力してください。

    </div>

</div>



<h3>キーボード入力について</h3>



<p>

    \(\frac{\Box}{\Box}\)については、キーボードで入力することが出来ます。<br>

    「<span class="inline">ctrl</span>」+「<span class="inline">alt</span>」+「<span class="inline">f</span>」を押すことにより、分数入力モードに入ることが出来ます。

</p>



<h2 id="formulanumber">式番号</h2>

<img src="<?php bloginfo("template_url"); ?>/images/docs/formulaNumber.png">



<p>

    問題を解くとき、一度書いた式を引用して、論をより明確にするべき場合があります。<br>

    その場合、一度書いた数式を再び書き直すのはかなり億劫であり、そういった場合は式番号を付与して、採点者に明示することがほとんどです。<br>

    ただし、数式に式番号を付与すると言っても、そのやり方はいくらかあります。<br>

    そういったものを統一した基準で付与するために、式番号機能が存在します。

</p>



<!-- 式番号ダイアログの画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/formulaNumber_1.png">



<p>

    上の画像は、式番号において「<span class="inline">追加編集</span>」を選択した際に出てくるダイアログです。<br>

    ここで、付与する式番号を設定することが出来ます。<br>

</p>



<h3>ピリオドの有無について</h3>



<p>

    式番号のダイアログにおいて、「<span class="inline">式番号にピリオドを含む</span>」と「<span class="inline">式番号にピリオドを含まない</span>」という二つの選択肢を持った項目が存在します。初期値は、「<span class="inline">式番号にピリオドを含まない</span>」です。

    基本的には「<span class="inline">式番号にピリオドを含まない</span>」を選択すればよいのですが、小問一つあたりに出てくる数式が多かったり、教科書のように章立てされている中で大量に数式が出てくるといった場合、(1.1), (1.2), …, (1.9), (1.10), …, (2.1)と言った形で式番号を付与している場合が存在します。<br>

    そのような状況に対応するべく存在するのが、この項目です。

</p>



<p>

    まず仮に、「<span class="inline">式番号にピリオドを含まない</span>」を選択したとします。<br>

    この場合、付与される式番号は(1), (2), (3), …となり、かっこの中身は整数範囲で1ずつ増えて行きます。<br>

    一回目で(1)を付与したとき、二回目設定時では自動的に(2)が候補に設定されます。<br>

    もちろん候補どおりでは無く、「3」や「4」と言った値を設定することも可能です。<br>

    その場合、それに応じて初期値は変更されます。

</p>



<p>

    次に、「<span class="inline">式番号にピリオドを含む</span>」を選択したとします。<br>

    この場合、付与される式番号は(1.1), (1.2), (1.3), …となり、かっこの中身のピリオドより右側にある数字が、整数範囲で1ずつ増えて行きます。<br>

    一回目で(1.1)を付与したとき、二回目設定時では自動的に(1.2)が候補に設定されます。<br>

    「<span class="inline">式番号にピリオドを含まない</span>」場合では、完全に候補に則って式番号を付与してもうまく行きますが、それゆえ、(2.1)や(3.1)などになるタイミングでは、手動で値を設定する必要があります。<br>

    ただし、一度(2.1)に変更すれば、ピリオドの右側の数字は1, 2, 3, …と増えて行きます。

</p>



<div class="warnBlock">

    <div class="warnTitle">注意</div>

    <div class="warnMessage">

        式番号には、数字およびピリオド以外の値を設定することはできません。

    </div>

</div>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        「<span class="inline">式番号にピリオドを含まない</span>」を選択し、ピリオドを含む式番号を入力したり、ピリオドを含まない式番号を入力し、「<span class="inline">式番号をピリオドを含む</span>」を選択すると、候補が適切に表示されない場合があります。<br>

        それ以外の不具合はありませんが、テキストボックスに入力されている値に応じて、適切にボタンを押すことをお勧めします。

    </div>

</div>