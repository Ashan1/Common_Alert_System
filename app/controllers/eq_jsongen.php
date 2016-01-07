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

    //Splitting date and time
    $date_obj = new DateTime($result[$i]->time);
    $date = $date_obj->format('Y-m-d');
    $time = $date_obj->format("H:i:s");

    $output .= '{"id":"' . $result[$i]->id . '",';
    $output .= '"date":"' . $date . '",';
    $output .= '"time":"' . $time . '",';
    $output .= '"mag":' . $result[$i]->magnitude . ',';
    $output .= '"tsunami":' . $result[$i]->tsunami . ',';
    $output .= '"place":"' . $result[$i]->place . '",';
    $output .= '"lng":' . $result[$i]->longitude . ',';
    $output .= '"lat":' . $result[$i]->latitude . '}';

}
$output .= "]";

echo $output;


