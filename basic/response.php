<?php
    // echo 'Response!!';

    //超級全域變數 superglobal
    // var_dump($_POST);
    // echo $_POST['name'];
    // echo '<br>';
    // echo $_POST['mail'];
    // echo '<br>';
    // echo $_POST['phone'];

    // if(isset($_POST['name'])){
    //     extract($_POST);
    // }else{
    //     extract($_GET);
    // }
    
    print_r($_REQUEST);
    extract($_REQUEST);

    echo $name;
    echo '<br>';
    echo $mail;
    echo '<br>';
    echo $phone;

    

