<?php
error_reporting(0);
$Dtype = $_GET['id'];
switch ($Dtype) {
    case "slmap":
        include"../view/slreservoir.php";
        break;
    case "river":
        include"../view/slriver.php";
        break;
    case "rainfall":
        include"../view/slrainfall.php";
        break;
    default:
        include"../view/slreservoir.php";
}

?>