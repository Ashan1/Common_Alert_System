<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$q1 = "SELECT * FROM alert WHERE Taable_Name = 'earthquake'";
$dq1 = $db->query($q1)->count();
$q2 = "SELECT * FROM alert WHERE Taable_Name = 'flood'";
$dq2 = $db->query($q2)->count();
$q3 = "SELECT * FROM alert WHERE Taable_Name = 'reservoir'";
$dq3 = $db->query($q3)->count();
$q4 = "SELECT * FROM alert WHERE Taable_Name = 'rainfall'";
$dq4 = $db->query($q4)->count();

?>