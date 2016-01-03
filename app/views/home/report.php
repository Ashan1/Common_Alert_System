<html>

<head>
    <script src="../../../public/javascripts/jquery.min.js"></script>
    <script src="../../../public/javascripts/report.js" type="text/javascript"></script>
    <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>
<body style="background-color: #ecf0f1; border: 2px solid black;">
<div>
<?php include "connect.php";


$type = $_GET['type'];

switch ($type) {
    case "D":
        $Date=date("dS - M - y");
        $rd=$Date;
        $sql= mysql_query("SELECT * FROM disaster WHERE date='$Date'");
        break;
    case "W":
        $Date3=date('dS - M - y');
        $Date2=date('dS - M - y',strtotime("-7 days"));
        $rd=$Date2 ."   to   ".$Date3;
        $sql=mysql_query("Select * from disaster where date between '" . $Date2 . "' AND  '" . $Date3 . "'");
        break;
    case "M":
        $end=date('dS - M - y');
        $st=date('dS - M - y',strtotime("-31 days"));
        $rd=$st ."   to   ".$end;
        $sql=mysql_query("Select * from disaster where date between '" . $st . "' AND  '" . $end . "'");
        break;
    case "Yearly":
        $yend=date('dS - M - y');
        $yst=date('dS - M - y',strtotime("-366 days"));
        $rd=$yst."   to   ".$yend;
        $sql=mysql_query("Select * from disaster where date between '" . $yst . "' AND  '" . $yend . "'");
        break;
    case "O":
        $fd= $_GET['fd'];
        $td= $_GET['td'];
        $sql=mysql_query("Select * from disaster where date between '" . $fd . "' AND  '" . $td . "'");

        break;
    default:
}
$today=date('dS - M - y-l');

?>
    <div  style="text-align: center" ><h1 > DISASTER MANAGEMENT CENTER</h1>
    <h2 > Daily Situation Report</h2>
    <p><b> Report Period:</b> <?php echo $rd ?></p>

        <form name="myForm" action="" onsubmit="return Printpage()" method="post">
            <button class="btn1" value="print">print</button>

        </form>
    </div>
    <table  class="table table-striped th" style="text-align: left">
        <col width="320">
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