<?php
    namespace Gjun\Blog\Controller;
    use Gjun\Blog\Config\DB;

    class Category extends DB {
        function index(){
            $sql = "SELECT * FROM categories ORDER BY id DESC";
            $datas = DB::connect()->query($sql)->fetchAll();
            return $datas;
        }
        static function store($request){
            extract($request);
            $sql = "INSERT INTO categories(title,slug,created_at)VALUES(?,?,?)";
            $user_id = 1;
            $stmt =DB::connect()->prepare($sql);
            $now = DB::now();
            $stmt->execute([$title,$slug,$now]);
        }
        function delete($request){
            extract($request);
            $sql = 'DELETE FROM categories WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);

        }
    }