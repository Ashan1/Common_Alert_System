<?php
require_once '../core/init.php';

//Url of irrigation department reservoir details
$url = "http://www.irrigation.gov.lk/index.php?option=com_rainfalldata&Itemid=270&lang=en";

$html = file_get_contents($url);

//Regular expression to capture the reservoir details off the url

$reg = '/.*
.*?<td>(.*?)<.*
.*
.*
.*
.*?p">(.*?)<.*
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
.*?(.*?)
.*?<\//';

//Getting data off website
preg_match_all($reg, $html, $posts, PREG_SET_ORDER);


$db = DB::getInstance();
var_dump($posts);


foreach ($posts as $post) {

    $station = trim($post[2]);
    $rain_fall = trim($post[3]);
    echo $rain_fall;

    //Saving to database
    $db->query("UPDATE rainfall SET rain_fall = '$rain_fall' WHERE station = '$station'");

}
