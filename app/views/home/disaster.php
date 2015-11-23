<?php include('header.php');?>
<head>
<script src="../../../public/plugins/morris/morris.js" ></script>
<script src="../../../public/javascripts/raphael-min.js" type="text/javascript"></script>
    <link href="../../../public/plugins/morris/morris.css" rel="stylesheet" type="text/css">
</head>
<div>
    <aside class="left-side">
        <?php include('side2.php');?>
    </aside>
    <aside class="right-side">
        <div class="container-fluid">
            <div class="col-lg-6 col-md-6">
                <div><h1>Earthquakes</h1></div>
                <div id="earthquakes" style="height: 250px;" ></div>
            </div>
            <div id="cyclones" style="height: 250px;" class="col-lg-6 col-md-6"></div>
            <div id="disasters" style="height: 250px;" class="col-lg-6 col-md-6"></div>
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
            { y: '2006', a: 100},
            { y: '2007', a: 75},
            { y: '2008', a: 50},
            { y: '2009', a: 75}
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A'],
        barColors: function (row, series, type) {
            console.log("--> "+row.label, series, type);
            if(row.label == "2006") return "#AD1D28";
            else if(row.label == "2007") return "#DEBB27";
            else if(row.label == "2008") return "#fec04c";
            else if(row.label == "2009") return "#1AB244";}
    });
</script>

</body>
</html>
