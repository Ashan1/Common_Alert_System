<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

if(isset($_POST['userNIC'])) {
    $output = json_encode(array( //create JSON data
        'type'=>'text',
        'text' => 'login success'
    ));
}

/*$id = $_GET['user_id'];
$role = $_POST['job_role'];
$Admin_auth="1";

if(isset($_POST['accept_btn'])){
    $sql = "UPDATE employee SET E_jobrole='$role', Admin_auth='$Admin_auth' WHERE E_nic= '$id'";
    $db->query($sql);
    header('location:../view/usermanage.php');
}*/


?>

