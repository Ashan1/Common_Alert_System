<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../index.php');
}

$db = DB::getInstance();

$type=$_POST['save'];

switch ($type) {
    case "earthquake":
        $id = $_POST['id'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $mgtd = $_POST['magnitude'];
        $place = $_POST['place'];
        $tsnmi = $_POST['tsunami'];
        $lngtd = $_POST['longitude'];
        $ltitd = $_POST['latitude'];
        $data=$db->query("INSERT INTO earthquake(id, date, time,magnitude,tsunami,place,longitude,latitude) VALUES ('$id','$date','$time','$mgtd','$tsnmi','$place','$lngtd','$ltitd');");
        break;
    case "landslide":
        $date = $_POST['date'];
        $time = $_POST['time'];
        $lngtd = $_POST['longitude'];
        $ltitd = $_POST['latitude'];
        $place = $_POST['place'];
        $efect_area = $_POST['ef_area'];
        $data=$db->query("INSERT INTO landslide(Date,time, longitude,latitude,place,effective_area) VALUES ('$date','$time','$lngtd','$ltitd','$place','$efect_area');");
        echo "lnd";
        break;
    case "cyclone":
        $date = $_POST['date'];
        $time = $_POST['time'];
        $lngtd = $_POST['longitude'];
        $ltitd = $_POST['latitude'];
        $pressure = $_POST['pressure'];
        $wnd_spd = $_POST['wind_speed'];
        $stage = $_POST['stage'];
        $data=$db->query("INSERT INTO cyclone(date,time,longitude,latitude,pressure,wind_speed,stage) VALUES ('$date','$time','$lngtd','$ltitd','$pressure','$wnd_spd','$stage');");
        break;
    case "flood":
        $station = $_POST['station'];
        $rv_bsn = $_POST['river_basin'];
        $rb_id = $_POST['rb_ID'];
        $lngtd = $_POST['longitude'];
        $ltitd = $_POST['latitude'];
        $fld_typ = $_POST['flood_type'];
        $data=$db->query("INSERT INTO flood(station, river_basin, rb_ID,longitude,latitude,flood_type) VALUES ('$station','$rv_bsn','$rb_id','$lngtd','$ltitd','$fld_typ');");
        echo "fld";
        break;
    case "tsunami":
        $date = $_POST['date'];
        $time = $_POST['time'];
        $mgtd = $_POST['magnitude'];
        $place = $_POST['place'];
        $data=$db->query("INSERT INTO tsunami(date,time,magnitude,place) VALUES ('$date','$time','$mgtd','$place');");
        echo "tttt";
        break;
    case "reservoir":
        $res_name = $_POST['reservoir_name'];
        $distric = $_POST['district'];
        $lngtd = $_POST['longitude'];
        $ltitd = $_POST['latitude'];
        $mjr_bsn = $_POST['major_basin'];
        $ct_area = $_POST['catchment_area'];
        $capacity = $_POST['capacity'];
        $mx_bnd = $_POST['max_bund_height'];
        $fll_dpth = $_POST['full_supply_depth'];
        $spilling = $_POST['spilling'];
        $gt_open = $_POST['gate_open'];
        $data=$db->query("INSERT INTO reservoir(reservoir_name,district, latitude, longitude, major_basin, catchment_area, capacity,max_bund_height,full_supply_depth, spilling,gate_open) VALUES
 ('$res_name','$distric','$ltitd','$lngtd,$mjr_bsn','$ct_area','$capacity','$mx_bnd','$fll_dpth','$spilling','$gt_open');");
        echo "rs";
        break;
}
var_dump($data);
?>