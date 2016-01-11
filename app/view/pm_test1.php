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

$q = "SELECT * FROM temp_alert";
$d = $db->query($q);
$r = $d->result();


//echo $r[0]->E_Time;


if($d->count()>0) {
    $output = "[";
    for ($i = 0; $i < $d->count(); $i++) {
        $dtable = $r[$i]->Table_Name;
        $temp_Alert = $r[$i]->Alert_ID;
        $dID = $r[$i]->Disaster_ID;
        $query1 = "SELECT * FROM $dtable WHERE id = '$dID'";
        $recent = $db->query($query1);
        $dalert = $recent->result();
        $rwc = $recent->count();

        switch ($dtable) {
            case "earthquake":
                if ($output != "["){
                    $output .= ",";
                }
                $output .= '{"DisasterType":"' . $dtable . '",';
                $output .= '"Mag":"' . $dalert[0]->magnitude . '",';
                $output .= '"Place":"' . $dalert[0]->place . '"}';
                $output .= "]";
                echo $output;
                $dq = "DELETE FROM temp_alert WHERE  Alert_ID ='$temp_Alert'";
                //$db->query($dq);
                break;
            case "reservoir":
                if ($output != "["){
                    $output .= ",";
                }
                $output .= '{"DisasterType":"' . $dtable . '",';
                $output .= '"GateOpen":"' . $dalert[0]->gate_open . '",';
                $output .= '"Distric":"' . $dalert[0]->distric . '",';
                $output .= '"reservoir_name":"' . $dalert[0]->reservoir_name . '"}';
                $output .= "]";
                echo $output;
                $dq = "DELETE FROM temp_alert WHERE  Alert_ID ='$temp_Alert'";
                //$db->query($dq);
                break;
            case "tsunami":
                if ($output != "["){
                    $output .= ",";
                }
                $output .= '{"DisasterType":"' . $dtable . '",';
                $output .= '"Mag":"' . $dalert[0]->magnitude . '",';
                $output .= '"Place":"' . $dalert[0]->place . '"}';
                $output .= "]";
                echo $output;
                $dq = "DELETE FROM temp_alert WHERE  Alert_ID ='$temp_Alert'";
                //$db->query($dq);
                break;
            case "flood":
                if ($output != "["){
                    $output .= ",";
                }
                $output .= '{"DisasterType":"' . $dtable . '",';
                $output .= '"rel_table":"' . $dalert[0]->rel_table . '",';
                $output .= '"flood_type":"' . $dalert[0]->flood_type . '",';
                $output .= '"Place":"' . $dalert[0]->station . '"}';
                $output .= "]";
                echo $output;
                $dq = "DELETE FROM temp_alert WHERE  Alert_ID ='$temp_Alert'";
                //$db->query($dq);
                break;
        }


    }
}
/*$d = 1;
if($d==1){
    echo json_encode(array('success' => 'gg'));
}else if($d==0){
    echo json_encode(array('success' => 'hello'));
    exit();
}*/


//$db->query($dq);
//echo json_encode($output);
//exit();