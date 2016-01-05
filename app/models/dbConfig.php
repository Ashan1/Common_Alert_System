<?php

session_start();

$db_host="localhost";
$db_user = "root";
$db_pass = "";
$db_name="cas";

try {
    $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}

include_once "user_class.php";

$user = new USER($db_con);

?>
