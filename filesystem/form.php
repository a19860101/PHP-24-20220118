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
        <input type="file" name="img">
        <input type="submit" value="上傳圖片">
    </form>

    <?php
        // echo md5(uniqid());
        // echo md5(time());
    ?>
</body>
</html>