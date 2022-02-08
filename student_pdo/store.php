<?php
    include('pdo.php');
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


    $sql = "INSERT INTO students(name,phone,email,edu,gender,skill,comment)VALUES(?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$phone,$email,$edu,$gender,$skill,$comment]);

    echo '<script>alert("資料已新增!");</script>';
    header('refresh:0;url=index.php');
  
    