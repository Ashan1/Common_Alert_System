<html>

<head>


</head>
<body style="background-color: #d0e3f0; border: 2px solid black;">
<div>
<?php include "connect.php";
$Date=date("Y/m/d-l");
$sql= mysql_query("SELECT * FROM disaster WHERE date='$Date'");?>
    <div style="text-align: center" ><h1 > DISASTER MANAGEMENT CENTER</h1>
    <h2> Daily Situation Report</h2>
    <p> Date: <?php echo $Date ?></p>
    </div>
    <table align="center" class="table table-striped th" style="text-align: center">
        <col width="220">
        <col width="220">
        <col width="220">
        <col width="220">
        <col width="220">
        <col width="220">
            <thead>
            <tr CLASS="thcolor" >
                <th>DATE</th>
                <th>TIME</th>
                <th>DISASTER TYPE</th>
                <th>LATITUDE</th>
                <th>LONGITUDE</th>
                <th>LOCATION</th>
            </tr>
            </thead>
    <tbody>

    <?php
    while( $row = mysql_fetch_assoc( $sql ) ){
        if($row!=''){
        echo
        "<tr >
             <td>{$row['date']}</td>
             <td>{$row['time']}</td>
             <td>{$row['Types']}</td>
             <td>{$row['latitude']}</td>
             <td>{$row['longitude']}</td>
             <td >{$row['location']}</td>
             </tr>\n";}
        elseif($row==''){
            echo "No Disasters Today";
        }
    }
    ?>


    </tbody>
    </table>
    </div>
</body>
</html>