<meta http-equiv="refresh" content="3" >
<?php
require_once '../core/init.php';

//URL to the API
$test = file_get_contents('http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_day.geojson');

//Creating json object
$object = json_decode($test);

//To convert to local timezone(UTC + 5.30)
$def_time = 16200000;

$db = DB::getInstance();

//var_dump($object->features[1]);
for($i = 0; $i < sizeof($object->features); $i++){

    //Extracting data off Json array
    $place = $object->features[$i]->properties->place;
    $id = $object->features[$i]->id;
    $mag = $object->features[$i]->properties->mag;
    $time = $object->features[$i]->properties->time;

    //Converting time to DateTime - DST hour
    $seconds = ($time + $def_time) / 1000;
    $datetime = date("Y-m-d H:i:s", $seconds);

    //Splitting date and time
    $date_obj = new DateTime($datetime);
    $date = $date_obj->format('Y-m-d');
    $time = $date_obj->format("H:i:s");

    $tsunami = $object->features[$i]->properties->tsunami;
    $longitude = $object->features[$i]->geometry->coordinates[0];
    $latitude = $object->features[$i]->geometry->coordinates[1];

    //Saving the data in the database
    $db->query("INSERT IGNORE INTO earthquake VALUES('$id', '$date', '$time', '$mag', '$tsunami', '$place', '$longitude', '$latitude')");

}

