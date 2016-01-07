<?php
session_start();
include "connect.php";

$id=$_GET['Aauth_id'];
//$id = $_SESSION['sessionVar'];
$up_name = $_POST['auth_nameup'];
$up_tel=$_POST['auth_telup'];
$up_add=$_POST['auth_addressup'];
$up_email=$_POST['auth_emailup'];
if ($up_name){
    $sql2 =  "UPDATE external_authority SET Auth_name='$up_name', Auth_tel='$up_tel',Auth_address='$up_add',Auth_email='$up_email' WHERE Auth_tel= '$id'";
    if(mysql_query($sql2)){
        header('location:../../app/views/home/External.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysql_error();
    }
}

?>