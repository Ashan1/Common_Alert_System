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

$id = $_GET['user_id'];

if(isset($_POST['reject_btn'])) {
    $delete = "DELETE FROM employee WHERE E_nic='$id'";
    $db->query($delete);
    header('location:../view/usermanage.php');
}

?>
