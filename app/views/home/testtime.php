<?php
require_once '../../core/init.php';

//URL to the API
$test = file_get_contents('http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojson');

//Creating json object
$object = json_decode($test);

$default_time = 19800000;
/*$now = DateTime::createFromFormat('U.u', microtime(true));
echo $now->format("m-d-Y H:i:s");*/

$mil = 1451820658207;
$def_time = 19800000;
$seconds = ($mil + $def_time) / 1000;
echo date("d/m/Y H:i:s", $seconds);

//var_dump($object->features[1]);
for($i = 0; $i < sizeof($object->features); $i++){
    $place = $object->features[$i]->properties->place;
    $id = $object->features[1]->id;
    $mag = $object->features[1]->properties->mag;
    $time = $object->features[1]->properties->time;
    $tsunami = $object->features[1]->properties->tsunami;
    $longitude = $object->features[1]->geometry->coordinates[0];
    $latitude = $object->features[1]->geometry->coordinates[1];

    //DB::getInstance()->query()

}

