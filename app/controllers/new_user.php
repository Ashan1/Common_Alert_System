<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';

$db = DB::getInstance();

$data_notcheck=$db->query("SELECT * FROM employee WHERE Admin_auth='0'");
$db_result=$data_notcheck->result();
$count1=$data_notcheck->count();

/*$query = "SELECT * FROM employee WHERE Admin_auth = 0";
$data = $db->query($query);
$results = $data->result();
$count = $data->count();

$q = "SELECT Emp_ID FROM employee ORDER BY Emp_ID DESC LIMIT 1";
$d = $db->query($q);
$r = $d->result();

echo $r[0]->Emp_ID;*/
?>


