<<<<<<< HEAD
<html>

<head>
    <script src="../../../public/javascripts/jquery.min.js"></script>
    <!--<script src="../../../public/javascripts/report.js" type="text/javascript"></script>-->
</head>

<div>
    <div class="container col-lg-12"  style="background-color: #d0e3f0">
        <h1 style="color: #00080C;text-align: left">GENERATE REPORT</h1>
        <div class="col-lg-2" style="font-size: larger">Select Report Type </div>
        <div class="col-lg-2">
            <form style="font-size: larger" action="report.php" novalidate>
=======
<div class="container col-lg-12"  style="background-color: #ecf0f1">
    <h1 style="color: #00080C;text-align: left">GENERATE REPORT</h1>
    <div class="col-lg-2" style="font-size: larger">Select Report Type </div>
    <div class="col-lg-2 container row">
        <form style="font-size: larger" action="../app/views/home/report.php">
            <div >
>>>>>>> 047e7693d6cdb4cd9ff9fb3eb839147e0cd4efaa
                <select class='type' name="type">
                    <option value="">[-Select type-]</option>
                    <option value="D">Today</option>
                    <option value="W">Last Week</option>
                    <option value="M">Last Month</option>
                    <option value="Yearly">Last Year</option>
                    <option value="O">Other</option>
                </select>
            </div>
<!--               <div class="col-lg-2 O" style="display:none">
                   From: <input type="date" placeholder="From-Date"  name="fd" required>
                    To: <input type="date" placeholder="To-Date"  name="td" required>
                </div>
                <!--<div class="col-lg-2 D" style="display:none">
                    <input type="date"  name="d">
                </div>-->
                <!--<div class="col-lg-2 M" style="display:none">
                    Year: <input type="year" placeholder="year" name="yr" required \>
                    Month: <select class='mon' name="mon"  required>
                        <option value="">[-Select Month-]</option>
                        <option value="1">January  </option>
                        <option value="2">February </option>
                        <option value="3">March    </option>
                        <option value="4">April    </option>
                        <option value="5">May      </option>
                        <option value="6">June     </option>
                        <option value="7">July     </option>
                        <option value="8">August   </option>
                        <option value="9">September</option>
                        <option value="10">October </option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="col-lg-2 Yearly" style="display:none">
                    <select id="year" name="y">
                        <?php
/*                       for($i = 1990; $i < date("Y")+5; $i++){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                        */?>
                    </select>
                </div>-->
            <input class="btn-warning" type="submit"  value="View Report">
        </form>
    </div>
</div>