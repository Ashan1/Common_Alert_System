<?php
require_once '../core/init.php';

//Url of irrigation department reservoir details
$url = "http://www.irrigation.gov.lk/index.php?option=com_reservoirdata&Itemid=255&lang=en";

$html = file_get_contents($url);

//Regular expression to capture the reservoir details off the url

$reg = '/<div class=\"tip\">(.*)<d.*\s.*\s.*\s.*\s.*\s.*\s.*\s.*\s.*?([0-9]+.[0-9]+).*\s.*\s.*?([0-9]+.[0-9]+).*\s.*\s.*\s.*\s.*\s.*\s.*((Yes)|(No)).*\s.*((Yes)|(No)).*/';

//Getting data off website
preg_match_all($reg, $html, $posts, PREG_SET_ORDER);


$db = DB::getInstance();

foreach ($posts as $post) {

    $res_name = $post[1];
    $depth = $post[2];
    $depth_above_sluice = $post[3];
    $spill = $post[4];
    $gate_open = $post[7];

    //Saving to database
    $db->query("UPDATE reservoir SET full_supply_depth = '$depth', water_depth_above_sluice = '$depth_above_sluice', spilling = '$spill', gate_open = '$gate_open' WHERE reservoir_name = '$res_name'");

}
