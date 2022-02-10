<?php
    include('pdo.php');
    function imgUpload($files){
        extract($files);
        
        if(!is_dir('images')){
            mkdir('images');
        }

        $img = [];

        //檔名
        $img_name = md5(time());
        //副檔名
        $ext = pathinfo($name,PATHINFO_EXTENSION);
        //完整檔名
        $fullname = $img_name.'.'.$ext;

        $target = 'images/'.$fullname;
        if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif' && $ext != 'webp'){
            echo '<script>alert("請上傳正確的圖片格式！")</script>';
            header('refresh:0;url=form.php');
            return;
        }

        if($error == 0){
            if(move_uploaded_file($tmp_name,$target)){
                // echo '<script>alert("上傳成功")</script>';
                // header('refresh:0;url=form.php');
                $img['path'] = $fullname;
                $img['name'] = $name;
                return $img;
            }else{
                echo '<script>alert("上傳失敗")</script>';
                header('refresh:0;url=form.php');
            }
        }else{
            echo '<script>alert("上傳錯誤")</script>';
            header('refresh:0;url=form.php');
        }
    }



    function store($files,$request){
        global $pdo;
        
        $img = imgUpload($files);
        
        extract($request);
        if($name == ''){
            $name = $img['name'];
        }
        $path = $img['path'];
        $sql = "INSERT INTO galleries(path,name,created_at)VALUES(?,?,now())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$path,$name]);
    }

    // $result = store($_FILES['img'],$_REQUEST);
    // var_dump($result);

    store($_FILES['img'],$_REQUEST);
