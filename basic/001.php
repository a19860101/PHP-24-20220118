<?php
    // 註解:Ctrl + /
    // echo "Hello PHP";
    // echo 'Hello PHP';
    // print_r('Hello PHP');
    // var_dump('Hello PHP');

    // 變數
    $a = 100;
    $s = "Hello World!!";

    $num = 88;

    // echo '您是第'.$num.'位訪客';
    // echo "您是第$num 位訪客";
    // echo "您是第{$num}位訪客";
    // echo '您是第{$num}位訪客';
    // echo '您是第$num位訪客';
    /* 
        變數命名規則
        大小寫有別
        開頭只能使用英文
        符號只可使用底線
        不可使用保留字
    */

    //常數
    define('user','John');
    echo user;


    echo "<h1>Hello</h1>";
    echo '<h1>Hello</h1>';

    //資料型態
    var_dump('Hello');//字串String
    echo "<br>";
    var_dump(123);//Interger 整數
    echo "<br>";
    var_dump(3.1415926);//Float 浮點數
    echo "<br>";
    var_dump(true);//Boolean 布林 (true/false)
?>