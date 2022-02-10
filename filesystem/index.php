<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            width: 1000px;
            margin: auto;
            flex-wrap: wrap;
        }
        .item {
            flex: 0 0 25%;
            height: 250px;
        }
        img {
            width: 100%;
            height: 100%;
            vertical-align: top;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body>
    <?php
        $imgs = glob('images/*');
        $img_num = count($imgs);
    ?>
    <h1>圖片列表 目前共有<?php echo $img_num?>張圖片</h1>
    <a href="form.php">上傳圖片</a>
    <div class="container">

    <?php
        foreach($imgs as $img){
    ?>
        <div class="item">
            <img src="<?php echo $img; ?>" alt="">
        </div>
    <?php }?>
    </div>
</body>
</html>