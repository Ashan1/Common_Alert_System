<?php
include "connect.php";

$username = $_POST['up_userame'];
$password = $_POST['reenterpassword'];
$currentpass= $_POST['currentpassword'];
$email = $_POST['up_email'];
$address = $_POST['up_address'];
$tel = $_POST['up_tel'];
$id= '926586637v';
$sql = mysql_query("SELECT * FROM employee where E_nic='$id'");
$row=mysql_fetch_array($sql);
$pass= $row['password'];

$res=password_verify($currentpass, $pass);
echo $pass;
echo $currentpass;

if ($username){
    $sql2 =  "UPDATE employee SET username='$username' WHERE E_nic= '$id'";
    if(mysql_query($sql2)){
        header('location:../../app/views/home/myaccount.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysql_error();
    }
}else if($password){

    if(password_verify($currentpass, $pass)){

        $sql2 =  "UPDATE employee SET password='$password' WHERE E_nic= '$id'";

        if(mysql_query($sql2)){
            header('location:../../app/views/home/myaccount.php');
        } else{
            echo "ERROR: Could not able to execute $sql2. " . mysql_error();
        }
    }else{
        echo "Your current password is not valid. Please try again" . mysql_error();
    }
}else if($email){
    $sql2 =  "UPDATE employee SET email='$email' WHERE E_nic= '$id'";
    if(mysql_query($sql2)){
        header('location:../../app/views/home/myaccount.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysql_error();
    }
}else if($address){
    $sql2 =  "UPDATE employee SET address='$address' WHERE E_nic= '$id'";
    if(mysql_query($sql2)){
        header('location:../../app/views/home/myaccount.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysql_error();
    }
}else{
    $sql2 =  "UPDATE employee SET tel='$tel' WHERE E_nic= '$id'";
    if(mysql_query($sql2)){
        header('location:../../app/views/home/myaccount.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysql_error();
    }
}

// close connection
mysql_close();
?>