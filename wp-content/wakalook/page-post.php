<?php

session_start();
require_once(dirname( __FILE__ ) . "/db/ManagementLogic.php");

if(!isset($_SESSION['login_user'])) {
    header('Location: ' . home_url());
    exit();
}


$user_id = $_SESSION['login_user']['id'];
$title = $_POST['title'];
$backToMypage = $_POST['backToMypage'];

if(isset($_POST['id']) && $_POST['id'] != "") {
    $id = $_POST['id'];
    $images = ManagementLogic::getImagesByPostId($id);
    $length = count($images) + 1;
} else {
    $result = ManagementLogic::createPost($user_id, $title);
    $id = $result['id'];
    $length = 1;
}

if(isset($id)) {
    $post_id = $id;
    $i = 1;
    $flag = true;
    while($flag == true){
        if(isset($_POST['image_' . $i])) {
            $canvas = $_POST['image_' . $i];
            $canvas = preg_replace("/data:[^,]+,/i","",$canvas);
            $canvas = base64_decode($canvas);
            $image = imagecreatefromstring($canvas);

            $dir = dirname( __FILE__ ) . "/images/data/";
            $file_name =  $_SESSION['login_user']['id'] . "_" .  $title . "_" . $i;

            imagesavealpha($image, TRUE); // 透明色の有効
            imagepng($image , $dir . $file_name . '.png');

            $file_name = $file_name . ".png";
            if($i >= $length) {
                ManagementLogic::createImage($post_id,$file_name);
            }
        } else {
            $flag = false;
        }
        $i ++;
    }
    if($backToMypage == "true") header('Location: /mypage?id=' . $_SESSION['login_user']['id']);
    else {
        $newURL = '/edit?id=' . $id;
        $newURL .= ManagementLogic::getAutopwd($_SESSION['login_user']['id'], $id);
        header('Location: ' . $newURL);
    }
    //else header('Location: /edit?id=' . $id);
    exit();
} else {
    echo("エラー");
}
?>