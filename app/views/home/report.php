<html>

<head>
    <script src="../../../public/javascripts/jquery.min.js"></script>
    <script>
        function Printpage() {
            var alphaExp = /^[a-zA-Z]+$/;
            if(document.myForm.name.match(alphaExp)){
                print();
                document.myForm.name.focus();
                return false;
            }

            $(".btn1").click(function(){
                $("p.btn1").hide();
            });
        }
    </script>
    <script>
        $(document).ready(function(){
            $(".btn1").click(function(){
                $(".btn1").hide();
            });
        });
    </script>

</head>
<body style="background-color: #d0e3f0; border: 2px solid black;">
<div>
<?php include "connect.php";


$favcolor = $_GET['type'];
switch ($favcolor) {
    case "D":
        $Date=date('y/m/d');
        $sql= mysql_query("SELECT * FROM disaster WHERE date='$Date'");
        break;
    case "W":
        $Date=date('y/m/d');
        $Date2=date('y/m/d',strtotime("-7 days"));
        $sql=mysql_query("Select * from disaster where date between '" . $Date2 . "' AND  '" . $Date . "'");
        break;
    case "M":
        $sql=mysql_query("Select * from disaster where date>=(CURDATE()-INTERVAL 1 MONTH)");

        break;
    case "Y":
        $sql=mysql_query("Select * from disaster where date>=(CURDATE()-INTERVAL 1 YEAR)");
        break;
    case "#5":
        echo "Your favorite color is green!";
        break;
    default:
        /*echo $Date=date("Y/m/d-l");*/
        echo "Your favorite color is neither red, blue, nor green!";
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