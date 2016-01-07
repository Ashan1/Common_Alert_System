<?php
require_once '../core/init.php';

//Get data from the database
$db = DB::getInstance();

$query = "SELECT * FROM earthquake WHERE 1";
$result = $db->query($query)->result();

//Creating Json file from results
$output = "[";
for ($i = 0; $i < $db->count(); $i++){
    if ($output != "["){
        $output .= ",";
    }

    $output .= '{"id":"' . $result[$i]->id . '",';
    $output .= '"date":"' . $result[$i]->date . '",';
    $output .= '"time":"' . $result[$i]->time . '",';
    $output .= '"mag":' . $result[$i]->magnitude . ',';
    $output .= '"tsunami":' . $result[$i]->tsunami . ',';
    $output .= '"place":"' . $result[$i]->place . '",';
    $output .= '"lng":' . $result[$i]->longitude . ',';
    $output .= '"lat":' . $result[$i]->latitude . '}';

}
$output .= "]";

echo $output;


