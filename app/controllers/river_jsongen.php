<?php
require_once '../core/init.php';

//Get data from the database
$db = DB::getInstance();

$query = "SELECT * FROM river WHERE 1";
$result = $db->query($query)->result();

//Creating Json file from results
$output = "[";
for ($i = 0; $i < $db->count(); $i++){
    if ($output != "["){
        $output .= ",";
    }

    $output .= '{"station":"' . $result[$i]->station . '",';
    $output .= '"river":"' . $result[$i]->river . '",';
    $output .= '"lng":' . $result[$i]->longitude . ',';
    $output .= '"lat":' . $result[$i]->latitude . ',';
    $output .= '"rb_id":"' . $result[$i]->rb_id . '",';
    $output .= '"catchment":"' . $result[$i]->catchment_area . '",';
    $output .= '"alert_level":"' . $result[$i]->alert_level . '",';
    $output .= '"minor_flood_level":"' . $result[$i]->minor_flood_level . '",';
    $output .= '"major_flood_level":"' . $result[$i]->major_flood_level . '",';
    $output .= '"current_level":"' . $result[$i]->current_level . '",';
    $output .= '"alert":"' . $result[$i]->alert . '"}';

}
$output .= "]";

echo $output;