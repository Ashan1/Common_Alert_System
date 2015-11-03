
<?php
include "connect.php";

$name = $_POST['auth_name'];
$tel = $_POST['auth_tel'];
$address=  $_POST['auth_address'];
$email = $_POST['auth_email'];
$update=$_GET['button'];

$sql = "INSERT INTO external_authority (Auth_name, Auth_tel, Auth_address, Auth_email) VALUES ('$name', '$tel', '$address', '$email')";

if(mysql_query($sql)){
    header('location:../../app/views/home/External.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error();
}

// close connection
mysql_close();
?>