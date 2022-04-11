<?php
require_once(dirname( __FILE__ ). "/env.php");
ini_set('display_errors',true);
function connect(){
    $host = DB2_HOST;
    $db = DB2_NAME;
    $user = DB2_USER;
    $pass = DB2_PASS;

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        return $pdo;
    } catch(PDOException $e) {
        echo '接続失敗'.$e->getMessage();
        exit();
    }
}
