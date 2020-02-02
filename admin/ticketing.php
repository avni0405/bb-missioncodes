<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pricing</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>
<main>
    <?php include("admin_header.php"); ?>

    <h3 class="display-4 m-2 text-center mt-4">Tickets Booking</h3>
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

    <div class="container col-md-11 justify-content-center">
        <table id="ticketing" class="table table-hover table-responsive dt-responsive" style="width:100%;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Book Tickets for</th>
                    <th scope="col">Kids</th>
                    <th scope="col">Regular</th>
                    <th scope="col">Sr. Citizen</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Booking on</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include("db_connect.php");

                $sql = "SELECT * FROM tickets ORDER BY date_for_booking DESC";
                $list = $pdo->query($sql)->fetchAll();
                $i=0;
                foreach($list as $row){
                ?>
                
                <tr>
                    <?php $i++; ?>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo date("D, d M  Y", strtotime($row['date_for_booking'])); ?></td>
                    <td><?php echo $row['kids']."*".$row['kids_rate']."<br><b>".($row['kids']*$row['kids_rate'])."</b>"; ?></td>
                    <td><?php echo $row['regular']."*".$row['regular_rate']."<br><b>".($row['regular']*$row['regular_rate'])."</b>"; ?></td>
                    <td><?php echo $row['srcitizen']."*".$row['srcitizen_rate']."<br><b>".($row['srcitizen']*$row['srcitizen_rate'])."</b>"; ?></td>
                    <td><?php echo $row['kids']*$row['kids_rate'] + $row['regular']*$row['regular_rate'] + $row['srcitizen']*$row['srcitizen_rate']; ?></td>
                    <td><?php echo $row['mobile_num']; ?></td>
                    <td><?php echo $row['email_id']; ?></td>
                    <td><?php echo date("D, d M  Y", strtotime($row['date_of_booking'])); ?></td>
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
    $('#ticketing').DataTable();
} );</script>
</body>
</html>