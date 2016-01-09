<?php

require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();
$tdy=date('y-m-d');


$edata=$db->query("SELECT * FROM earthquake WHERE date='$tdy'")->count();
$ldata=$db->query("SELECT * FROM landslide WHERE date='$tdy'")->count();
$rdata=$db->query("SELECT * FROM reservoir")->count();
$cdata=$db->query("SELECT * FROM cyclone WHERE date='$tdy'")->count();
$fdata=$db->query("SELECT * FROM flood WHERE date='$tdy'")->count();
$tdata=$db->query("SELECT * FROM tsunami WHERE date='$tdy'")->count();
$vdata=$db->query("SELECT * FROM volcano WHERE date='$tdy'")->count();

?>