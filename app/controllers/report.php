<?php

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
</head>
<script type="text/javascript">
    window.onload = loadTabContent('../app/controller/tab.php?id=1');
</script>
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

$all='earthquake,reservoir';
switch ($type) {
    case "D":
        $Date=date("y-m-d");
        $rd=$Date;$type1='Today';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date='$Date'");}
        else{$data=$db->query("SELECT * FROM $all WHERE date='$Date'");}
        $db_result=$data->result();
        $count=$data->count();
        break;
    case "W":
        $Date3=date('y-m-d');
        $Date2=date('y-m-d',strtotime("-7 days"));
        $rd=$Date2 ."   to   ".$Date3;$type1='Last Week';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date between '$Date2' AND  '$Date3'");}
        else{$data=$db->query("SELECT * FROM $all WHERE date between '$Date2' AND  '$Date3'");}
        $db_result=$data->result();
        $count=$data->count();
        break;
    case "M":
        $end=date('y-m-d');
        $st=date('y-m-d',strtotime("-31 days"));
        $rd=$st ."   to   ".$end;$type1='Last Month';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date between '" . $st . "' AND  '" . $end . "'");}
        else{$data=$db->query("SELECT * FROM $all WHERE date between '" . $st . "' AND  '" . $end . "'");}
        $db_result=$data->result();
        $count=$data->count();
        break;
    case "Yearly":
        $yend=date('y-m-d');
        $yst=date('y-m-d',strtotime("-365 days"));
        $rd=$yst."   to   ".$yend;$type1='Last Year';
        if($Dtype!=''){
            $data=$db->query("SELECT * FROM $Dtype WHERE date between '" . $yst . "' AND  '" . $yend . "'");}
        else{$data=$db->query("SELECT * FROM $all WHERE date between '" . $yst . "' AND  '" . $yend . "'");}
        $db_result=$data->result();
        $count=$data->count();
        break;
    case "O":
        $fd= $_GET['fd'];
        $td= $_GET['td'];
        $rd=$fd . " to ". $td;$type1='';
        echo $Dtype;
        if($Dtype!=''){$data=$db->query("SELECT * FROM $Dtype WHERE date between ' $fd ' AND  '$td '");}
        else{$data=$db->query("SELECT * FROM $all WHERE date between ' $fd ' AND  '$td'");}
        $db_result=$data->result();
        $count=$data->count();
        break;
    default:
        $data1=$db->query("SELECT * FROM earthquake WHERE date='$today'")->result();
        $data2=$db->query("SELECT * FROM reservoir")->result();
        $count1=$db->query("SELECT * FROM earthquake WHERE date='$today'")->count();
        $count2=$db->query("SELECT * FROM reservoir")->count();
        $rd=$today;$type1='Today All';
        break;
}


?>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function Printpage() {
        var alphaExp = /^[a-zA-Z]+$/;
        if(document.myForm.name.match(alphaExp)){
            print();
            document.myForm.name.focus();
            return false;
        }
    };
    $(document).ready(function(){
        $(".btn1").click(function(){
            $(".btn1").hide();
            $(".Rform").hide();
            $(".head1").show();
            $('#sidemenu').animate({width:'toggle'},350);
            $('.left-side').toggleClass("collapse-left");
            $(".right-side").toggleClass("strech");
        });
    });

</script>
</body>