<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>上傳圖片</h1>
    <a href="index.php">圖片列表</a>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">檔案名稱</label>
            <input type="text" name="name">
        </div>
        <div>
            <input type="file" name="img">
        </div>
        <input type="submit" value="上傳圖片">
    </form>

    <div>
        <?php 
            // echo date_default_timezone_get();
            // date_default_timezone_set('Asia/Taipei');
            // echo date('Y-m-d H:i:s');
        ?>
    </div>
</body>
</html>