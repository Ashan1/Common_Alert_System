<?php
require_once '/../core/init.php';
require_once '/../models/dbConfig.php';
$db = DB::getInstance();

$query = "SELECT * FROM alert ORDER BY Alert_ID DESC LIMIT 1";
$al = $db->query($query);
$a = $al->result();

$dtable = $a[0]->Table_Name;
$dID = $a[0]->Disaster_ID;
//echo $dID;

$query1 = "SELECT * FROM $dtable WHERE id = '$dID'";
$recent = $db->query($query1);
$r = $recent->result();

