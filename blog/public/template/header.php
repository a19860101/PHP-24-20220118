<?php
    $webroot = 'http://localhost/PHP-24-20220118/blog/public/';
    if(!session_id()){
        session_start();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $webroot;?>">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $webroot;?>">首頁</a>
                </li>
                <?php if(isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot;?>post/create.php">建立文章</a>
                </li>
                <?php if($_SESSION['AUTH']['role'] == 0){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot;?>category/index.php">分類管理</a>
                </li>
                <?php } ?>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if(!isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a href="<?php echo $webroot;?>auth/register.php" class="nav-link">註冊會員</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $webroot;?>auth/login.php" class="nav-link">登入</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['AUTH'])){ ?>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo $_SESSION['AUTH']['name'];?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $webroot;?>auth/logout.php" class="nav-link">登出</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>