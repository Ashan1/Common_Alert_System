<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$id = $_GET['user_id'];
echo $id;
$role = $_POST['job_role'];
$Admin_auth="1";
/*$reject=$_GET['delete'];
echo $reject;
$accept=$_GET['accept'];
echo $accept;
$a="1";
$b="2";*/

if($_GETT['accept_btn']){
    echo "accept";
    $sql = "UPDATE employee SET E_jobrole='$role', Admin_auth='$Admin_auth' WHERE E_nic= '$id'";
    $db->query($sql);
    header('location:../view/usermanage.php');
}else{
    echo "reject";
    $delete=$db->query("DELETE FROM employee WHERE E_nic='$id'");
    $db_delete=$delete->result();
    header('location:../view/usermanage.php');
}
// attempt insert query execution

// close connection

?>

