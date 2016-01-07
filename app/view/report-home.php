<?php include "../templates/header.php";
error_reporting(10);
require_once '../core/init.php';
require_once '../models/dbConfig.php';
require_once '../controllers/report.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
/*$data=$db->query("SELECT * FROM $dbt WHERE date='$today'");
$count=$data->count();*/?>
<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
</head>
<script type="text/javascript">
    window.onload = loadTabContent('../app/controller/tab.php?id=1');
</script>
<body>
<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">
                <!-----------------Generate Report-Start---------------->
                <div class="col-lg-12 Rform"  style="background-color: #d0e3f0">
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
                                <!--<input type="radio" name="dis_type" value="fire"> Fire&nbsp;-->
                                <input type="radio" name="dis_type" value="cyclone"> Cyclone&nbsp;
                                <input type="radio" name="dis_type" value="flood"> Flood&nbsp;
                                <input type="radio" name="dis_type" value="tsunami"> Tsunami&nbsp;
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
                    <?php echo $type1." ".$Dtype;?> Disasters </p>
                </div>
                <?php
                switch ($Dtype) {
                    case "earthquake":
                        echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size:font-family:; x-small;height:50%;width: 100%">
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
                    case "landslide":
                        echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: medium;height:50%;width: 100%">
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
                    case "cyclone":
                        echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: medium;height:50%;width: 100%">
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
                    case "flood":
                        echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: medium;height:50%;width: 100%">
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
                    case "tsunami":
                        echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
                        if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                        echo '<table  class="table table-striped th" style="font-size: medium;height:50%;width: 100%">
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
                    case "":
                    echo $Dtype;
                    echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
            if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
            echo '<table  class="table table-striped th" style="font-size: x-small;font-family: Lora,serif;height:50%;width: 100%">
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
            </table>";}?>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <!--<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color: red">ERROR</h4>
                    </div>-->
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p style="color: red">Insert Date Correctlly.</p>
                    </div>
                    <!--<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>-->
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="../../public/js/jquery.js"></script>
<script src="../../public/js/peekabar.js"></script>
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
    }
</script>
</body>
