<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-sm-8">
            <h2>建立文章</h2>
            <hr>
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">文章內容</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="category_id">文章分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="1">生活</option>
                        <option value="2">健康</option>
                        <option value="3">科技</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="建立文章">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        height: 600,
        language: 'zh_TW'
    });
</script>
<?php include('../template/footer.php'); ?>