<?php
    include('pdo.php');
    extract($_REQUEST);
    $sql = 'INSERT INTO users(name,email,pw,created_at)VALUES(?,?,?,?)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$email,$pw,$now]);

    echo '<script>alert("會員註冊成功，請重新登入!")</script>';
    header('refresh:0;url=index.php');