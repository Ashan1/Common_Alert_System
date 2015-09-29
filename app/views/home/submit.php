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

$name = $_POST['formName'];
$email = $_POST['formEmail'];
$nic =  $_POST['formNIC'];
$title = $_POST['formTitle'];
$mobile = $_POST['formMobile'];
$address = $_POST['formAddress'];
$image=addslashes(file_get_contents($_FILES['image']));


// attempt insert query execution
$sql = "INSERT INTO `cassign`.`temp` ( `Name`, `Email`, `NIC`, `Title`, `Mobile`, `Address`) VALUES ($name, $email, $nic , $title, $mobile, $address)";
if(mysql_query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}
 
// close connection
mysql_close();
?>
</body>
</html>
