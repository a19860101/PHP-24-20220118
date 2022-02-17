<?php
    include('pdo.php');

    function index(){
        // global $pdo;
        $sql = 'SELECT * FROM students';
        try{
            $datas = pdo()->query($sql)->fetchAll();
            return $datas;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function show($request){
        extract($request);

        $sql = 'SELECT * FROM students WHERE id = ?';
        try {
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function store($request){
        extract($_REQUEST);
    
        $name = check($name);
        $phone = check($phone);
        $email = check($email);
        $skill = implode(',',$skill);
    
    
        $sql = "INSERT INTO students(name,phone,email,edu,gender,skill,comment)VALUES(?,?,?,?,?,?,?)";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$name,$phone,$email,$edu,$gender,$skill,$comment]);
    }
    function check($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function delete($request){
        extract($request);

        $sql = 'DELETE FROM students WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
    }
    function edit($request){
        extract($request);

        $sql = 'SELECT * FROM students WHERE id = ?';
        try {
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }