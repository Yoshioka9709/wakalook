<?php

require_once(dirname( __FILE__ ). "/dbconnect.php");
ini_set('display_errors',true);

class UserLogic {
    /**
     * ユーザーを登録する
     * @param array $userData
     * @return bool $result
     */
    public static function createUser($name,$email,$password) {
        $result = false;

        $sql = 'INSERT INTO user (name, email, password) VALUES (?,?,?)';

        $arr = array();
        $arr[] = $name;
        $arr[] = $email;
        $arr[] = password_hash($password,PASSWORD_DEFAULT);

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

    public static function checkUser() {
        $sql = "SELECT * FROM user";

        try {
            $stmt = connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (\Exception $e) {
            echo $e;
            return false;
        }
    }

    public static function login($email,$password) {
        $result = false;

        $user = self::getUserByEmail($email);
        if(!$user){
            return $result;
        }

        if(password_verify($password,$user['password'])) {
            /* session_regenerate_id(true); */
            $_SESSION['login_user']= $user;
            $result = true;
            return $result;
        }
        $_SESSION['msg'] = 'passwordが一致しません';
        return $result;
    }

    public static function getUserByEmail($email) {
        $sql='SELECT * FROM user WHERE email = ?';

        $arr= array();
        $arr[] = $email;

        try{
            $stmt = connect()->prepare($sql);
            $stmt->execute($arr);
            $result = $stmt->fetch();
            return $result;
        }
        catch(\Exception $e){
            echo $e;
            return false;
        }
    }
    public static function getUserById($id) {
        $sql='SELECT * FROM user WHERE id = ?';

        $arr= array();
        $arr[] = $id;

        try{
            $stmt = connect()->prepare($sql);
            $stmt->execute($arr);
            $result = $stmt->fetch();
            return $result;
        }
        catch(\Exception $e){
            echo $e;
            return false;
        }
    }

    public static function checkLogin() {
        $result=false;
        if(isset($_SESSION['login_user'])){
            return $result=true;
        }
        return $result;
    }

    public static function logout(){
        $_SESSION = array();
        session_destroy();
    }

    public static function changePassword($id, $password) {
        $result = false;

        $sql = "UPDATE user SET password = :password WHERE id = :id";

        try{
            $stmt = connect()->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':password', password_hash($password,PASSWORD_DEFAULT), PDO::PARAM_STR);
            $result = $stmt->execute();
            return $result;
        }
        catch(\Exception $e){
            echo $e;
            return $result;
        }
    }
}

?>