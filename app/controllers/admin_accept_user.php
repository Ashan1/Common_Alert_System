<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

if(isset($_POST['userNIC'])) {
    $id = $_POST['userNIC'];
    $role = $_POST['jbr'];
    $Admin_auth="1";
    $sql = "UPDATE employee SET E_jobrole='$role', Admin_auth='$Admin_auth' WHERE E_nic= '$id'";
    $db->query($sql);
    $output = json_encode(array( //create JSON data
        'type'=>'text',
        'text' => 'login success'
    ));
    echo $output;
}




?>

