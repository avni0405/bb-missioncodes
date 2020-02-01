<?php 
    include 'db_connect.php';
  
    $status = $_POST['status'];
    $status = 1 - $status;

    echo $status;
    #die();

    $stmt=$pdo->prepare("UPDATE `config` SET value1=? WHERE key1='booking_st'");
    if($stmt->execute([$status])){
		$pdo = null;
		header("Location:pricing.php?msg=changed_status");
		die();
	}
	header("Location:pricing.php");

    $pdo = null;

?>