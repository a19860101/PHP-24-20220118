<?php
    require_once('../../vendor/autoload.php');

    use Gjun\Blog\Controller\Post;

    Post::store($_REQUEST,$_FILES['cover']);

    header('location:../index.php');