
<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$fname = $_POST['formfName'];
$lname = $_POST['formlName'];
$email = $_POST['formEmail'];
$nic =  $_POST['formNIC'];
$mobile = $_POST['formMobile'];
$role = $_POST['size'];
$pw = "$2y$10$CkFzc1DxVFeJ5X8vKsvuBOr2I43zhw6Kzy/7lYjhXbNLkVvZzhHVm";
$Admin_auth="yes";


// attempt insert query execution
$sql = "INSERT INTO employee (F_Name,L_Name, E_nic, E_email, E_tel, E_jobrole, E_image, E_password, E_on_off, Admin_auth) VALUES ('$fname','$lname', '$nic' ,'$email', '$mobile', '$role', '$image','$pw','','$Admin_auth')";
$db->query($sql);
    header('location:../view/usermanage.php');
// close connection
mysql_close();
?>

