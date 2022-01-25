<?php
    include('db.php');
    // include_once('db.php');
    // require('db.php');
    // require_once('db.php');

    $sql = 'SELECT * FROM students';
    $result = mysqli_query($db,$sql);
    
    // 方法一
    // $datas = [];
    // while($data = mysqli_fetch_assoc($result)){
    //     $datas[] = $data;
    // }
    // print_r($datas);
    // foreach($datas as $data){
    //     echo $data['name'];
    // }

    // 方法二
    $datas = mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($datas as $data){
        // print_r($data);
        echo $data['name'];
        echo $data['email'];
        echo '<br>';
    }
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>