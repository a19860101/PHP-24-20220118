<?php
    require_once '../../vendor/autoload.php';
    use Gjun\Blog\Controller\Auth;

    Auth::store($_REQUEST);

    
    echo '<script>alert("會員註冊成功，請重新登入!")</script>';
    header('refresh:0;url=../index.php');