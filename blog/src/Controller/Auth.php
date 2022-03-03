<?php
    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Auth extends DB {
        function store($request){
            extract($request);
            
            //檢查是否有相同的帳號(email)
            $sql_check = 'SELECT * FROM users WHERE email = ?';
            $stmt_check = DB::connect()->prepare($sql_check);
            $stmt_check->execute([$email]);

            if($stmt_check->rowCount() > 0){
                echo '<script>alert("此Email已被註冊，請重新輸入!")</script>';
                header('refresh:0;url=register.php');
                return;
            }
            
            // 密碼加密
            $pw = sha1(md5($pw));
            $sql = 'INSERT INTO users(name,email,pw,created_at)VALUES(?,?,?,?)';
            $now = DB::now();
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$name,$email,$pw,$now]);

        }
    }