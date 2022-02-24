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
            <hr>
            <div>
                最後更新時間 <?php echo $post['updated_at']; ?>
            </div>
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $post["id"];?>">
                <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
            </form>
            <hr>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>