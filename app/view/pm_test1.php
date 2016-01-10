<?php
/**
 * Created by PhpStorm.
 * User: PM
 * Date: 1/9/2016
 * Time: 4:43 PM
 */

require_once '../core/init.php';
require_once '../models/dbConfig.php';

$db = DB::getInstance();

$q = "SELECT * FROM alert";
$d = $db->query($q);
$r = $d->result();

$dq = "DELETE FROM alert";

//echo $r[0]->E_Time;


if($d->count()>0){
    $output = "[";
    for ($i = 0; $i < $db->count(); $i++){
        if ($output != "["){
            $output .= ",";
        }

        $output .= '{"Tname":"' . $r[$i]->Table_Name . '",';
        $output .= '"DID":"' . $r[$i]->Disaster_ID . '"}';

    }
    $output .= "]";
    echo $output;
    //$db->query($dq);
    //echo json_encode($output);
    //exit();
}
else{
    echo json_encode(array('success' => 'No'));
    exit();
}
/*$d = 1;
if($d==1){
    echo json_encode(array('success' => 'gg'));
}else if($d==0){
    echo json_encode(array('success' => 'hello'));
    exit();
}*/

