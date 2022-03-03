<?php
    require_once('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Category;
    $categories = Category::index();
    
    Gjun\Blog\Controller\Auth::isAdmin();
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">分類名稱</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">分類英文名稱</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="新增分類">
            </form>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <?php foreach($categories as $category){ ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $category['title'];?>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $category['id'];?>">
                        <input type="submit" value="刪除" class="btn btn-danger" onclick="return confirm('此動作無法回復，確定要刪除？')">
                    </form>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>