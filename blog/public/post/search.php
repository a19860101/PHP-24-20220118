<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="result.php" method="get">
                <div class="row g-1">
                    <div class="col-8">
                        <input type="text" name="keyword" class="form-control">
                    </div>
                    <div class="col-4">
                        <input type="submit" value="搜尋文章" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>