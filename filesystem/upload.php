<?php
    // var_dump($_FILES['img']);
    // echo $_FILES['img']['name'];
    // echo $_FILES['img']['tmp_name'];
    // echo $_FILES['img']['type'];
    // echo $_FILES['img']['error'];
    // echo $_FILES['img']['size'];

    extract($_FILES['img']);
    // echo $name;
    // echo $tmp_name;
    // echo $type;
    // echo $error;
    // echo $size;
    
    // 如果資料夾不存在就建立
    if(!is_dir('images')){
        mkdir('images');
    }

    //檔名
    $img_name = md5(time());
    //副檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    //完整檔名
    $fullname = $img_name.'.'.$ext;

    $target = 'images/'.$fullname;

    if($error == 0){
        move_uploaded_file($tmp_name,$target);
    }

    header('location:form.php');