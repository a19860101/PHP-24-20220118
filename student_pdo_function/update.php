<?php
    include('pdo.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);
	$sql = 'UPDATE students SET 
					name	= ?,
					phone	= ?,
					email	= ?,
					edu		= ?,
					gender	= ?,
					skill	= ?,
					comment	= ?
					WHERE id = ?';
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$name,$phone,$email,$edu,$gender,$skill,$comment,$id]);
					
    echo '<script>alert("資料已更新!");</script>';	
    header('refresh:0;url=show.php?id='.$id);