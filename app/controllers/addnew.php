
<?php
require_once '../core/init.php';
require_once '../model/dbConfig.php';
$db = DB::getInstance();

$name = $_POST['formName'];
$email = $_POST['formEmail'];
$nic =  $_POST['formNIC'];
$mobile = $_POST['formMobile'];
$add = $_POST['formAddress'];
$role = $_POST['size'];
$pw = "$2y$10$CkFzc1DxVFeJ5X8vKsvuBOr2I43zhw6Kzy/7lYjhXbNLkVvZzhHVm";

// attempt insert query execution
$sql = "INSERT INTO employee (E_name, E_nic, E_email, E_tel, E_address, E_job_role, E_image, E_username, E_password) VALUES ('$name', '$nic' ,'$email', '$mobile', '$add', '$role', '$image','$email','$pw')";
$db->query($sql);
    header('location:../view/usermanage.php');
// close connection
mysql_close();
?>

