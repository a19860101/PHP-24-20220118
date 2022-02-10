<?php
    session_start();

    // echo $_SESSION['USER'];
    // var_dump($_SESSION['USER']);
?>
 <h3>
        <?php
            echo isset($_SESSION['USER']) ? $_SESSION['USER']['name'] : '沒有SESSION' ;
        ?>
    </h3>