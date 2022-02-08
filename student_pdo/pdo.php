<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-24-20220118';
    $db_charset = 'utf8mb4';


    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // $dsn = "mysql:host=localhost;dbname=php-24-20220118;charset=utf8mb4";
    //data source name

    try {
        $pdo = new PDO($dsn,$db_user,$db_pw);
        
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
        //不主動報錯(預設)
        
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        // 主動報錯
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // 主動例外
    }catch(PDOException $e){
        echo $e->getMessage();
    }


    // try {
    //     $sql = 'SELECT * FROM student WHERE id = 1';

    //     $stmt = $pdo->prepare($sql);
    //     $stmt->execute();
    //     $datas = $stmt->fetchAll();
    //     var_dump($datas);
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    //     // var_dump($e);
    // }

    