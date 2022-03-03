<?php
    require_once '../../vendor/autoload.php';
    use Gjun\Blog\Controller\Auth;

    Auth::login($_REQUEST);

    
    // echo '<script>alert("會員登入成功")</script>';
    header('refresh:0;url=../index.php');