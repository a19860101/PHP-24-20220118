<?php 
    require_once '../../vendor/autoload.php';
    use Gjun\Blog\Controller\Post;

    $results = Post::search($_REQUEST);

?>
<?php include('../template/header.php');?>
<div class="container">
    <div class="row justify-content-center">

        <?php if(count($results)==0){ ?>
        <div class="col-10">
            <h2>共有0筆結果</h2>    
        </div>
        <?php }?>
        <?php if(count($results)!=0){ ?>
        <div class="col-10">
            <h2>共有<?php echo count($results);?>筆結果</h2>
            
            <hr>    
        </div>
        <?php foreach($results as $result){ ?>
        <div class="col-10">
            <h2><?php echo $result['title'];?></h2>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</div>
<?php include('../template/footer.php');?>