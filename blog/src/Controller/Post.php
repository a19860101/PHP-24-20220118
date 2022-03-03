<?php
    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Post extends DB {
        function index(){
            $sql = "SELECT posts.*,users.name AS user_name,users.email AS user_email,categories.title AS category_title FROM posts 
                    LEFT JOIN categories ON posts.category_id = categories.id 
                    LEFT JOIN users ON posts.user_id = users.id
                    ORDER BY id DESC";
            $datas = DB::connect()->query($sql)->fetchAll();
            return $datas;
        }
        function show($request){
            extract($request);
            $sql = "SELECT posts.*,categories.title AS category_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id WHERE posts.id = ?";
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
        static function store($request,$file){
            extract($request);
            session_start();
            $sql = "INSERT INTO posts(title,cover,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,?,?,?)";
            $user_id = $_SESSION['AUTH']['id'];
            $stmt =DB::connect()->prepare($sql);
            $now = DB::now();
            $img = File::upload($file);
            $cover = $img['cover'];
            $stmt->execute([$title,$cover,$content,$category_id,$user_id,$now,$now]);
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
        function search($request){
            extract($request);
        }
    }