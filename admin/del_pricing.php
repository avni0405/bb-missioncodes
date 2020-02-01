<?php 
    include 'db_connect.php';
  
    $id = $_POST['id'];

    if(empty($_POST["id"]))
	{
		header("Location:pricing.php");
		die();
    }

    $stmt=$pdo->prepare("DELETE FROM price WHERE id = ?");
    if($stmt->execute([$id])){
		$pdo = null;
		header("Location:pricing.php?msg=del");
		die();
	}
	header("Location:pricing.php");

    $pdo = null;

?>