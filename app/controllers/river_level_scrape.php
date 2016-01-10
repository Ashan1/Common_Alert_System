<?php
require_once '../core/init.php';

//Url of irrigation department reservoir details
$url = "http://www.irrigation.gov.lk/index.php?option=com_riverdata&Itemid=266&lang=en";

$html = file_get_contents($url);

//Regular expression to capture the reservoir details off the url

$reg = '/<div class=\"tip\">(.*?)<.*
.*
.*
.*
.*
.*
.*
.*
.*
.*
.*
.*
.*?er">(.*?)<.*
.*
.*
.*
.*
.*?(([0-9]+.[0-9]+)|(-)).*
.*
.*
(.*?)<\//';


//Getting data off website
preg_match_all($reg, $html, $posts, PREG_SET_ORDER);


$db = DB::getInstance();


foreach ($posts as $post) {

    $station = trim($post[1]);
    $minor_flood_level = $post[2];
    $current_level = $post[3];
    $alert = trim($post[6]);

    //Saving to database
    $db->query("UPDATE river SET minor_flood_level = '$minor_flood_level', current_level = '$current_level', alert = '$alert' WHERE station = '$station'");

}
