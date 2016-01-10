<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();
$user_nic = $_SESSION['user_session'];

$password = $_POST['reenterpassword'];
$email = $_POST['email'];
$tel = $_POST['up_tel'];

$sql = $db->query("SELECT * FROM employee where E_nic='$user_nic'");
$db_result=$sql->result();

$new_pass = password_hash($password, PASSWORD_DEFAULT);
$new_pass;

if($password){
    $sql2 =  "UPDATE employee SET E_password='$new_pass' WHERE E_nic= '$user_nic'";
    $db->query($sql2);
    header('location:../view/myaccount.php');

}else if($email){
    $sql2 =  "UPDATE employee SET E_email='$email' WHERE E_nic= '$user_nic'";
    $db->query($sql2);
    header('location:../view/myaccount.php');
}else{
    $sql2 =  "UPDATE employee SET E_tel='$tel' WHERE E_nic= '$user_nic'";
    $db->query($sql2);
    header('location:../view/myaccount.php');
}

?>