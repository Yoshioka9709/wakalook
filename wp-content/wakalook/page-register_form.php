<?php

session_start();

if(isset($_SESSION['login_user'])) {
   header('Location:' . home_url());
   exit();
}

if(!empty($_SESSION['err'])) {
   $err = $_SESSION['err'];
}
if(!empty($_SESSION['userName'])) {
   $userName = $_SESSION['userName'];
}
if(!empty($_SESSION['email'])) {
   $email = $_SESSION['email'];
}

unset($_SESSION['err']);

?>

<?php $title = "-新規会員登録"; get_header(); ?>

<section id="only">
このサイズでは表示できません。<br>
画面の幅を広げてください。
</section>
<section id="WakaLook">


<h1 id="loginTitle">新規会員登録</h1>

<div class=loginReport>
   <p>会員登録をすることで、WakaLookを無料で利用することができます。</p>
   <p>※複雑なパスワードを設定することで、他ユーザーの不正利用を防ぐことができます。</p>
</div>

<form action="/register" method="post">

<table class="ta1">
<tr>
<th>お名前</th>
<td><input type="text" name="userName" size="30" class="ws" value="<?php if(!empty($_SESSION['userName'])) {echo $userName;}?>"></td>
<?php if (isset($err['userName'])) : ?>
  <td><span class="err"><?php echo $err['userName'] ?></span></td>
<?php endif ; ?>
</tr>
<tr>
<th>メールアドレス</th>
<td><input name="email" type="text" size="30" value="<?php if(!empty($_SESSION['email'])) {echo $email ; } ?>"></td>
<?php if (isset($err['email'])) : ?>
   <td><span class="err"><?php echo $err['email'] ?></span></td>
<?php endif ; ?>
</tr>
<tr>
<th>パスワード</th>
<td><input name="password" type="text" size="30"></td>
<?php if (isset($err['password'])) : ?>
   <td><span class="err"><?php echo $err['password'] ?></span></td>
<?php endif ; ?>
</tr>
<tr>
<th>パスワード（確認用）</th>
<td><input name="password_conf" type="text" size="30"></td>
<?php if (isset($err['password_conf'])) : ?>
   <td><span class="err"><?php echo $err['password_conf'] ?></span></td>
<?php endif ; ?>
</tr>
</table>

<div id="loginButton">
   <input type="submit" value="登録" class="btn btn--orange">
</div>

</form>

<div class=loginReport2>
   <p>パスワードは忘れないようにメモ等で保管することを推奨します。</p>
</div>


<?php
get_footer()?>
</section>
</body>
</html>