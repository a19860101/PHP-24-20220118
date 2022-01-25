<?php
    $db_host = 'localhost';
    $db_user = 'amin';
    $db_pw = 'admin';
    $db_name = 'php-24-20220118';


    // $db = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('資料庫連線錯誤，請洽管理員!');
    $db = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('資料庫連線錯誤，請洽管理員!');