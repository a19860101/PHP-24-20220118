<?php
    require_once('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $post = Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-sm-8">
            <h2>編輯文章</h2>
            <hr>
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">文章內容</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo $post['content'];?></textarea>
                </div>
                <div class="mb-3">
                    <label for="category_id">文章分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="1"<?php echo $post['category_id'] == 1 ?'selected':'';?>>生活</option>
                        <option value="2"<?php echo $post['category_id'] == 2 ?'selected':'';?>>健康</option>
                        <option value="3"<?php echo $post['category_id'] == 3 ?'selected':'';?>>科技</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="儲存文章">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>