<?php

session_start();
require_once(dirname( __FILE__ ) . "/db/UserLogic.php");

$err = [];

$userName = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_conf = $_POST['password_conf'];

$_SESSION['userName'] = $_POST['userName'];
$_SESSION['email'] = $_POST['email'];

//nullチェック
if (empty($userName)) {
    $err['userName'] = 'お名前を入力してください';
}
if (empty($email)) {
    $err['email'] = 'メールアドレスを入力してください';
} else {
    //emailの重複確認
    $emails = UserLogic::checkUser();

    foreach($emails as $val) {
        if($val['email'] == $email) {
            $err['email'] = 'このメールアドレスはすでに登録されています';
        }
    }
}
if (empty($password)) {
    $err['password'] = 'パスワードを入力してください';
}
if (empty($password_conf)) {
    $err['password_conf'] = '確認用パスワードを入力してください';
} else {
    if($password_conf != $password) {
        $err['password_conf'] = '確認用パスワードとパスワードが一致しません';
    }
}
if (count($err) > 0) {
    $_SESSION['err'] = $err;
    header( "location: " . home_url() . "/register_form");
    exit();
}

//会員登録処理
if(UserLogic::createUser($userName,$email,$password)) {
    if(!UserLogic::login($email, $password)) {
        $err['password'] = 'エラーが発生';
        $_SESSION['err'] = $err;
        header( "location: " . home_url() .'/register_form');
        exit;
    } else {
        header( "location: " . home_url());
        exit();
    }
}

?>