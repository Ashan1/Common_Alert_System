<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$id=$_GET['Auth_eid'];
$name= $_POST['auth_nameup'];
$tel= $_POST['auth_telup'];
$add=$_POST['auth_addressup'];
$mail=$_POST['auth_emailup'];

$sql2 =$db->query(" UPDATE external_authority SET Auth_name='$name',Auth_tel= '$tel', Auth_address= '$add',Auth_email='$mail' WHERE Auth_ID ='$id'");
$dbresult=$sql2->error();
var_dump($db->query($delete)->result());
    header('location:../view/ExternalAuthority_update.php');

?>