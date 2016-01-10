<?php
$data=$db->query("SELECT * FROM $Dtype WHERE date='$today'");
$db_result=$data->result();
$count=$data->count();
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
</table><br>";
if($count<=0){
echo '<div style="text-align: center;font-size: xx-large">No Disasters Avalable</div>';
}

?>