
<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

if(isset($_POST['nic'])){
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $email = $_POST['email'];
    $nic =  $_POST['nic'];
    $mobile = $_POST['mobile'];
    $role = $_POST['job_role'];
    $Admin_auth="1";

    $pw = 'ças@123';
    $new_pass = password_hash($pw, PASSWORD_DEFAULT);

// attempt insert query execution
    $sql = "INSERT INTO employee (F_Name,L_Name, E_nic, E_email, E_tel, E_jobrole, E_image, E_password, E_on_off, Admin_auth) VALUES ('$fname','$lname', '$nic' ,'$email', '$mobile', '$role', '$image','$new_pass','','$Admin_auth')";
    $db->query($sql);
    header('location:../view/usermanage.php');
}
?>

