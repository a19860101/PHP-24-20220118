<?php
    require_once('../../vendor/autoload.php');

    use Gjun\Blog\Controller\Post;

    Post::store($_REQUEST);

    header('location:../index.php');