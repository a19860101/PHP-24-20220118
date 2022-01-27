<?php
//方法一
    // $db_host = 'localhost';
    // $db_user = 'admin';
    // $db_pw = 'admin';
    // $db_name = 'php-24-20220118';


    // // $db = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('資料庫連線錯誤，請洽管理員!');
    // $db = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('資料庫連線錯誤，請洽管理員!');

    // mysqli_query($db,'SET NAMES utf8mb4');

    //方法二
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-24-20220118';

    $db = new mysqli($db_host,$db_user,$db_pw,$db_name);//mysqli 物件,實體
    if($db->connect_errno){
        echo $db->connect_error;
    }

    $db->query('SET NAMES utf8mb4');