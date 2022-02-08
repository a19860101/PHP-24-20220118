<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-24-20220118';
    $db_charset = 'utf8mb4';


    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // $dsn = "mysql:host=localhost;dbname=php-24-20220118;charset=utf8mb4";
    //data source name

    $pdo = new PDO($dsn,$db_user,$db_pw);