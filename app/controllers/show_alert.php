<?php
require_once '/../core/init.php';
require_once '/../models/dbConfig.php';
$db = DB::getInstance();

//$query = "SELECT * FROM alert ";
$al = $db->query("SELECT * FROM alert ");
$a = $al->result();
$c= $al->count();
$num=1;
if($c<=0){'<span style="font-size: xx-large;text-align: center;">No Disaster</span>';}
                echo '<table  class="table th" style="font-size: small;font-family: Lora,serif;height:50%;width: 100%;">
                    <col width="20">
                    <col width="320">
                    <col width="320">
                    <col width="320">
                    <col width="320">
                    <col width="370">
                    <col width="320">
                    <col width="320">
                    <col width="320">
                    <col width="320">
                    <col width="320">
                    <thead style="width: 100%">
                    <tr>
                        <th>#</th>
                        <th>TYPE</th>
                        <th>DATE</th>
                        <th>TIME</th>
                        <th>MAGNITUDE</th>
                        <th>LOCATION</th>
                        <th>ALERT TYPE</th>
                        <th>RESERVOIR NAME</th>
                        <th>MAJOR BASIN</th>
                        <th>SPILLING</th>
                        <th>GATE OPEN</th>
                    </tr>
                    </thead>
                    <tbody>';

                    if($c>0) {
                        for ($i = 0; $i < $c; $i++) {

                            $dtable = $a[$i]->Table_Name;
                            $dID = $a[$i]->Disaster_ID;
                            $query1 = "SELECT * FROM $dtable WHERE id = '$dID'";
                            $recent = $db->query($query1);
                            $darray = $recent->result();
                            $rwc = $recent->count();

                            switch ($dtable) {
                                case "earthquake":
                                    for ($k = 0; $k < $rwc; $i++) {
                                        echo "<tr >
                                                <td>{$num}</td>
                                                <td class='roweq'style='font-size: medium'>Earthquake</td>
                                                <td>{$darray[$k]->date}</td>
                                                <td>{$darray[$k]->time}</td>
                                                <td>{$darray[$k]->magnitude}</td>
                                                <td>{$darray[$k]->place}</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                              </tr>\n";
                                        $num += 1;
                                        break;
                                    }
                                    break;
                                case "reservoir":
                                    for ($j = 0; $j < $rwc; $j++) {
                                        //$name=$db_result[$i]->E_name;
                                        echo
                                        "<tr >
                                            <td>{$num}</td>
                                            <td class='rowres' style='font-size: medium'>Reservoir</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>{$darray[$j]->reservoir_name}</td>
                                            <td>{$darray[$j]->major_basin}</td>
                                            <td>{$darray[$j]->spilling}</td>
                                            <td>{$darray[$j]->gate_open}</td>
                                        </tr>\n";
                                        $num += 1;
                                        break;
                                    }
                                    break;
                                case "tsunami":
                                    for ($l = 0; $l < $rwc; $j++) {
                                        //$name=$db_result[$i]->E_name;
                                        echo
                                        "<tr >
                                            <td>{$num}</td>
                                            <td class='rowts' style='font-size: medium'>Tsunami</td>
                                            <td>{$darray[$l]->date}</td>
                                            <td>{$darray[$l]->time}</td>
                                            <td>{$darray[$l]->magnitude}</td>
                                            <td>{$darray[$l]->place}</td>
                                            <td>Tsunami</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>

                                        </tr>\n";
                                        $num += 1;
                                        break;
                                    }
                                break;
                                case "flood":
                                    for ($n = 0; $n < $rwc; $j++) {
                                        //$name=$db_result[$i]->E_name;
                                        echo
                                        "<tr >
                                            <td>{$num}</td>
                                            <td class='rowfld' style='font-size: medium'>Flood</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>{$darray[$n]->station}</td>
                                            <td>{$darray[$n]->flood_type}</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>{$darray[$n]->river_basin}</td>
                                            <td>-</td>

                                        </tr>\n";
                                        $num += 1;
                                        break;
                                    }

                            }
                        }
                    }
echo"</tbody>
                </table>";
?>


