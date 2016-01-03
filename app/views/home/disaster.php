<?php include('header.php');?>
<head>
    <script src="../../../public/plugins/morris/morris.js" ></script>
    <script src="../../../public/javascripts/raphael-min.js" type="text/javascript"></script>
    <link href="../../../public/plugins/morris/morris.css" rel="stylesheet" type="text/css">

<style>
    h3 {
        color: #1f1f1f;
    }
    @media print
    {
        body * { visibility: hidden; }
        .right-side *, .print * { visibility: visible; }
        .right-side, .print { position: absolute; top: 40px; left: 30px; }
    }
</style>


</head>
<div>
    <aside class="left-side">
        <?php include('side2.php');?>
    </aside>
    <aside class="right-side" id="printDiv">
        <div class="print">
            <button class="btn btn-success" id="printB">Print Report</button>
        </div>
        <div class="container-fluid">
            <div class="col-lg-6 col-md-6">
                <div><h3>Earthquakes</h3></div>
                <div id="earthquakes" style="height: 250px;" ></div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div><h3>Cyclones</h3></div>
                <div id="cyclones" style="height: 250px;" ></div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div><h3>All Disasters</h3></div>
                <div id="disasters" style="height: 250px;" ></div>
            </div>
        </div>
    </aside>
</div>

<script>
    new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'earthquakes',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { year: '2008', value: 20 },
            { year: '2009', value: 10 },
            { year: '2010', value: 5 },
            { year: '2011', value: 5 },
            { year: '2012', value: 20 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value'],
        resize: 'true'
    });

    new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'cyclones',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { year: '2008', value: 5 },
            { year: '2009', value: 10 },
            { year: '2010', value: 5 },
            { year: '2011', value: 11 },
            { year: '2012', value: 8 }
        ],
        lineColors: ['#57B100'],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value'],
        resize: 'true'
    });

    new Morris.Bar({
        element: 'disasters',
        data: [
            { y: 'Earthquakes', a: 100},
            { y: 'Cyclones', a: 75},
            { y: 'Fire', a: 50},
            { y: 'Landslide', a: 25},
            { y: 'Flood', a: 55},
            { y: 'Tsunami', a: 43}
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Disaster'],
        barColors: function (row, series, type) {
            console.log("--> "+row.label, series, type);
            if(row.label == "Earthquakes") return "#f56d18";
            else if(row.label == "Cyclones") return "#5bb503";
            else if(row.label == "Fire") return "#ff1c0b";
            else if(row.label == "Landslide") return "#ed0743";
            else if(row.label == "Flood") return "#0ca2d3";
            else if(row.label == "Tsunami") return "#0b466f";
        }
    });

    $("#printB").live("click", function () {
        var divContents = $("#printDiv").html();
        var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write('<html><head><title>DIV Contents</title>');
        printWindow.document.write('</head><body >');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    });
</script>

</body>
</html>
