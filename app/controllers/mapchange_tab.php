<?php
error_reporting(0);
$Dtype = $_GET['id'];
    switch ($Dtype) {
        case "slmap":
            include"../view/slmap.php";
            break;
        case "worldmap":
            include"../view/worldmap.php";
            break;
        default:
            include"../view/slmap.php";
}

?>