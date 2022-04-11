<?php
$title = "-ログイン";
get_header();
?>
<section id="only">
このサイズでは表示できません。<br>
画面の幅を広げてください。
</section>
<section id="WakaLook">

<h1 id="loginTitle">パスワードを忘れたら</h1>

<table class="ta1">
<tr>
<th>登録したメールアドレス</th>
<td><input type="text" name="メールアドレス" size="30" class="ws"></td>
</tr>
<tr>
<th>秘密の質問の回答</th>
<td><input type="text" name="秘密の質問" size="30" class="ws"></td>
</tr>
</table>
<br>
<div id="loginButton">
  <a href="" class="btn btn--orange">認証</a>
</div>
<br><br><br><br><br>

<?php
get_footer()?>
</section>
</body>
</html>