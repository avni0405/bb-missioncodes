<?php 
    include 'admin/db_connect.php';
  
    $kids_rate = $_POST['kids_rate'];
    $regular_rate = $_POST['regular_rate'];
    $srcitizen_rate = $_POST['srcitizen_rate'];
    $kids = $_POST['kids'];
    $regular = $_POST['regular'];
    $srcitizen = $_POST['srcitizen'];
    
    $name = $_POST['name'];
    $email = $_POST['email_id'];
    $mobile = $_POST['mobile_num'];
    $date = $_POST['date'];

   try{

    $stmt = $pdo->prepare("INSERT INTO `tickets`(name, kids, regular, srcitizen, kids_rate, regular_rate, srcitizen_rate, date_for_booking, mobile_num,email_id) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$name,$kids,$regular,$srcitizen,$kids_rate,$regular_rate,$srcitizen_rate,$date,$mobile,$email]);
   }
   catch(Exception $e)
   {
       echo $sql."<br>".$e->getMessage();
       die();
   }
   
   
   $msg1 = $kids." KIDS (".$kids_rate.") =".($kids*$kids_rate)."<br>";
   $msg2 = $regular." REGULAR (".$regular_rate.") =".($regular*$regular_rate)."<br>";
   $msg3 = $srcitizen." SRCITIZEN (".$srcitizen_rate.") =".($srcitizen*$srcitizen_rate)."<br>";
   
   $msg = "Name : ".$name."<br>Mobile: ".$mobile."<br>Email: ".$email."<br>Details: ".$msg1.$msg2.$msg3;
   
   $pdo=null;
   #header("Location:mail.php?msg=".$msg);
   header("Location:booknow.php?msg=success");
?>