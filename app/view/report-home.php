<?php include "../templates/header.php";
require_once '../core/init.php';
require_once '../models/dbConfig.php';
require_once '../controllers/report.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
<meta http-equiv="Cache-control" content="no-cache">
<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
</head>
<body>
<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">
                <!-----------------Generate Report-Start---------------->
                <div class="col-lg-12 Rform" >
                    <h1 style="color: #00080C;text-align: left">GENERATE REPORT</h1>
                    <div class="col-lg-2" style="font-size: larger">Select Report Type </div>
                    <div class="col-lg-10">
                        <form onsubmit="return submitResult()" style="font-size: larger" action="">
                            <div class="col-lg-12 lefts">
                                <div class="col-lg-3" >
                                    <label>
                                        <select class='type' name="type"  required>
                                            <option value="">[-Select type-]</option>
                                            <option value="D">Today</option>
                                            <option value="W">Last Week</option>
                                            <option value="M">Last Month</option>
                                            <option value="Yearly">Last Year</option>
                                            <option value="O">Other</option>
                                        </select>
                                    </label>
                                </div>

                                <div class="col-lg-8 O"   style="display:none" >
                                    From: <input type="date" placeholder="From-Date" class="x f" name="fd" formnovalidate>
                                    To: <input type="date" placeholder="To-Date" class="x t" name="td" >
                                </div>
                            </div><br>
                            <div class="col-lg-12" required>
                                <input type="radio" name="dis_type" value="" checked> All&nbsp;
                                <input type="radio" name="dis_type" value="earthquake"> Earthquakes&nbsp;
                                <input type="radio" name="dis_type" value="landslide"> Landslide&nbsp;
                                <input type="radio" name="dis_type" value="reservoir"> Reservoir&nbsp;
                                <input type="radio" name="dis_type" value="cyclone"> Cyclone&nbsp;
                                <input type="radio" name="dis_type" value="flood"> Flood&nbsp;
                                <input type="radio" name="dis_type" value="tsunami"> Tsunami Alert&nbsp;
                                <!--<input type="radio" name="dis_type" value="Volcano"> Volcano&nbsp;-->
                            </div>
                            <div class="col-lg-12">
                            <input data-toggle="modal" data-target="#myModal" class="btn btn-default btn-primary" type="submit"  value="View Report" >
                            </div>
                        </form>
                    </div>
                </div>
                <!-----------------Generate Report-End---------------->

                <!------------------ Report-Start---------------->
                <div  style="text-align: center;display:none" class="head1"><h1 > DISASTER MANAGEMENT CENTER</h1>
                    <h2 > Daily Situation Report</h2>
                    <p><b> Report Period:</b> <?php echo $rd ?><br>
                      </p>
                </div>
                <div style="text-align: right;"><form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>
                    </form></div>

                <div style="text-align: center;font-size: medium"><b><?php echo $type1."\t\t ".$Dtype;?> Disasters</b></div>
                <?php
                switch ($Dtype) {
                    case "earthquake":
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: x-small;height:50%;width: 100%">
                                <col width="40">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                <thead>
                <tr>
                    <th>#</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>MAGNITUDE</th>
                    <th>LOCATION</th>
                </tr>
                </thead>
                <tbody>';


                        if($count>0) {
                            for ($i = 0; $i < $count; $i++) {
                                $j=$i+1;
                                //$name=$db_result[$i]->E_name;
                                echo
                                "<tr>
                                        <td>{$j}</td>
                                        <td>{$db_result[$i]->date}</td>
                                        <td>{$db_result[$i]->time}</td>
                                        <td>{$db_result[$i]->magnitude}</td>
                                        <td>{$db_result[$i]->place}</td>
                                        </tr>\n";
                            }
                        }
                        echo"</tbody>
            </table>";break;
                    case "landslide":
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: x-small;height:50%;width: 100%">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                <thead>
                <tr>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>MAGNITUDE</th>
                    <th>LATITUDE</th>
                    <th>LONGITUDE</th>
                    <th>LOCATION</th>
                </tr>
                </thead>
                <tbody>';


                        if($count>0) {
                            for ($i = 0; $i < $count; $i++) {
                                //$name=$db_result[$i]->E_name;
                                echo
                                "<tr>
                                        <td>{$db_result[$i]->date}</td>
                                        <td>{$db_result[$i]->time}</td>
                                        <td>{$db_result[$i]->magnitude}</td>
                                        <td>{$db_result[$i]->latitude}</td>
                                        <td>{$db_result[$i]->longitude}</td>
                                        <td>{$db_result[$i]->place}</td>
                                        </tr>\n";
                            }
                        }
                        echo"</tbody>
            </table>";break;
                    case "reservoir":
                        $data=$db->query("SELECT * FROM reservoir");
                        $db_result=$data->result();
                        $count=$data->count();
                        echo "Show all recent reservoir records";
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: x-small;height:50%;width: 100%">
                                <col width="40">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                <thead>
                <tr>
                    <th>#</th>
                    <th>RESERVOIR NAME</th>
                    <th>DISTRICT</th>
                    <th>MAJOR BASIN</th>
                    <th>SPILLING</th>
                    <th>GATE OPEN</th>
                </tr>
                </thead>
                <tbody>';


                        if($count>0) {
                            for ($i = 0; $i < $count; $i++) {
                                $j=$i+1;
                                //$name=$db_result[$i]->E_name;
                                echo
                                "<tr>
                                        <td>{$j}</td>
                                        <td>{$db_result[$i]->reservoir_name}</td>
                                        <td>{$db_result[$i]->district}</td>
                                        <td>{$db_result[$i]->major_basin}</td>
                                        <td>{$db_result[$i]->spilling}</td>
                                        <td>{$db_result[$i]->gate_open}</td>
                                        </tr>\n";
                            }
                        }
                        echo"</tbody>
            </table>";break;
                    case "cyclone":
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size:x-small;height:50%;width: 100%">
                                <col width="40">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                <thead>
                <tr>
                    <th>#</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>MAGNITUDE</th>
                    <th>LATITUDE</th>
                    <th>LONGITUDE</th>
                    <th>LOCATION</th>
                </tr>
                </thead>
                <tbody>';


                        if($count>0) {
                            for ($i = 0; $i < $count; $i++) {
                                $j=$i+1;//$name=$db_result[$i]->E_name;
                                echo
                                "<tr>
                                        <td>{$j}</td>
                                        <td>{$db_result[$i]->time}</td>
                                        <td>{$db_result[$i]->magnitude}</td>
                                        <td>{$db_result[$i]->latitude}</td>
                                        <td>{$db_result[$i]->longitude}</td>
                                        <td>{$db_result[$i]->place}</td>
                                        </tr>\n";
                            }
                        }
                        echo"</tbody>
            </table>";break;
                    case "flood":

                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: x-small;height:50%;width: 100%">
                                <col width="40">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                <thead>
                <tr>
                    <th>#</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>MAGNITUDE</th>
                    <th>LATITUDE</th>
                    <th>LONGITUDE</th>
                    <th>LOCATION</th>
                </tr>
                </thead>
                <tbody>';


                        if($count>0) {
                            for ($i = 0; $i < $count; $i++) {
                                $j=$i+1;
                                //$name=$db_result[$i]->E_name;
                                echo
                                "<tr>
                                        <td>{$j}</td>
                                        <td>{$db_result[$i]->date}</td>
                                        <td>{$db_result[$i]->time}</td>
                                        <td>{$db_result[$i]->magnitude}</td>
                                        <td>{$db_result[$i]->latitude}</td>
                                        <td>{$db_result[$i]->longitude}</td>
                                        <td>{$db_result[$i]->place}</td>
                                        </tr>\n";
                            }
                        }
                        echo"</tbody>
            </table>";break;
                    case "tsunami":
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: x-small;height:50%;width: 100%">
                                <col width="40">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                                <col width="220">
                <thead>
                <tr>
                    <th>#</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>MAGNITUDE</th>
                    <th>LOCATION</th>
                    <th>TSUNAMI ALERTS</th>
                </tr>
                </thead>
                <tbody>';


                        if($count>0) {
                            for ($i = 0; $i < $count; $i++) {
                                $j=$i+1;
                                //$name=$db_result[$i]->E_name;
                                echo
                                "<tr>
                                        <td>{$j}</td>
                                        <td>{$db_result[$i]->date}</td>
                                        <td>{$db_result[$i]->time}</td>
                                        <td>{$db_result[$i]->magnitude}</td>
                                        <td>{$db_result[$i]->place}</td>
                                        <td>Yes</td>
                                        </tr>\n";
                            }
                        }
                        echo"</tbody>
            </table>";break;
                    case "":
                        $ydy=date('y-m-d',strtotime("-7 days"));
                    echo $Dtype;
            if($count1<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
            echo '<table  class="table table-striped th" style="font-size: x-small;font-family: Lora,serif;height:50%;width: 100%;">
                <col width="20">
                <col width="320">
                <col width="320">
                <col width="320">
                <col width="320">
                <col width="320">
                <col width="320">
                <col width="320">
                <col width="320">
                <thead style="width: 100%">
                <tr>
                    <th>#</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>MAGNITUDE</th>
                    <th>LOCATION</th>
                    <th>RESERVOIR NAME</th>
                    <th>MAJOR BASIN</th>
                    <th>SPILLING</th>
                    <th>GATE OPEN</th>
                </tr>
                </thead>
                <tbody>';


                    if($count1>0) {
                        for ($i = 0; $i < $count1; $i++) {
                            $j=$i+1;
                            //$name=$db_result[$i]->E_name;
                            echo
                            "<tr>
                                        <td>{$j}</td>
                                        <td>{$data1[$i]->date}</td>
                                        <td>{$data1[$i]->time}</td>
                                        <td>{$data1[$i]->magnitude}</td>
                                        <td>{$data1[$i]->place}</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        </tr>\n";
                        }
                    }
                        if($count2>0) {
                            for ($i = 0; $i < $count2; $i++) {
                                $j=$i+$count1+1;//$name=$db_result[$i]->E_name;
                                echo
                                "<tr>
                                        <td>{$j}</td>
                                        <td>{$ydy}</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>{$data2[$i]->reservoir_name}</td>
                                        <td>{$data2[$i]->major_basin}</td>
                                        <td>{$data2[$i]->spilling}</td>
                                        <td>{$data2[$i]->gate_open}</td>
                                        </tr>\n";
                            }
                        }
                    echo"</tbody>
            </table>";}
                ?>

        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p style="color: red">Insert Date Correctlly.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="../../public/js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("select").change(function () {
            $(this).find("option:selected").each(function () {
                if ($(this).attr("value") == "") {
                    $(".btn").prop("disabled", true);
                }
                else if ($(this).attr("value") == "O") {
                    $(".box").not(".O").hide();
                    $(".O").show();
                    $(".x").prop("required", true);
                    $(".btn").prop("disabled", false);

                }
                else if ($(this).attr("value") != "O") {
                    $(".btn").prop("disabled", false);
                    $(".O").hide();
                }
            });
        }).change();
    });
    function submitResult() {
        if (($(".f").val() > $(".t").val()) && ($(".f").val() != '' && $(".t").val() != '')) {
            $("#myModal").slideDown();
            return false;
        }
        else {
            return true;
        }
    };
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
            $('#sidemenu').animate({width:'toggle'},350);
            $('.left-side').toggleClass("collapse-left");
            $(".right-side").toggleClass("strech");
            $(".btn1").hide();
            $(".Rform").hide();
            $(".head1").show();

        });
    });

</script>
</body>