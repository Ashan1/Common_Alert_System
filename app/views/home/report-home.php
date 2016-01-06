
<html>

<head>
    <script src="../../../public/javascripts/jquery.min.js"></script>
    <!--<script src="../../../public/javascripts/report.js" type="text/javascript"></script>-->
   <script type="text/javascript">
        $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    if($(this).attr("value")=="O"){
                        $(".box").not(".O").hide();
                        $(".O").show();
                        $( ".x" ).prop( "disabled", false );
                    }
                    else if($(this).attr("value")!="O"){
                        $( ".x" ).prop( "disabled", true );
                        $(".O").hide();


                    }
                });
            }).change();
        });

    </script>
</head>


<div class="container col-lg-12"  style="background-color: #d0e3f0">
    <h1 style="color: #00080C;text-align: left">GENERATE REPORT</h1>
    <div class="col-lg-2" style="font-size: larger">Select Report Type </div>
    <div class="col-lg-2">
        <form style="font-size: larger" action="report.php" novalidate>
<!--<!<div class="container col-lg-12"  style="background-color: #ecf0f1">
    <h1 style="color: #00080C;text-align: left">GENERATE REPORT</h1>
    <div class="col-lg-2" style="font-size: larger">Select Report Type </div>
    <div class="col-lg-2 container row">
        <form style="font-size: larger" action="report.php" >-->
            <div >

                <label>
                    <select class='type' name="type">
                        <option>[-Select type-]</option>
                        <option value="D">Today</option>
                        <option value="W">Last Week</option>
                        <option value="M">Last Month</option>
                        <option value="Yearly">Last Year</option>
                        <option value="O">Other</option>
                    </select>
                </label>
            </div>

            <div class="col-lg-2 O box dis"   style="display:none" >
                From: <input type="date" placeholder="From-Date" class="x" name="fd" required>
                To: <input type="date" placeholder="To-Date" class="x" name="td" required>
            </div>
                <!--<div class="col-lg-2 D" style="display:none">
                    <input type="date"  name="d">
                </div>-->

            <input class="btn-warning" type="submit"  value="View Report">
        </form>

    </div>
</div>

</html>