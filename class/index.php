<?php
    include('function/Post.php');
    include('function/User.php');

    use Post\Show;

    echo Show::go();

    echo User\Show::go();