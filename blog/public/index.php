<?php
    require_once('../vendor/autoload.php');
    $posts = Gjun\Blog\Controller\Post::index();
?>

<?php include('template/header.php'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach($posts as $post){ ?>
        <div class="col-10">
            <div>
                <?php if($post['cover'] == null){ ?>
                <img src="post/images/null.jpg" alt="" class="w-100">
                <?php }else{ ?>
                <img src="post/images/<?php echo $post['cover']; ?>" alt="" class="w-100">
                <?php } ?>
            </div>
            <h2><?php echo $post['title'];?></h2>
            <div>作者:<?php echo $post['user_name']; ?>&#060;<?php echo $post['user_email'];?>&#062;</div>
            <div>分類:<?php echo $post['category_title'];?></div>
            <div>
                <?php 
                    $content = mb_substr(strip_tags($post['content']),0,150);
                    echo  $content;
                ?>
                ...
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

