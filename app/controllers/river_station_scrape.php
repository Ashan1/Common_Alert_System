<?php
require_once '../core/init.php';

//Url of irrigation department reservoir details
$url = "http://www.irrigation.gov.lk/index.php?option=com_gmapfp&view=gmapfp&layout=categorie&catid=126&id_perso=0&Itemid=222&lang=en";

$html = file_get_contents($url);

//Regular expression to capture the reservoir details off the url

$reg = '/GLatLng\(([0-9]+.[0-9]+),([0-9]+.[0-9]+)\).*?<span>(.*?)<.*?Ri.*?<td>(.*?) \((.*?)\).*?\).*?<td>(.*?)<.*?\).*?<td>(.*?)<.*?\).*?<td>(.*?)<.*?>/';

//Getting data off website
preg_match_all($reg, $html, $posts, PREG_SET_ORDER);

$db = DB::getInstance();

foreach ($posts as $post) {

    $station = trim($post[3]);
    $river = trim($post[4]);
    $rb_id = trim($post[5]);
    $catchment = $post[6];
    $alert_level = $post[7];
    $major_flood = $post[8];
    $latitude = floatval($post[1]);
    $longitude = floatval($post[2]);

    //Saving to database
    $db->query("INSERT IGNORE INTO river(station, river, rb_id, catchment_area, alert_level, major_flood_level, latitude, longitude) VALUES('$station', '$river', '$rb_id', '$catchment', '$alert_level', '$major_flood', '$latitude', '$longitude')");

}


