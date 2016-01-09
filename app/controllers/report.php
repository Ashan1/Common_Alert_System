<?php

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
</head>
<body>
<div>
    <div style="background-color: #ecf0f1; border: 2px solid black;">
<?php



$rd=date('y-m-d-l');
/*$data=$db->query("SELECT * FROM disaster");
$db_result=$data->result();
var_dump($db_result);
$count=$data->count();*/

if (isset($_GET['type'])){
    $type = $_GET['type'];
    $Dtype = $_GET['dis_type'];}
else{$type ='';
    $Dtype ='';}
$today=date('Y-m-d');
$all=[$data1=$db->query("SELECT * FROM earthquake WHERE date='$today'")->result(),$data2=$db->query("SELECT * FROM reservoir")->result(),$count1=$db->query("SELECT * FROM earthquake WHERE date='$today'")->count(), $count2=$db->query("SELECT * FROM reservoir")->count(), $rd=$today,$type1='Today All'];
switch ($type) {
    case "D":
        $Date=date("y-m-d");
        $rd=$Date;$type1='Today';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date='$Date'");
            $db_result=$data->result();
            $count=$data->count();}
        else{$all;}

        break;
    case "W":
        $Date3=date('y-m-d');
        $Date2=date('y-m-d',strtotime("-7 days"));
        $rd=$Date2 ."   to   ".$Date3;$type1='Last Week';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date between '$Date2' AND  '$Date3'");
            $db_result=$data->result();
            $count=$data->count();
        }
        else{$data1=$db->query("SELECT * FROM earthquake WHERE date between '$Date2' AND  '$Date3'")->result();
            $data2=$db->query("SELECT * FROM reservoir")->result();
            $count1=$db->query("SELECT * FROM earthquake WHERE date between '$Date2' AND  '$Date3'")->count();
            $count2=$db->query("SELECT * FROM reservoir")->count();}

        break;
    case "M":
        $end=date('y-m-d');
        $st=date('y-m-d',strtotime("-31 days"));
        $rd=$st ."   to   ".$end;$type1='Last Month';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date between '" . $st . "' AND  '" . $end . "'");
            $db_result=$data->result();
            $count=$data->count();
        }
        else{$data1=$db->query("SELECT * FROM earthquake WHERE date between '". $st . "' AND  '" . $end . "'")->result();
            $data2=$db->query("SELECT * FROM reservoir")->result();
            $count1=$db->query("SELECT * FROM earthquake WHERE date between '" . $st . "' AND  '" . $end . "'")->count();
            $count2=$db->query("SELECT * FROM reservoir")->count();}
        break;
    case "Yearly":
        $yend=date('y-m-d');
        $yst=date('y-m-d',strtotime("-365 days"));
        $rd=$yst."   to   ".$yend;$type1='Last Year';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date between '" . $yst . "' AND  '" . $yend . "'");
            $db_result=$data->result();
            $count=$data->count();}
        else{$data1=$db->query("SELECT * FROM earthquake WHERE date between '" . $yst . "' AND  '" . $yend . "'")->result();
            $data2=$db->query("SELECT * FROM reservoir")->result();
            $count1=$db->query("SELECT * FROM earthquake WHERE date between '" . $yst . "' AND  '" . $yend . "'")->count();
            $count2=$db->query("SELECT * FROM reservoir")->count();}
        break;
    case "O":
        $fd= $_GET['fd'];
        $td= $_GET['td'];
        $rd=$fd . " to ". $td;$type1='';
        echo $Dtype;
        if($Dtype!=''){$data=$db->query("SELECT * FROM $Dtype WHERE date between ' $fd ' AND  '$td '");
            $db_result=$data->result();
            $count=$data->count();
        }
        else{$data1=$db->query("SELECT * FROM earthquake WHERE date between ' $fd ' AND  '$td '")->result();
            $data2=$db->query("SELECT * FROM reservoir")->result();
            $count1=$db->query("SELECT * FROM earthquake WHERE date between ' $fd ' AND  '$td '")->count();
            $count2=$db->query("SELECT * FROM reservoir")->count();}
        break;
    default:
        $all;
        /*$data1=$db->query("SELECT * FROM earthquake WHERE date='$today'")->result();
        $data2=$db->query("SELECT * FROM reservoir")->result();
        $count1=$db->query("SELECT * FROM earthquake WHERE date='$today'")->count();
        $count2=$db->query("SELECT * FROM reservoir")->count();
        $rd=$today;$type1='Today All';*/
        break;
}


?>

                </div>
            </div>
        </div>
    </div>
</div>

</body>