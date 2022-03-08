<?php 
    require_once '../../vendor/autoload.php';
    use Gjun\Blog\Controller\Post;

    $results = Post::search($_REQUEST);
?>
<?php include('../template/header.php');?>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach($results as $result){ ?>
        <div class="col-10">
            <h2><?php echo $result['title'];?></h2>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('../template/footer.php');?>