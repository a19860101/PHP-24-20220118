<?php
    namespace Gjun\Blog\Controller;

    class Post extends DB {
        function store($request){
            extract($request);
            $sql = "INSERT INTO posts(title,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$title,$content,$category_id,$user_id,now(),now()]);
        }
    }