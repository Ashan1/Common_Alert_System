<?php
error_reporting(0);
$Dtype=$_GET['id'];
$today=date("Y-m-d");
echo "Today ".$Dtype." Disasters";
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

switch ($Dtype) {
    case "earthquake":
        include"../view/disasters/earthquake.php";
        break;
    case "landslide":
        include"../view/disasters/landslide.php";
        break;
    case "flood":
        include"../view/disasters/flood.php";
        break;
    case "reservoir":
        include"../view/disasters/reservoir.php";
        break;
    case "tsunami":
        include"../view/disasters/tsunami.php";
        break;
    case "cyclone":
        include"../view/disasters/cyclone.php";
        break;
    default:
        include"../view/disasters/all.php";
}?>