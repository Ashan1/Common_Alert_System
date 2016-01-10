<?php
$p = $_GET['id'];

switch($p) {
    case "1":
        include '../view/disastercircles.php';
        break;

    case "2":

        include '../view/home_notification.php';
        break;

    case "3":
        echo 'My hotmail content goes here...<br style="clear:both;" />';
        break;

    case "4":
        include'../view/advicerpnl.php';
        break;

    case "5":
        echo "sakgdsfg sakldfhlskdfh";
        break;

    case "6":

        break;


}
?>