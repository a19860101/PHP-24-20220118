<?php
    extract($_REQUEST);

    // echo $name;
    // echo '<br>';
    // echo $phone;
    // echo '<br>';
    // echo $email;
    // echo '<br>';
    // echo $gender;
    // echo '<br>';
    // echo $edu;
    // echo '<br>';
    // // print_r($skill);
    // echo implode(',',$skill);
    // echo '<br>';
    // echo $comment;

    // trim()
    // var_dump($name);
    // var_dump(trim($name));//前後空白
    // var_dump(stripslashes($name));//反斜線
    // var_dump(htmlspecialchars($name));//特殊字元轉換成一班文字 < > " ' &
    // echo htmlspecialchars($name);

    function check($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = check($name);
    $phone = check($phone);
    var_dump($phone);