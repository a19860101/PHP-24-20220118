<?php
    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Post extends DB {
        static function store($request){
            extract($request);
            $sql = "INSERT INTO posts(title,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
            $user_id = 1;
            $stmt =DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$content,$category_id,$user_id,$now,$now]);
        }
    }