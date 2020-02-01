<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pricing</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->	
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>
<main>
    <?php include("admin_header.php"); ?>

    <form action="change_booking_st.php" method="POST">

    <h3 class="display-4 m-2 text-center mt-4">Ticket Pricing
        <a href="change_ticket_config.php" class="justify-content-center mx-auto">
        <?php  
            include("db_connect.php");
            $q= $pdo->query("SELECT `value1` FROM `config` WHERE `key1`='booking_st'");
            $ticketing_status = $q->fetchColumn();
        ?>

        <input type="hidden" name="status" value="<?php echo $ticketing_status; ?>" />

                <?php
                if($ticketing_status==0)
                    echo '<button class="btn col-1 btn-large btn-danger mx-auto mt-3" type="submit">Inactive</button>';
                else {
                    echo '<button class="btn col-1 btn-large btn-outline-success mx-auto mt-3" type="submit">Active</button>';
                }
                
                ?>  
            </button>
        </a>    
    </h3>
    </form>
    <hr class="text-left w-75">

    <div id="notification">
        <?php
            if(isset($_GET['msg']))
            {
                if($_GET['msg']=="success")
                {
                    echo '<div class="alert alert-success text-center">
                    <strong>Success!</strong> Ticket Pricing added successfully.
                    </div>';
                }
                else if($_GET['msg']=="updated")
                {
                    echo '<div class="alert alert-success text-center">
                    <strong>Success!</strong> Ticket Price Updated successfully.
                    </div>';
                }
                else if($_GET['msg']=="error")
                {
                    echo '<div class="alert alert-danger text-center">
                    <strong>Oops!</strong> An error occured while adding ticket pricing to database. Contact admin.
                    </div>';
                }
                else if($_GET['msg']=="repeat")
                {
                    echo '<div class="alert alert-danger text-center">
                    <strong>Wait</strong> You are setting the price which is already set. Use update option.
                    </div>';
                }
            }
        ?>
    </div>

    <div class="container justify-content-center">
        <form class="container site-section mt-4 mb-5" method="post" action="add_pricing_db.php">
            <div class="row">
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='date' class="form-control" name="date" />
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="kids_rate"></label><br>
                    <input type="number" class="form-control" id="kids_rate" placeholder="KIDS RATE" name="kids_rate" required>
                </div>
            
                <div class="form-group col-md-3">
                    <label for="regular_rate"></label><br>
                    <input type="number" class="form-control" id="regular_rate" placeholder="REGULAR RATE" name="regular_rate" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="srcitizen_rate"></label><br>
                    <input type="number" class="form-control" id="srcitizen_rate" placeholder="SR. CITIZEN RATE" name="srcitizen_rate" required>
                </div>
                
                <div class="form-group col-md-2 d-none">
                    <select class="form-control" id="is_active" placeholder="Is Active?" name="is_active" required>
                        <option value="1" selected>Active</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success" value="+">+</button>
            </div>
        </form>


    </div>

    <hr class="text-left w-75">

    <div class="container col-md-11 justify-content-center">
        <table id="pricing" class="table table-hover table-responsive dt-responsive" style="width:100%;">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Kids Rate</th>
                    <th scope="col">Regular Rate</th>
                    <th scope="col">Sr. Citizen Rate</th>
                    <th scope="col">Is Active?</th>
                    <th scope="col">Update?</th>
                    <th scope="col">Delete?</th>

                </tr>
            </thead>


            <tbody>
            
                <?php

                include("db_connect.php");

                

                $sql = "SELECT * FROM price ORDER BY date DESC";
                $list = $pdo->query($sql)->fetchAll();
                $i=1;
                
                foreach($list as $row){
                ?>
                

                <tr>

                    <?php $i++; ?>
                    <td><?php echo date("D, d M  Y", strtotime($row['date'])); ?></td>
                    <td><?php echo $row['kids_rate']; ?></td>
                    <td><?php echo $row['regular_rate']; ?></td>
                    <td><?php echo $row['srcitizen_rate']; ?></td>
                    <td>
                        
                        <form action="change_active.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                            <input type="hidden" value="<?php echo $row['is_active']; ?>" name="is_active">
                            
                            <?php if ($row['is_active']==1) echo 
                            '<input type="submit" class="btn btn-outline-success"  value="Active">'; 
                            else echo 
                            '<input type="submit" class="btn btn-outline-danger" value="Inactive">';
                            ?>
                        </form>
                    </td>

                    <td>
                        <?php echo
                        '<form method="post" action="update_pricing.php">
                            <input type="hidden" name="date" value="'.$row['date'].'">
                            <input type="hidden" name="kids_rate" value="'.$row['kids_rate'].'">                        
                            <input type="hidden" name="regular_rate" value="'.$row['regular_rate'].'">
                            <input type="hidden" name="srcitizen_rate" value="'.$row['srcitizen_rate'].'">
                            <input type="hidden" name="id" value="'.$row['id'].'">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"></i></button>
                        </form>';
                        ?>
                    </td>
                    <td>
                        <?php echo
                        '<form method="post" action="del_pricing.php">
                            <input type="hidden" name="id" value="'.$row['id'].'">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>';
                        ?>
                    </td>
                    
                </tr>
                <?php
                }
                $pdo = null;
                ?>
            </tbody>
        </table>
    </div>
</main>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#pricing').DataTable();
} );</script>
</body>
</html>
