<?php 
    include 'db_connect.php';
  
    $kids_rate = $_POST['kids_rate'];
    $regular_rate = $_POST['regular_rate'];
    $srcitizen_rate = $_POST['srcitizen_rate'];
    $date = $_POST['date'];
    $is_active=$_POST["is_active"];

    $sql = "SELECT * FROM price WHERE date=\"".$date."\"";
    echo $sql;
    #die();
    $list = $pdo->query($sql)->fetchAll();
    $flag=0;
    
    foreach($list as $l){
        #die();
        $flag = 1;
    }
    if($flag==1)
    {
        header("Location:pricing.php?msg=repeat");
        #echo "hi";
        die();
    }

   try{

    $stmt = $pdo->prepare("INSERT INTO price (date,kids_rate,regular_rate,srcitizen_rate,is_active) VALUES (:date, :kids_rate, :regular_rate, :srcitizen_rate,:is_active)");
    $stmt->bindParam(':date',$date);
    $stmt->bindParam(':kids_rate',$kids_rate);
    $stmt->bindParam(':regular_rate',$regular_rate);
    $stmt->bindParam(':srcitizen_rate',$srcitizen_rate);
    $stmt->bindParam(':is_active',$is_active);
    
    echo "Pricing added";
    $stmt->execute();
   }
   catch(Exception $e)
   {
       echo $sql."<br>".$e->getMessage();
       die();
   }
   $pdo=null;

   header("Location:pricing.php?msg=success");
