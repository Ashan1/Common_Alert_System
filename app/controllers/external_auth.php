<?php

require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$name = $_POST['auth_name'];
$tel = $_POST['auth_tel'];
$address=  $_POST['auth_address'];
$email = $_POST['auth_email'];

// attempt insert query execution
$sql = "INSERT INTO external_authority (Auth_newid, Auth_name, Auth_tel, Auth_address, Auth_email) VALUES ('$name', '$tel', '$address', '$email')";
$db->query($sql);
    header('location:../view/ExternalAuthority_update.php');

mysql_close();

?>