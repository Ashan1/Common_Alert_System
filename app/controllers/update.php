<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$id=$_GET['emp_id'];
//$id = $_SESSION['sessionVar'];
$job = $_POST['size'];
if ($job){
    $sql2 =  "UPDATE employee SET E_jobrole='$job' WHERE E_nic= '$id'";
    $db->query($sql2);
    header('location:../view/usermanage.php');
}

?>