<?php
    namespace Gjun\Blog\Config;

    use PDO;

    class DB {
        function connect(){
            $db_host = 'localhost';
            $db_user = 'admin';
            $db_pw = 'admin';
            $db_name = 'php-24-20220118';
            $db_charset = 'utf8mb4';
    
            
            $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
            
            try {
                $pdo = new PDO($dsn,$db_user,$db_pw);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function now(){
            date_default_timezone_set('Asia/Taipei');
            $now = date('Y-m-d H:i:s');
            return $now;
        }
    }