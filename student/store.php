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

    // if($name == ''){
    //     echo '請輸入姓名';
    // }
   
    function required($data){
        if(empty($data) || ctype_space($data)){
            return '請輸入內容';
        }else{
            $data = check($data);
            return $data;
        }
    }
    
    $name = required($name);
    $phone = required($phone);
    $email = required($email);

    $skill = implode(',',$skill);

    echo "
        <div>姓名:{$name}</div>
        <div>電話:{$phone}</div>
        <div>Email:{$email}</div>
        <div>性別:{$gender}</div>
        <div>學歷:{$edu}</div>
        <div>專長:{$skill}</div>
        <div>備註:{$comment}</div>
    ";
    