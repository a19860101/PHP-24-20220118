<?php
    extract($_REQUEST);

    echo $name;
    echo '<br>';
    echo $phone;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $gender;
    echo '<br>';
    echo $edu;
    echo '<br>';
    // print_r($skill);
    echo implode(',',$skill);
    echo '<br>';
    echo $comment;