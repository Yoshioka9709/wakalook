<?php



session_start();



if(isset($_SESSION['login_user'])) {

  header('Location:' . home_url());

  exit();

}



if(!empty($_SESSION['err'])) {

  $err = $_SESSION['err'];

}

if(!empty($_SESSION['email'])) {

  $email = $_SESSION['email'];

}



unset($_SESSION['err']);



?>



<?php $title = "-ログイン"; get_header(); ?>



<section id="only">

このサイズでは表示できません。<br>

画面の幅を広げてください。

</section>

<section id="WakaLook">



<h1 id="loginTitle">ログイン</h1>



<form action="/login" method="post">



<table class="ta1">

<tr>

<th>メールアドレス</th>

<td><input type="text" name="email" size="30" class="ws" value="<?php if(!empty($_SESSION['email'])) {echo $email;}?>"></td>

<?php if (isset($err['email'])) : ?>

  <td><span class="err"><?php echo $err['email'] ?></span></td>

<?php endif ; ?>

</tr>

<tr>

<th>パスワード</th>

<td><input type="password" id="textPassword" name="password" size="30" class="ws" autocomplete="off"></td>

<?php if (isset($err['password'])) : ?>

  <td><span class="err"><?php echo $err['password'] ?></span></td>

<?php endif ; ?>

<td><input type="button" id="buttonPassword" value="表示" onclick="buttonClickPass();">
  <script language="javascript">
    function buttonClickPass() {
      var txtPass = document.getElementById("textPassword");
      var btnPass = document.getElementById("buttonPassword");
      if(txtPass.type == "text") {
        txtPass.type = "password";
        btnPass.value = "表示";
      } else {
        txtPass.type = "text";
        btnPass.value = "非表示";
      }
    }
  </script>
</td>

</tr>

</table>

<br>

<div id="loginButton">

  <input class="btn btn--orange" type="submit" value="ログイン">

</div>

<div id="loginButton">

  <a href="<?php bloginfo("home_url"); ?>/loginforget"class="btn2">パスワードを忘れたら</a>

</div>



</form>



<br><br><br><br><br>







<?php

get_footer()?>

</section>

</body>

</html>