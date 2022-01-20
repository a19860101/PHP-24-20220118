<?php
    //Array陣列
    // $a = array();
    // $a[0] = 'Apple';
    // $a[1] = 'Orange';

    // $a = array('Cat','Dog');

    $a = ['HTML','CSS','Javascript','PHP','MySQL'];
    

    // print_r($a);
    // var_dump($a);
    // echo '<br>';
    // echo $a[0];
    // echo '<br>';
    // echo $a[1];
    // echo '<br>';
    // echo $a[2];
    // echo '<br>';
    
    //列舉 迭代
    // for($i=0;$i<3;$i++){
    //     echo $a[$i];
    //     echo '<br>';
    // }

    foreach($a as $item){
        echo $item;
        echo '<br>';
    }

    //關聯陣列

    $user = [
        // 鍵key => 值value
        'name' => 'John',
        'mail' => 'john@gmail.com',
        'gender' => '男'
    ];
    // print_r($user);
    // echo $user['name'];
    // echo $user['mail'];
    // echo $user['gender'];

    foreach($user as $key => $value){
        echo $key.':'.$value;
        echo '<br>';
    }



