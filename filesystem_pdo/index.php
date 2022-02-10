<?php
    include('pdo.php');
    if(isset($_POST['del'])){
        extract($_REQUEST);
        unlink('images/'.$_POST['path']);
        $sql = 'DELETE FROM galleries WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }
    $sql = 'SELECT * FROM galleries ORDER BY created_at DESC';
    $imgs = $pdo->query($sql)->fetchAll();
    $img_num = count($imgs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;

        }
        .container {
            display: flex;
            width: 1000px;
            margin: auto;
            flex-wrap: wrap;
        }
        .item {
            flex: 0 0 25%;
            height: 250px;
            position: relative;
        }
        img {
            width: 100%;
            height: 100%;
            vertical-align: top;
            object-fit: cover;
            object-position: center;
        }
        form {
            background-color: rgba(0,0,0,.5);
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>

    <h1>圖片列表 目前共有<?php echo $img_num?>張圖片</h1>
    <a href="form.php">上傳圖片</a>
    <div class="container">

    <?php
        foreach($imgs as $img){
    ?>
        <div class="item">
            <img src="images/<?php echo $img['path']; ?>" alt="">
            <form action="" method="post">
                <input type="hidden" name="path" value="<?php echo $img['path'];?>">
                <input type="hidden" name="id" value="<?php echo $img['id'];?>">
                <input type="submit" name="del" value="刪除" onclick="return confirm('確認刪除？')">
            </form>
        </div>
    <?php }?>
    </div>
</body>
</html>