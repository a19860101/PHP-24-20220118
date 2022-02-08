<?php
    var_dump($_FILES['img']);
    // echo $_FILES['img']['name'];
    // echo $_FILES['img']['tmp_name'];
    // echo $_FILES['img']['type'];
    // echo $_FILES['img']['error'];
    // echo $_FILES['img']['size'];

    extract($_FILES['img']);
    echo $name;
    echo $tmp_name;
    echo $type;
    echo $error;
    echo $size;