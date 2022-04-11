<?php

session_start();
require_once(dirname( __FILE__ ) . "/db/ManagementLogic.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = ManagementLogic::getPostById($id);

    if($post['user_id'] ==  $_SESSION['login_user']['id']) {
        $images = ManagementLogic::getImagesByPostId($id);
        $result = ManagementLogic::deletePost($id);
        if($result) {
            $result =  ManagementLogic::deleteImages($id);
            if($result) {
                forEach($images as $image) {
                    echo($image['file_name']);

                    $file_name =  dirname( __FILE__ ) . "/images/data/" . $image['file_name'];
                    unlink($file_name);
                }
                header('Location: /mypage?id=' . $_SESSION['login_user']['id']);
                exit();
            }
        }
    }
}


?>