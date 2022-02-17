<?php
    include('function.php');
	update($_REQUEST);
	extract($_REQUEST);
    echo '<script>alert("資料已更新!");</script>';	
    header('refresh:0;url=show.php?id='.$id);