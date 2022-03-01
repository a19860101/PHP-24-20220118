<?php
    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Post extends DB {
        function index(){
            $sql = "SELECT * FROM posts ORDER BY id DESC";
            $datas = DB::connect()->query($sql)->fetchAll();
            return $datas;
        }
        function show($request){
            extract($request);
            $sql = "SELECT * FROM posts WHERE id = ?";
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;

        }
        function edit($request){
            extract($request);
            $sql = "SELECT * FROM posts WHERE id = ?";
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;

        }
        static function store($request){
            extract($request);
            $sql = "INSERT INTO posts(title,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
            $user_id = 1;
            $stmt =DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$content,$category_id,$user_id,$now,$now]);
        }
        function update($request){
            extract($request);
            $sql = "UPDATE posts SET title=?,content=?,category_id=?,updated_at=? WHERE id=?";
            $stmt =DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$content,$category_id,$now,$id]);
        }
        function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);

        }
    }