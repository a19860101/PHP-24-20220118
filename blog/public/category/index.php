<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="" method="post">
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
                <li class="list-group-item">分類</li>
                <li class="list-group-item">分類</li>
                <li class="list-group-item">分類</li>
                <li class="list-group-item">分類</li>
                <li class="list-group-item">分類</li>
            </ul>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>