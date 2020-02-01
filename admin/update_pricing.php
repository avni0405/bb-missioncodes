<?php
include('auth.php');
?>

<?php
    if(empty($_POST["id"]))
    {
        header("Location:dashboard.php?msg=empty");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Pricing</title>
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

    <h3 class="display-4 m-2 text-center mt-4">Update Pricing for <?php echo date("D, d M  Y", strtotime($_POST['date'])); ?></h3>
    <hr class="text-left w-75 mb-5">

    <div class="container col-6 justify-content-center mt-4">
        <form action="update_pricing_db.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
        
        <table class="table table-borderless">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Previous Price</th>
                    <th scope="col">Updated Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Kids</th>
                    <td><?php echo $_POST['kids_rate']; ?></td>
                    <td><input type="number" class="form-control" id="kids_rate" placeholder="KIDS RATE" name="kids_rate" required value="<?php echo $_POST['kids_rate']; ?>"></td>
                </tr>
                <tr>
                    <th>Regular</th>
                    <td><?php echo $_POST['regular_rate']; ?></td>
                    <td><input type="number" class="form-control" id="regular_rate" placeholder="REGULAR RATE" name="regular_rate" required value="<?php echo $_POST['regular_rate']; ?>"></td>
                </tr>
                <tr>
                    <th>Sr. Citizen</th>
                    <td><?php echo $_POST['srcitizen_rate']; ?></td>
                    <td><input type="number" class="form-control" id="kids_rate" placeholder="SR CITIZEN RATE" name="srcitizen_rate" required value="<?php echo $_POST['srcitizen_rate']; ?>"></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Update" class="btn btn-success">
        </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</main>
</body>
</html>