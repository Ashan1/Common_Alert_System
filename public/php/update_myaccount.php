<?php
include "connect.php";

$username = $_POST['up_userame'];
$password = $_POST['reenterpassword'];
$email = $_POST['up_email'];
$address = $_POST['up_address'];
$tel = $_POST['up_tel'];
$id= '111111111v';
if ($username){
	$sql2 =  "UPDATE employee SET E_username='$username' WHERE E_nic= '$id'";
		if(mysql_query($sql2)){
            header('location:../../app/views/home/myaccount.php');
		} else{
			echo "ERROR: Could not able to execute $sql2. " . mysql_error();
		}
}else if($password){ 
	$sql2 =  "UPDATE employee SET E_password='$password' WHERE E_nic= '$id'";
	
		if(mysql_query($sql2)){
            header('location:../../app/views/home/myaccount.php');
		} else{
			echo "ERROR: Could not able to execute $sql2. " . mysql_error();
		}
}else if($email){  
	$sql2 =  "UPDATE employee SET E_email='$email' WHERE E_nic= '$id'";
		if(mysql_query($sql2)){
            header('location:../../app/views/home/myaccount.php');
		} else{
			echo "ERROR: Could not able to execute $sql2. " . mysql_error();
		}
}else if($address){
	$sql2 =  "UPDATE employee SET E_address='$address' WHERE E_nic= '$id'";
		if(mysql_query($sql2)){
            header('location:../../app/views/home/myaccount.php');
		} else{
			echo "ERROR: Could not able to execute $sql2. " . mysql_error();
		}
}else{
	$sql2 =  "UPDATE employee SET E_tel='$tel' WHERE E_nic= '$id'";
		if(mysql_query($sql2)){
            header('location:../../app/views/home/myaccount.php');
		} else{
			echo "ERROR: Could not able to execute $sql2. " . mysql_error();
		}
}
	
// close connection
mysql_close();
?>