<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$id=$_GET['Auth_id'];
$name= $_POST['auth_nameup'];
$tel= $_POST['auth_telup'];
$add=$_POST['auth_addressup'];

if ($job){
    $sql2 =  "UPDATE external_authority SET Auth_name='$name' WHERE Auth_email= '$id'";
    $db->query($sql2);
    header('location:../view/ExternalAuthority_update.php');
}

?>