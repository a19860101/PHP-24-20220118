<?php
    $drinks = ['阿薩姆紅茶','茉莉綠茶','鮮奶茶','冰淇淋紅茶'];
    $users = [
        'name' => 'John',
        'mail' => 'john@gmail.com',
        'gender' => '男'
    ];

    $products = [];
    //count() 計算

    // echo count($drinks);
    // echo count($users);
    echo count($products);

    // implode() 集中 陣列->字串

    echo implode('<><><>',$drinks);