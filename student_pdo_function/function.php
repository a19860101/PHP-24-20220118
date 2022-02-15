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