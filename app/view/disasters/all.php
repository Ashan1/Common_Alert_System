<?php
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
            </table>";
?>