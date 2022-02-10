<?php
    session_start();
    if(isset($_POST['add'])){
        extract($_REQUEST);
        $_SESSION['USER'] = [];
        $_SESSION['USER']['name'] = $name;
        $_SESSION['USER']['mail'] = $mail;
        $_SESSION['USER']['phone'] = $mail;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        <?php
            echo isset($_SESSION['USER']) ? $_SESSION['USER']['name'] : '沒有SESSION' ;
        ?>
    </h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="mail" placeholder="Mail">
        <input type="text" name="phone" placeholder="Phone">
        <input type="submit" name="add">
    </form>
    <a href="002.php">002</a>
    <a href="003.php">003</a>
    <a href="remove.php">清除SESSION</a>
</body>
</html>