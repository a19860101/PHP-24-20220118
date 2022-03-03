<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>註冊會員</h2>
            <hr>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>  
                <div class="mb-3">
                    <label for="pw" class="form-label">密碼</label>
                    <input type="password" class="form-control" name="pw" id="pw">
                </div>  
                <input type="submit" value="註冊會員" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-outline-danger">
            </form>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>