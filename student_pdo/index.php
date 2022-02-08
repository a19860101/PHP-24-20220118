<?php
    include('pdo.php');
    $sql = 'SELECT * FROM students';
    try{
        $datas = $pdo->query($sql)->fetchAll();

        // $result = $pdo->query($sql);
        // $datas = $result->fetchAll();
    }catch(PDOException $e){
        echo $e->getMessage();
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
            border: 1px solid #999;
            border-collapse: collapse;
        }
        td,th {
            padding: 15px;
        }
    </style>
</head>
<body>
    <h2>學員資料</h2>
    <a href="create.php">建立學員資料</a>
    <table>
        <tr>
            <th>編號</th>
            <th>姓名</th>
            <th>電話</th>
            <th>動作</th>
        </tr>
        
        <?php foreach($datas as $data){ ?>
            <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['phone'];?></td>
                <td><a href="show.php?id=<?php echo $data['id'];?>">詳細資訊</a></td>
            </tr>
        <?php } ?>

        <?php
            // foreach($datas as $data){
            //     echo '<tr>';
            //     echo '<td>'.$data['id'].'</td>';
            //     echo "<td>{$data['name']}</td>";
            //     echo '<td>'.$data['phone'].'</td>';
            //     echo '</tr>';
            // }
        ?>
    </table>
</body>
</html>