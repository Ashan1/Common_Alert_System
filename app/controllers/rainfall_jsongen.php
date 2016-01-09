<?php
require_once '../core/init.php';

//Get data from the database
$db = DB::getInstance();

$query = "SELECT * FROM rainfall WHERE 1";
$result = $db->query($query)->result();

//Creating Json file from results
$output = "[";
for ($i = 0; $i < $db->count(); $i++){
    if ($output != "["){
        $output .= ",";
    }

    $output .= '{"station":"' . $result[$i]->station . '",';
    $output .= '"basin":"' . $result[$i]->basin . '",';
    $output .= '"lng":' . $result[$i]->longitude . ',';
    $output .= '"lat":' . $result[$i]->latitude . ',';
    $output .= '"rb_id":"' . $result[$i]->rb_id . '",';
    $output .= '"rain_fall":"' . $result[$i]->rain_fall . '"}';

}
$output .= "]";

echo $output;