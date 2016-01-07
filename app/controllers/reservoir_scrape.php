<?php
require_once '../core/init.php';

//Url of irrigation department reservoir details
$url = "http://www.irrigation.gov.lk/index.php?option=com_gmapfp&view=gmapfp&layout=categorie&catid=124&id_perso=0&Itemid=221&lang=en";

$html = file_get_contents($url);

//Regular expression to capture the reservoir details off the url

$reg = '/GLatLng\(([0-9]+.[0-9]+),([0-9]+.[0-9]+).*?<span>(.*?)<\/span>.*?District.*?<td>(.*?)<.*?r2.*?td.*?<td>(.*?)<.*?<br.*?<td>(.*?)<.*?<br.*?<td>(.*?)<.*?<br.*?<td>(.*?)<.*?<br.*?<td>(.*?)</';

//Getting data off website
preg_match_all($reg, $html, $posts, PREG_SET_ORDER);

$db = DB::getInstance();



foreach ($posts as $post) {

    $res_name = trim($post[3]);
    $district = trim($post[4]);
    $latitude = floatval($post[1]);
    $longitude = floatval($post[2]);
    $maj_basin = trim($post[5]);
    $catchment = $post[6];
    $capacity = $post[7];
    $acerage = $post[8];
    $bund_height = $post[9];

    //Saving to database
    $db->query("INSERT IGNORE INTO reservoir(reservoir_name, district, latitude, longitude, major_basin, catchment_area, capacity, specified_acerage, max_bund_height) VALUES('$res_name', '$district', '$latitude', '$longitude', '$maj_basin', '$catchment', '$capacity', '$acerage', '$bund_height')");

}


