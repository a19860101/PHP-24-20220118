<?php
    require_once('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    use Gjun\Blog\Controller\Category;

    $post = Post::show($_REQUEST);
    $categories = Category::index();
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
                    <label for="category_id">文章分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <?php foreach($categories as $category){ ?>
                            <option value="<?php echo $category['id'];?>"<?php echo $post['category_id'] == $category['id'] ?'selected':'';?>><?php echo $category['title'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">文章內容</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo $post['content'];?></textarea>
                </div>
                
                <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                <input type="submit" class="btn btn-primary" value="儲存文章">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include('../template/tinymce.php'); ?>

<?php include('../template/footer.php'); ?>