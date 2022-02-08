<?php
    include('db.php');
    function check($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    extract($_REQUEST);
    $name = check($name);
    $phone = check($phone);
    $email = check($email);
    $skill = implode(',',$skill);

    // 方法一
    // $sql = "INSERT INTO students(name,phone,email,edu,gender,skill,comment)VALUES('$name','$phone','$email','$edu','$gender','$skill','$comment')";
    // mysqli_query($db,$sql);

    // 預備陳述式
    $sql = "INSERT INTO students(name,phone,email,edu,gender,skill,comment)VALUES(?,?,?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sssssss',$name,$phone,$email,$edu,$gender,$skill,$comment);
    $stmt->execute();

    echo '<script>alert("資料已新增!");</script>';
    header('refresh:0;url=index.php');
    // echo '資料以新增';
    // header('refresh:3;url=index.php');
    // header('location:index.php');

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



    // if($name == ''){
    //     echo '請輸入姓名';
    // }
   
    // function required($data){
    //     if(empty($data) || ctype_space($data)){
    //         return '請輸入內容';
    //     }else{
    //         $data = check($data);
    //         return $data;
    //     }
    // }
    
    // $name = required($name);
    // $phone = required($phone);
    // $email = required($email);

    // $skill = implode(',',$skill);

    // echo "
    //     <div>姓名:{$name}</div>
    //     <div>電話:{$phone}</div>
    //     <div>Email:{$email}</div>
    //     <div>性別:{$gender}</div>
    //     <div>學歷:{$edu}</div>
    //     <div>專長:{$skill}</div>
    //     <div>備註:{$comment}</div>
    // ";
    