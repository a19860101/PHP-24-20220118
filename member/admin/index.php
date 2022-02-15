<?php
    include('../pdo.php');
    session_start();
    $sql = 'SELECT * FROM users ORDER BY created_at DESC';
    try {

        $users = $pdo->query($sql)->fetchAll();
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    if(isset($_POST['switchRole'])){
        // var_dump($_REQUEST);
        $sql_role = 'UPDATE users SET role = ? WHERE id = ?';
        extract($_REQUEST);
        $stmt = $pdo->prepare($sql_role);
        if($_POST['role'] == 0){
            $role = 1;
        }else{
            $role = 0;
        }
        $stmt->execute([$role,$id]);
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid #aaa;
            border-collapse: collapse;
            padding: 10px;
        }

    </style>
</head>
<body>
    <nav>
        <?php if(!isset($_SESSION['AUTH'])){ ?>
        <a href="../login.php">會員登入</a>
        <a href="../register.php">會員註冊</a>
        <?php } ?>
        <?php if(isset($_SESSION['AUTH'])){ ?>
        <span><?php echo $_SESSION['AUTH']['name'];?></span>
        <a href="../logout.php">登出</a>
        <?php } ?>
    </nav>
    <h2>管理後台</h2>
    <table>
        <tr>
            <th>#</th>
            <th>名稱</th>
            <th>E-mail</th>
            <th>角色</th>
            <th>註冊時間</th>
            <th>動作</th>
        </tr>
        <?php foreach($users as $user){ ?>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['name'];?></td>
            <td><?php echo $user['email'];?></td>
            <td>
                <?php echo $user['role']==0?'管理員':'一般會員';?>
            </td>
            <td><?php echo $user['created_at'];?></td>
            <td>
                <?php if($_SESSION['AUTH']['id'] != $user['id']){ ?>
                <form action="" method="post">
                    <input type="hidden" value="<?php echo $user['role'];?>" name="role">
                    <input type="hidden" value="<?php echo $user['id'];?>" name="id">
                    <input type="submit" value="切換權限" name="switchRole">
                </form>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>