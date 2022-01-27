<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);
    $sql = "UPDATE students SET
            name = '$name',
            phone = '$phone',
            email = '$email',
            edu = '$edu',
            gender = '$gender',
            skill = '$skill',
            comment = '$comment'
            WHERE id = ".$id;

    mysqli_query($db,$sql);

    echo '<script>alert("資料已更新!");</script>';
    header('refresh:0;url=show.php?id='.$id);