<?php 
    include 'db_connect.php';
  
    $id = $_POST['id'];
    $is_active = $_POST['is_active'];

    if(empty($_POST["id"]))
	{
		header("Location:pricing.php");
		die();
    }

    $is_active = 1 - $is_active;
    $stmt=$pdo->prepare("UPDATE `price` SET is_active=? WHERE id=?");
    if($stmt->execute([$is_active,$id])){
		$pdo = null;
		header("Location:pricing.php?msg=update");
		die();
	}
	header("Location:pricing.php");

    $pdo = null;

?>