<?php
    require_once('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $post = Post::show($_REQUEST);
?>
<?php include("../template/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2><?php echo $post['title'];?></h2>
            <div>
                <?php echo $post['content'];?>
            </div>
            <a href="post/show.php" class="btn btn-outline-primary btn-sm">繼續閱讀</a>
            <div>
                最後更新時間 <?php echo $post['updated_at']; ?>
            </div>
            <hr>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>