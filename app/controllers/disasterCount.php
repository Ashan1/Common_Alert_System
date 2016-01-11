<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$q1 = "SELECT * FROM alert WHERE Table_Name = 'earthquake'";
$dq1 = $db->query($q1)->count();
$q2 = "SELECT * FROM alert WHERE Table_Name = 'flood'";
$dq2 = $db->query($q2)->count();
$q3 = "SELECT * FROM alert WHERE Table_Name = 'reservoir'";
$dq3 = $db->query($q3)->count();
$q4 = "SELECT * FROM alert WHERE Table_Name = 'rainfall'";
$dq4 = $db->query($q4)->count();

$total = $dq1 + $dq2 + $dq3 + $dq4;

$earth = $dq1/$total;
$flood = $dq2/$total;
$reservoir = $dq3/$total;
$rainfall = $dq4/$total;

$e1 = number_format((float)$earth, 2, '.', '');
$e2 = number_format((float)$flood, 2, '.', '');
$e3 = number_format((float)$reservoir, 2, '.', '');
$e4 = number_format((float)$rainfall, 2, '.', '');

?>