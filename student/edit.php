<?php
    include('db.php');
    extract($_REQUEST);
    $sql = 'SELECT * FROM students WHERE id = '.$id;
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_assoc($result);
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
    <h2>編輯學員資料</h2>
    <form action="update.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $data['name'];?>">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $data['phone'];?>">
        </div>
        <div>
            <label for="">E mail</label>
            <input type="text" name="email" value="<?php echo $data['email'];?>">
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男" <?php if($data['gender'] == '男'){echo 'checked';}?> >
            <label for="">男</label>
            <input type="radio" name="gender" value="女" <?php echo $data['gender'] == '女'?'checked':''; ?> >
            <label for="">女</label>
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
            </select>
        </div>
        <div>
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="平面設計">
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="網頁設計">
            <label for="">網頁設計</label>
            <input type="checkbox" name="skill[]" value="影視剪輯">
            <label for="">影視剪輯</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="comment" id="" cols="30" rows="10"><?php echo $data['comment'];?></textarea>
        </div>
        <input type="submit" value="更新資料">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>