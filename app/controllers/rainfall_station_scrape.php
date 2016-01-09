<?php
require_once '../core/init.php';

//Url of irrigation department reservoir details
$url = "http://www.irrigation.gov.lk/index.php?option=com_gmapfp&view=gmapfp&layout=categorie&catid=125&id_perso=0&Itemid=223&lang=en";

$html = file_get_contents($url);

//Regular expression to capture the reservoir details off the url

$reg = '/GLatLng\(([0-9]+.[0-9]+),([0-9]+.[0-9]+)\).*?n>([A-z]+).*?\/td.*?\/td><td>([A-z]+ [A-z]+) \((.*?)\)/';

//Getting data off website
preg_match_all($reg, $html, $posts, PREG_SET_ORDER);

$db = DB::getInstance();


foreach ($posts as $post) {

    $station = trim($post[3]);
    $basin = trim($post[4]);
    $rb_id = trim($post[5]);
    $latitude = floatval($post[1]);
    $longitude = floatval($post[2]);
    echo $station;


    //Saving to database
    $db->query("INSERT IGNORE INTO rainfall(station, basin, rb_id, latitude, longitude) VALUES('$station', '$basin', '$rb_id', '$latitude', '$longitude')");

}


