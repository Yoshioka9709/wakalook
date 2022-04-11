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

                "@id": "https://wakalook.com/documentation?category=utility",

                "name": "ユーティリティ"

            }

        }]

    }

</script>



<!-- パンくずリスト -->

<nav>

    <ol class="breadcrumbs">

        <li><a class="breadLink" href="<?php bloginfo("home_url"); ?>/documentation">ドキュメンテーショントップ</a></li>

        <li>ユーティリティ</li>

    </ol>

</nav>



<!-- 更新日時 -->

<p class="loadDate">更新日時: 2022/4/2</p>



<!-- コンテンツ -->



<h1>ユーティリティ</h1>



<!-- 目次 -->

<div class="tableOfContents">

    <div class="titleTableOfContents">目次</div>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#addcanvas">キャンバスを追加する</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#clear">全消去のしかた</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#undo">元に戻す</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#redo">やり直す</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#calculationsheet">計算用紙を使う</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#share">ファイルを共有する</a>

    <a class="linkTableOfContents" href="<?php bloginfo("home_url"); ?>/documentation?category=utility#save">ファイルを保存する</a>

</div>



<h2 id="addcanvas">キャンバスを追加する</h2>



<p>

    横幅が狭い時は、ブラウザの幅を拡げることによって大きくすることが出来ますが、これによって拡げられる大きさは限られています。<br>

    ただし、縦方向であれば、描きたい分だけ拡げることができます。<br>

    そのための手段として、キャンバスを追加するという方法があります。

</p>



<!-- キャンバス追加ボタンを挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/addcanvas.png">



<p>

    上のボタンがキャンバス追加ボタンです。これをクリックすると、キャンバスを追加できます。<br>

    追加したキャンバスと元のキャンバスの間には、枠線が引かれていますが、枠線を飛び越えて描画できます。<br>

    これにより、事前にいくつかキャンバスを追加しておけば、いかに縦長の画像や数式でも、貼り付けることができるようになっています。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        現状では、追加したキャンバスを削除することはできません。

    </div>

</div>



<h2 id="clear">全消去のしかた</h2>



<p>

    色々描いた後に、その内容を全て消したいとなったとき、もちろん全面に消しゴムをかけてもいいですが、「全消去」をすることにより、簡単に消すことが出来ます。

</p>



<!-- 全消去ボタンを挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/clear.png">



<p>

    上のボタンが全消去ボタンです。これをクリックすると、以下のようなダイアログが出てきます。

</p>



<!-- ダイアログの画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/clearDialog.png">



<p>

    ここで「はい」を押すと、コンテンツを全て消すことが出来ます。<br>

    もちろん「いいえ」を押せば、その操作は取り消されます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        間違えて消してしまった場合も安心してください。<br>

        この後に出てくる「元に戻す」機能を使えば、簡単に復元できます。

    </div>

</div>



<h2 id="undo">元に戻す</h2>



<p>

    一度描いたけど元に戻したいとか、先ほどの「全消去」ボタンで間違えて全消去してしまうこともあると思います。<br>

    その時にこの「元に戻す」を使うことにより、先ほどまでの段階に戻ることが出来ます。

</p>



<!-- 元に戻すボタンを挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/undo.png">



<p>

    上のボタンが元に戻すボタンです。これをクリックすると、直前の状態に戻ることが出来ます。<br>

    なお、「元に戻す」にはショートカットキーがあります。<br>

    「<span class="inline">ctrl</span>」 + 「<span class="inline">z</span>」で行うことが出来ます。

</p>



<h2 id="redo">やり直す</h2>



<p>

    先ほどの「元に戻す」と対応している操作です。これは、「元に戻す」を行ったあとに、「消しすぎた」といったことや、間違えて「元に戻す」を行ったときに「やり直す」と消えた・描いた内容が取り消されます。

</p>



<!-- やり直すボタンを挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/redo.png">



<p>

    上のボタンがやり直すボタンです。これをクリックすると、直前に元に戻した内容を再び行うことが出来ます<br>

    なお、「やり直す」にはショートカットキーがあります。<br>

    「<span class="inline">ctrl</span>」+「<span class="inline">y</span>」で行うことが出来ます。

</p>



<h2 id="calculationsheet">計算用紙を使う</h2>



<p>

    ペーパーレス化が叫ばれて久しいですが、それでも勉強には紙が必要です。<br>

    その大きな理由の一つとして、計算とかをしたくなったときの雑紙を用意したくなることだと思っています。<br>

    そのため、清書用のページともう一つ、計算用のページを用意することが出来ます。

</p>



<!-- 計算用紙作成ボタンを挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/calculation.png">



<p>

    上のボタンが計算用紙作成ボタンです。これをクリックすると、新しいタブが開き、似たような表示のページが出てきます。<br>

    その新しく出てきたページが計算用紙です。一番分かりやすい違いは、左上にWakalookのロゴが存在しないことだと思います。

</p>



<!-- 清書用ページの画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/editpage.png">



<!-- 計算用ページの画像を挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/calculationPage.png">



<p>

    上の画像が清書用のページで、下の画像が計算用のページです。<br>

    清書用のページで出来て、計算用のページでできないことは、以下の通りです。

</p>



<ul>

    <li>保存</li>

    <li>共有</li>

</ul>



<p>

    保存はできないので、本当に一時的なページと思ってください。<br>

    また、共有もできないので、自分専用で、好きに使うことのページになります。

</p>



<h2 id="share">ファイルを共有する</h2>



<p>

    Webアプリの強みの一つとして、アプリを使える環境にある状況なら、どこでも誰でもこのアプリにアクセスすることが出来ることを意味します。<br>

    それゆえ、紙を使って成果を共有する場合と違って、いつ、どこで、誰とでも、描いたものを共有することができます。<br>

    このため、このアプリの大きな機能の一つとして、共有機能が存在しています。

</p>



<!-- 共有ボタンを挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/share.png">



<p>

    上のボタンが共有ボタンです。これをクリックすると、共有のためのURLがクリップボードにコピーされます。<br>

    これを他の人に共有することで、ドキュメントを共有することが出来ます。

</p>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        現状では、共有されたファイルを編集し、その内容を保存することはできません。<br>

        あくまでファイルを編集し、その内容を保存することができるのは、そのファイルの作成者のみです。

    </div>

</div>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        共有ボタンは、ファイルを保存した後のみ表示されます。<br>

        ボタンが表示されていない場合は、いったんファイルを保存してから確認してください。<br>

        なお、保存しないファイルを共有することはできません。<br>

        ファイルの保存方法は、次の項をご覧ください。

    </div>

</div>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        共有内容を見られる相手は、当アプリのアカウントを持ち、なおかつ当アプリにログインしている人のみとなります。<br>

        ファイルを共有する場合は、相手にもアカウントを作成してもらうようにしてください。

    </div>

</div>



<h2 id="save">ファイルを保存する</h2>



<p>

    一度作成したファイルは、保存してしかるべき時に他の人に共有しましょう。<br>

    例えば、先述の「共有ボタン」を押し、共有URLを先生に送れば、その答案に対して意見を言ってくれるでしょう。<br>

    さらに、一度保存したファイルは、もちろんこの後も閲覧し、かつ編集し直すこともできます。

</p>



<!-- 保存ボタンを挿入 -->

<img src="<?php bloginfo("template_url"); ?>/images/docs/save.png">



<p>

    上のボタンが保存ボタンです。これをファイルを作成したのち初めてクリックすると、ファイル名を聞かれます。<br>

    それを入力し、OKボタンを押すと保存されます。<br>

    クリックが二回目以降ならば、間に何も挟まずに、保存されます。

</p>



<div class="warnBlock">

    <div class="warnTitle">注意</div>

    <div class="warnMessage">

        ファイルを保存せずにロゴボタンを押すと「ファイルを保存しますか」といった確認ダイアログが出ますが、ファイルを保存せずにタブを閉じると、そのまま消えてしまいます。<br>

        今後も編集したり閲覧する予定のあるファイルの場合は、一度ファイルを保存してから閉じてください。

    </div>

</div>



<div class="infoBlock">

    <div class="infoTitle">info</div>

    <div class="infoMessage">

        ファイル保存後に「元に戻す」を実行すると、全てがまとめて消えてしまいます。<br>

        そのため、パーツごとに「元に戻す」を実行する可能性がある場合は、保存せずに編集を行ってください。

    </div>

</div>