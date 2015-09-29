<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CAS</title>
 <script src="javascripts/jquery.min.js"></script>
  <script src="javascripts/popup.min.js"></script>
	
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/new.css" rel="stylesheet"> 

</head>
<body>
<?php
include "connect.php";

$name = $_POST['formName'];
$email = $_POST['formEmail'];
$nic =  $_POST['formNIC'];
$mobile = $_POST['formMobile'];
$add = $_POST['formAddress'];
$role = $_POST['size'];
$image=addslashes(file_get_contents($_FILES['image']));
$pw = "CAS@123";

// attempt insert query execution
$sql = "INSERT INTO employee (E_name, E_nic, email, tel, address, role, image, username, password) VALUES ('$name', '$nic' ,'$email', '$mobile', '$add', '$role', '$image','$email','$pw')";

if(mysql_query($sql)){
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}
 
// close connection
mysql_close();
?>
</body>
</html>
