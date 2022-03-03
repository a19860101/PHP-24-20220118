<?php 
    require_once '../../vendor/autoload.php';
    use Gjun\Blog\Controller\Post;

    $result = Post::search($_REQUEST);