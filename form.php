<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POST</h2>
    <form action="response.php" method="post">
        <label for="">姓名</label>
        <input type="text" name="name">
        <br>
        <label for="">MAIL</label>
        <input type="text" name="mail">
        <br>
        <label for="">電話</label>
        <input type="text" name="phone">
        <input type="submit" value="送出">
    </form>
    <h2>GET</h2>
    <form action="response.php" method="get">
        <label for="">姓名</label>
        <input type="text" name="name">
        <br>
        <label for="">MAIL</label>
        <input type="text" name="mail">
        <br>
        <label for="">電話</label>
        <input type="text" name="phone">
        <input type="submit" value="送出">
    </form>
</body>
</html>