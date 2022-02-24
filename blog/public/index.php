<?php
    require_once('../vendor/autoload.php');
    $posts = Gjun\Blog\Controller\Post::index();
?>

<?php include('template/header.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach($posts as $post){ ?>
        <div class="col-10">
            <h2><?php echo $post['title'];?></h2>
            <div>
                <?php echo $post['content'];?>
            </div>
            <a href="post/show.php?id=<?php echo $post['id'];?>" class="btn btn-outline-primary btn-sm">繼續閱讀</a>
            <div>
                最後更新時間 <?php echo $post['updated_at']; ?>
            </div>
            <hr>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php'); ?>

