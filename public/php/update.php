<?php
session_start();
include "connect.php";
$id = $_SESSION['sessionVar'];
$job = $_POST['size'];
if ($job){
    $sql2 =  "UPDATE employee SET E_job_role='$job' WHERE E_nic= '$id'";
    if(mysql_query($sql2)){
      //header('location:../../app/views/home/adduser.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysql_error();
    }
}
?>