<?php
    include('db.php');
    // include_once('db.php');
    // require('db.php');
    // require_once('db.php');

    $sql = 'SELECT * FROM students';
    $result = mysqli_query($db,$sql);
    while($data = mysqli_fetch_assoc($result)){
        // print_r($data);
        echo $data['email'];
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
    
</body>
</html>