<?php
/**
 * Created by PhpStorm.
 * User: Dili
 * Date: 02/11/2015
 * Time: 11:08
 */

include "../../../public/php/connect.php";
session_start();
$name = $_POST['auth_name'];
$tel = $_POST['auth_tel'];
$address=  $_POST['auth_address'];
$email = $_POST['auth_email'];
$update=$_GET['button'];
$id = $_SESSION['sessionVar'];

$sql = "UPDATE external_authority SET Auth_name=$name, Auth_tel=$tel, Auth_address=$address, Auth_email=$email WHERE E_nic='$id'";
if (mysql_query($sql)) {
    // header('location:adduser.php');
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=External.php\">";
}
// close connection
mysql_close();
?>