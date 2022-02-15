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