<?php

session_start();
require_once(dirname( __FILE__ ) . "/db/UserLogic.php");

$err = [];

$email =  $_POST['email'];
$password =  $_POST['password'];

$_SESSION['email'] = $_POST['email'];

//nullチェック
if (empty($email)) {
    $err['email'] = 'メールアドレスを入力してください';
}
if (empty($password)) {
    $err['password'] = 'パスワードを入力してください';
}

if (count($err) > 0) {
    $_SESSION['err'] = $err;
    header( "location: " . home_url() .'/login_form');
    exit;
}

//ログイン処理
$result = UserLogic::login($email, $password);

if(!$result) {
    $err['email'] = 'メールアドレスかパスワードが違います';
    $_SESSION['err'] = $err;
    header( "location: " . home_url() .'/login_form');
    exit;
}

header( "location: " . home_url().'/mypage?id='.$_SESSION['login_user']['id']);
exit();

?>
