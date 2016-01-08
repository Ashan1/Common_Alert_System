<?php
error_reporting(10);
require_once '../controllers/notification_connect.php';
require_once '../controllers/report.php';
/**
 * Created by CAS Team.
 */
?>
<form  action="">
<div class="home-tabheader disaster-notify">
    <div class="col-lg-4">
        <ul>
            <li><i class="dis-cracked2" style=""></i> <span>EARTHQUAKES - <?php  echo $edata;?></span></li>
            <li><i class="dis-snowslide" style=""></i> <span>LANDSLIDES - <?php  echo$ldata;?></span></li>
            <li><i class="dis-fire14" style=""></i> <span>RESERVOIR -<?php  echo$rdata;?></span></li>
        </ul>
    </div>
    <div class="col-lg-4">
        <ul>
            <li><i class="dis-hurricane" style=""></i> <span>CYCLONES - <?php  echo$cdata;?></span></li>
            <li><i class="dis-waves8" style=""></i> <span>FLOODS -<?php echo$fdata;?></span></li>
            <li><i class="dis-tsunami1" style=""></i> <span>TSUNAMI -<?php echo$tdata;?></span></li>
        </ul>
    </div>
    <div class="col-lg-4">
        <ul>
            <li><i class="dis-erupting" style=""></i> <span>VOLCANO - <?php  echo$vdata;?></span></li>
            <li><i class="dis-snowslide" style=""></i> <span>LANDSLIDES - <?php  echo$ldata;?></span></li>
            <li><i class="dis-fire14" style=""></i> <span>RESERVOIR - <?php  echo$rdata;?></span></li>
        </ul>
    </div>

</div>
</form>
<div class="container-fluid">

    <?php

    echo $type1."\t\t ".$Dtype." Disasters";
    echo $Dtype."a";
    switch ($Dtype) {
        case "earthquake":
            echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
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
            echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';echo "Show all recent reservoir records";
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
                    //$name=$db_result[$i]->E_name;
                    echo
                    "<tr>
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
            echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
            if($count<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
            echo '<table  class="table table-striped th" style="font-size:x-small;height:50%;width: 100%">
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
        case "tsunami":
            echo '<div>
                        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        <button class="btn1" value="print">print</button>

               </form>
            </div>';
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
        case "":
            if($count1<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
            echo '<table  class="table table-striped th" style="font-size: x-small;font-family: Lora,serif;height:50%;width: 100%">
                <col width="220">
                <col width="220">
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
                    //$name=$db_result[$i]->E_name;
                    echo
                    "<tr>
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
                    //$name=$db_result[$i]->E_name;
                    echo
                    "<tr>

                                        <td>{$rd}</td>
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
            </table>";}?>
</div>

