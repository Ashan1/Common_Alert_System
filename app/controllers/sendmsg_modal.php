<?php
/**
 * Created by PhpStorm.
 * User: Dili
 * Date: 10/01/2016
 * Time: 15:19
 */

require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();
$user_nic = $_SESSION['user_session'];

$send_to_user = $_POST['to_user'];
list($split_fname, $split_lname) = explode(' ', $send_to_user);
$send_details = $db->query("SELECT * FROM employee WHERE F_Name = '$split_fname' AND L_Name='$split_lname'");
$emp_name = $send_details->result();
$to_user = $emp_name[0]->E_nic;
$from_user = $user_nic;
$message1 = $_POST['msg'];
$date=date("Y-m-d");
$time=date("H:m:s");

$sql_for_send = $db->query("INSERT INTO message(`msg_time`,`msg_date`,`to_user`, `from_user`, `read_status`, `deleted`, `sent_deleted`, `message`) VALUES ('$time','$date','$to_user','$from_user','0','0','0','$message1') ");
$a = $sql_for_send->result();
header('location:../view/message_inbox.php');

?>
