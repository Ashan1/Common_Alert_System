<?php
require_once '../core/init.php';

//Get data from the database
$db = DB::getInstance();

$query = "SELECT * FROM reservoir WHERE 1";
$result = $db->query($query)->result();

//Creating Json file from results
$output = "[";
for ($i = 0; $i < $db->count(); $i++){
    if ($output != "["){
        $output .= ",";
    }

    $output .= '{"reservoir_name":"' . $result[$i]->reservoir_name . '",';
    $output .= '"district":"' . $result[$i]->district . '",';
    $output .= '"lng":' . $result[$i]->longitude . ',';
    $output .= '"lat":' . $result[$i]->latitude . ',';
    $output .= '"major_basin":"' . $result[$i]->major_basin . '",';
    $output .= '"catchment_area":' . $result[$i]->catchment_area . ',';
    $output .= '"capacity":' . $result[$i]->capacity . ',';
    $output .= '"specified_acerage":"' . $result[$i]->specified_acerage . '",';
    $output .= '"max_bund_height":' . $result[$i]->max_bund_height . ',';
    $output .= '"full_supply_depth":' . $result[$i]->full_supply_depth . ',';
    $output .= '"water_depth_above_sluice":' . $result[$i]->water_depth_above_sluice . ',';
    $output .= '"spilling":' . $result[$i]->spilling . ',';
    $output .= '"gate_open":' . $result[$i]->gate_open . '}';


}
$output .= "]";

echo $output;