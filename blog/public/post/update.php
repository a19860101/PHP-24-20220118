<?php
    require_once('../../vendor/autoload.php');

    use Gjun\Blog\Controller\Post;
    
    $id = $_REQUEST['id'];

    Post::update($_REQUEST);

    echo '<script>alert("文章已儲存")</script>';
    header('refresh:0;url=show.php?id='.$id);