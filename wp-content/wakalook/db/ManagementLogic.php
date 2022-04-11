<?php

require_once(dirname( __FILE__ ). "/dbconnect.php");
ini_set('display_errors', true);

class ManagementLogic {
    /**
     * ユーザデータをすべて取得する
     */
    public static function checkLogin() {
        $result = false;
        if(!empty($_SESSION['login_user'])){
            $result = true;
        }
        return $result;
    }

    public static function getUsers() {
        $sql = "SELECT * FROM user";

        try {
            $stmt = connect()->query($sql);
            $results = $stmt->fetchAll();
            return $results;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function getUserById($id) {
        $sql = "SELECT * FROM user WHERE id = :id";

        try {
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function getPosts() {
        $sql = "SELECT * FROM post";

        try {
            $stmt = connect()->query($sql);
            $results = $stmt->fetchAll();
            return $results;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function getMaxTitleNumberByUserId($user_id) {
        $results = ManagementLogic::getPostsByUserId($user_id);

        $maxNum = 0;
        foreach($results as $post) {
            $title = $post['title'];
            $nowNum = (int)preg_replace("/^新規作成/", "", $title);
            if($nowNum > $maxNum) $maxNum = $nowNum;
        }
        return $maxNum;
    }

    public static function getPostId($user_id,$title) {
        $result = false;

        $sql = "SELECT * FROM post WHERE user_id = :user_id and title = :title";

        try {
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function getPostById($id) {
        $result = false;

        $sql = "SELECT * FROM post WHERE id = :id";

        try {
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function getPostsByUserId($user_id) {
        $result = false;

        $sql = "SELECT * FROM post WHERE user_id = :user_id";

        try {
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function getPostTitlesByUserId($user_id) {
        $posts = ManagementLogic::getPostsByUserId($user_id);

        $results = array();
        foreach($posts as $post) {
            $results[] = $post['title'];
        }

        $json_results = json_encode($results, JSON_UNESCAPED_UNICODE);
        $results_str_pre = str_replace("[", "", $json_results);
        $results_str_pre2 = str_replace("]", "", $results_str_pre);
        $results_str = "'" . str_replace('"', "", $results_str_pre2) . "'";
        return $results_str;
    }

    public static function createPost($user_id,$title) {
        $result = false;

        if(self::getPostId($user_id,$title)) {
            return false;
        }

        //自動的にファイルの（若干弱めな）パスワードを作成する。
        $bytes = random_bytes(10);
        $hashedBytes = hash("sha256", bin2hex($bytes));

        //$sql = 'INSERT INTO post(user_id,title,private) VALUES (?,?,?)';
        $sql = 'INSERT INTO post(user_id,title,private,autopwd) VALUES (?,?,?,?)';

        $arr = array();
        $arr[] = $user_id;
        $arr[] = $title;
        $arr[] = 0;
        $arr[] = $hashedBytes;

        try{
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($arr);
            if($result) {
                return self::getPostId($user_id,$title);
            }
        }
        catch(\Exception $e){
            echo $e;
            return $result;
        }
    }

    public static function getAutopwd($user_id, $id) {
        $imagePost = ManagementLogic::getPostById($id);
        if(!isset($imagePost['autopwd'])) return "";

        if($imagePost['user_id'] == $user_id) return "&autopwd=" . $imagePost['autopwd'];
        else return "&autopwd=";
    }

    public static function deletePost($post_id) {
        $result = false;

        $sql = "DELETE FROM post WHERE id = :id";

        try{
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':id', $post_id, PDO::PARAM_INT);
            $result = $stmt->execute();
            return $result;
        }
        catch(\Exception $e){
            echo $e;
            return $result;
        }
    }

    public static function getImagesByPostId($post_id) {
        $result = false;

        $sql = "SELECT * FROM image WHERE post_id = :post_id";

        try {
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':post_id', $post_id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function createImage($post_id,$file_name) {
        $result = false;

        $sql = 'INSERT INTO image (post_id,file_name) VALUES (?,?)';

        $arr = array();

        $arr[] = $post_id;
        $arr[] = $file_name;

        try{
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($arr);
            return $result;
        }
        catch(\Exception $e){
            echo $e;
            return $result;
        }
    }

    public static function deleteImages($post_id) {
        $result = false;

        $sql = "DELETE FROM image WHERE post_id = :post_id";

        try{
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':post_id', $post_id, PDO::PARAM_INT);
            $result = $stmt->execute();
            return $result;
        }
        catch(\Exception $e){
            echo $e;
            return $result;
        }
    }
}