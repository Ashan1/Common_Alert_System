<?php
/**
 * Created by PhpStorm.
 * User: Dili
 * Date: 11/01/2016
 * Time: 01:49
 */
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

if(isset($_POST['userNIC'])) {
    $id = $_POST['userNIC'];
    $read_status="1";
    $sql = "UPDATE message SET read_status='$read_status' WHERE E_nic= '$id'";
    $db->query($sql);
    $output = json_encode(array( //create JSON data
        'type'=>'text',
        'text' => 'login success'
    ));
    echo $output;
}

?>
