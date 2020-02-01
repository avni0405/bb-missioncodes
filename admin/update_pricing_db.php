<?php 
    include 'db_connect.php';
  
    $id = $_POST['id'];
    $kids_rate = $_POST['kids_rate'];
    $regular_rate = $_POST['regular_rate'];
    $srcitizen_rate = $_POST['srcitizen_rate'];
    
    if(empty($_POST["id"]))
	{
		header("Location:pricing.php");
		die();
    }

    $stmt=$pdo->prepare("UPDATE `price` SET kids_rate=?,regular_rate=?,srcitizen_rate=? WHERE id=?");
    if($stmt->execute([$kids_rate,$regular_rate, $srcitizen_rate, $id])){
		$pdo = null;
		header("Location:pricing.php?msg=update");
		die();
	}
	header("Location:pricing.php");

    $pdo = null;

?>