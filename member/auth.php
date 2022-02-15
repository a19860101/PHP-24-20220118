<?php
    include('pdo.php');
    session_start();
    extract($_REQUEST);

    $sql = 'SELECT * FROM users WHERE email = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $user = $stmt->fetch();

    if(!$user){
        echo '<script>alert("Email不存在，請重新輸入或註冊!")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    if($user['pw'] == sha1(md5($pw))){
        $_SESSION['AUTH'] = $user;
        if($user['role'] == 0){
            echo '<script>alert("管理員登入成功!")</script>';
            header('refresh:0;url=admin/index.php');
        }else{
            echo '<script>alert("登入成功!")</script>';
            header('refresh:0;url=index.php');
        }
        
    }else{
        echo '<script>alert("帳號或密碼錯誤!")</script>';
        header('refresh:0;url=login.php');
    }