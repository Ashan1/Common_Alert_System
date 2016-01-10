<?php
/**
 * Created by PhpStorm.
 * User: Dili
 * Date: 09/01/2016
 * Time: 18:59
 */

require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();



if(isset($_POST['userNIC'])) {
    $id = $_POST['userNIC'];
    $delete = "DELETE FROM employee WHERE E_nic='$id'";
    $db->query($delete);
    $output = json_encode(array( //create JSON data
        'type'=>'text',
        'text' => 'login success'
    ));
    echo $output;
}

?>
