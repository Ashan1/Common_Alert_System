<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CAS</title>
 <script src="js/jquery.min.js"></script>
  <script src="js/popup.min.js"></script>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet"> 
	
    <!--<link href="dashboard.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/npm.js"></script> -->

</head>
<body>
<?php
include "connect.php";

$name = $_POST['auth_name'];
$tel = $_POST['auth_tel'];
$address=  $_POST['auth_address'];
$email = $_POST['auth_email'];


// attempt insert query execution
$sql = "INSERT INTO external_authority (Auth_name, Auth_tel, Auth_address, Auth_email) VALUES ('$name', '$tel', '$address', '$email')";

if(mysql_query($sql)){
    header('location:../../app/views/home/External.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}
 
// close connection
mysql_close();
?>
</body>
</html>
