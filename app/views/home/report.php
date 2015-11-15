<html>

<head>
    <script src="../../../public/javascripts/jquery.min.js"></script>
    <script src="../../../public/javascripts/report.js" type="text/javascript"></script>


</head>
<body style="background-color: #d0e3f0; border: 2px solid black;">
<div>
<?php include "connect.php";


$favcolor = $_GET['type'];

switch ($favcolor) {
    case "D":
        $Date= $_GET['d'];
        $sql= mysql_query("SELECT * FROM disaster WHERE date='$Date'");
        break;
    case "W":
        $Date3=date('y/m/d');
        $Date2=date('y/m/d',strtotime("-7 days"));
        $sql=mysql_query("Select * from disaster where date between '" . $Date2 . "' AND  '" . $Date3 . "'");
        break;
    case "M":
        $yr= $_GET['yr'];
        $mon= $_GET['mon'];
        $st=($yr.'/'.$mon.'/01');
        $end=($yr.'/'.$mon.'/31');
        $sql=mysql_query("Select * from disaster where date between '" . $st . "' AND  '" . $end . "'");
        break;
    case "Yearly":
        echo "DFDF";
        $y= $_GET['y'];
        $yst=($y.'/01/01');
        $yend=($y.'/12/31');
        $sql=mysql_query("Select * from disaster where date between '" . $yst . "' AND  '" . $yend . "'");
        break;
    case "O":
        /*$fd= $_GET['fd'];
        $td= $_GET['td'];
        $sql=mysql_query("Select * from disaster where date between '" . $fd . "' AND  '" . $td . "'");*/

        break;
    default:
}
$today=date('y-m-d-l');

?>
    <div style="text-align: center" ><h1 > DISASTER MANAGEMENT CENTER</h1>
    <h2> Daily Situation Report</h2>
    <p><b> Date: <?php echo $today ?></b></p>

        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
            <button class="btn1" value="print">print</button>

        </form>
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