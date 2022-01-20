<?php
    $drinks = ['阿薩姆紅茶','茉莉綠茶','鮮奶茶','冰淇淋紅茶'];
    $users = [
        'name' => 'John',
        'mail' => 'john@gmail.com',
        'gender' => '男',
        'phone' =>'0987654321',
        'address' => '台北市'
    ];

    $products = [];
    //count() 計算

    // echo count($drinks);
    // echo count($users);
    echo count($products);

    // *implode() 集中 陣列->字串

    echo implode('<><><>',$drinks);
    echo '<br>';

    // *explode() 爆炸 字串->陣列
    
    $str = 'hello,php,mysql,!!';
    print_r(explode(',',$str));
    echo '<br>';

    // is_array()
    var_dump( is_array($str) );

    // *in_array()
    var_dump( in_array('阿薩姆乃茶',$drinks) );

    // *extract() 解構

    // $name = $users['name'];
    // $mail = $users['mail'];
    // $gender = $users['gender'];
    extract($users);
    echo $name,$mail,$gender,$address,$phone;