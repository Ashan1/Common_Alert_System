<?php include('header.php');?>
<head>
<script>
/**
 *	Animated Graph Tutorial for Smashing Magazine
 *	July 2011
 *
 * 	Author:	Derek Mack
 *			derekmack.com
 *			@derek_mack
 *
 *	Example 3 - Animated Bar Chart via jQuery
 */

// Wait for the DOM to load everything, just to be safe
$(document).ready(function() {

    // Create our graph from the data table and specify a container to put the graph in
    createGraph('#data-table', '.chart');

    // Here be graphs
    function createGraph(data, container) {
        // Declare some common variables and container elements
        var bars = [];
        var figureContainer = $('<div id="figure"></div>');
        var graphContainer = $('<div class="graph"></div>');
        var barContainer = $('<div class="bars"></div>');
        var data = $(data);
        var container = $(container);
        var chartData;
        var chartYMax;
        var columnGroups;

        // Timer variables
        var barTimer;
        var graphTimer;

        // Create table data object
        var tableData = {
            // Get numerical data from table cells
            chartData: function() {
                var chartData = [];
                data.find('tbody td').each(function() {
                    chartData.push($(this).text());
                });
                return chartData;
            },
            // Get heading data from table caption
            chartHeading: function() {
                var chartHeading = data.find('caption').text();
                return chartHeading;
            },
            // Get legend data from table body
            chartLegend: function() {
                var chartLegend = [];
                // Find th elements in table body - that will tell us what items go in the main legend
                data.find('tbody th').each(function() {
                    chartLegend.push($(this).text());
                });
                return chartLegend;
            },
            // Get highest value for y-axis scale
            chartYMax: function() {
                var chartData = this.chartData();
                // Round off the value
                var chartYMax = Math.ceil(Math.max.apply(Math, chartData) / 1000) * 1000;
                return chartYMax;
            },
            // Get y-axis data from table cells
            yLegend: function() {
                var chartYMax = this.chartYMax();
                var yLegend = [];
                // Number of divisions on the y-axis
                var yAxisMarkings = 5;
                // Add required number of y-axis markings in order from 0 - max
                for (var i = 0; i < yAxisMarkings; i++) {
                    yLegend.unshift(((chartYMax * i) / (yAxisMarkings - 1)) / 1000);
                }
                return yLegend;
            },
            // Get x-axis data from table header
            xLegend: function() {
                var xLegend = [];
                // Find th elements in table header - that will tell us what items go in the x-axis legend
                data.find('thead th').each(function() {
                    xLegend.push($(this).text());
                });
                return xLegend;
            },
            // Sort data into groups based on number of columns
            columnGroups: function() {
                var columnGroups = [];
                // Get number of columns from first row of table body
                var columns = data.find('tbody tr:eq(0) td').length;
                for (var i = 0; i < columns; i++) {
                    columnGroups[i] = [];
                    data.find('tbody tr').each(function() {
                        columnGroups[i].push($(this).find('td').eq(i).text());
                    });
                }
                return columnGroups;
            }
        }

        // Useful variables for accessing table data
        chartData = tableData.chartData();
        chartYMax = tableData.chartYMax();
        columnGroups = tableData.columnGroups();

        // Construct the graph

        // Loop through column groups, adding bars as we go
        $.each(columnGroups, function(i) {
            // Create bar group container
            var barGroup = $('<div class="bar-group"></div>');
            // Add bars inside each column
            for (var j = 0, k = columnGroups[i].length; j < k; j++) {
                // Create bar object to store properties (label, height, code etc.) and add it to array
                // Set the height later in displayGraph() to allow for left-to-right sequential display
                var barObj = {};
                barObj.label = this[j];
                barObj.height = Math.floor(barObj.label / chartYMax * 100) + '%';
                barObj.bar = $('<div class="bar fig' + j + '"><span>' + barObj.label + '</span></div>')
                    .appendTo(barGroup);
                bars.push(barObj);
            }
            // Add bar groups to graph
            barGroup.appendTo(barContainer);
        });

        // Add heading to graph
        var chartHeading = tableData.chartHeading();
        var heading = $('<h4>' + chartHeading + '</h4>');
        heading.appendTo(figureContainer);

        // Add legend to graph
        var chartLegend	= tableData.chartLegend();
        var legendList	= $('<ul class="legend"></ul>');
        $.each(chartLegend, function(i) {
            var listItem = $('<li><span class="icon fig' + i + '"></span>' + this + '</li>')
                .appendTo(legendList);
        });
        legendList.appendTo(figureContainer);

        // Add x-axis to graph
        var xLegend	= tableData.xLegend();
        var xAxisList	= $('<ul class="x-axis"></ul>');
        $.each(xLegend, function(i) {
            var listItem = $('<li><span>' + this + '</span></li>')
                .appendTo(xAxisList);
        });
        xAxisList.appendTo(graphContainer);

        // Add y-axis to graph
        var yLegend	= tableData.yLegend();
        var yAxisList	= $('<ul class="y-axis"></ul>');
        $.each(yLegend, function(i) {
            var listItem = $('<li><span>' + this + '</span></li>')
                .appendTo(yAxisList);
        });
        yAxisList.appendTo(graphContainer);

        // Add bars to graph
        barContainer.appendTo(graphContainer);

        // Add graph to graph container
        graphContainer.appendTo(figureContainer);

        // Add graph container to main container
        figureContainer.appendTo(container);

        // Set individual height of bars
        function displayGraph(bars, i) {
            // Changed the way we loop because of issues with $.each not resetting properly
            if (i < bars.length) {
                // Animate height using jQuery animate() function
                $(bars[i].bar).animate({
                    height: bars[i].height
                }, 800);
                // Wait the specified time then run the displayGraph() function again for the next bar
                barTimer = setTimeout(function() {
                    i++;
                    displayGraph(bars, i);
                }, 100);
            }
        }

        // Reset graph settings and prepare for display
        function resetGraph() {
            // Stop all animations and set bar height to 0
            $.each(bars, function(i) {
                $(bars[i].bar).stop().css('height', 0);
            });

            // Clear timers
            clearTimeout(barTimer);
            clearTimeout(graphTimer);

            // Restart timer
            graphTimer = setTimeout(function() {
                displayGraph(bars, 0);
            }, 200);
        }

        // Helper functions

        // Call resetGraph() when button is clicked to start graph over
        $('#reset-graph-button').click(function() {
            resetGraph();
            return false;
        });

        // Finally, display graph via reset function
        resetGraph();
    }
});
</script>
<style>
    #data-table {
        display: none;
    }
    .bar span {
        background: #fefefe url(../images/info-bg.gif) 0 100% repeat-x;
    }
    .fig0 {
        background: #747474 url(../images/bar-01-bg.gif) 0 0 repeat-y;
    }
    .fig1 {
        background: #65c2e8 url(../images/bar-02-bg.gif) 0 0 repeat-y;
    }
    .fig2 {
        background: #eea151 url(../images/bar-03-bg.gif) 0 0 repeat-y;
    }
    body {
        background: #fff;
        color: #222;
        font: 12px/20px 'Helvetica Neue', Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    h2 {
        font-size: 18px;
        font-weight: normal;
        line-height: 20px;
        margin: 0 0 20px 0;
        padding: 0;
        text-align: center;
    }
    h4 {
        color: #545454;
        font-size: 14px;
        font-weight: normal;
        line-height: 20px;
        margin: 0 0 20px 0;
        padding: 0;
        text-align: center;
    }
    a {
        color: #333;
    }

    /* Table */
    #data-table {
        border: none; /* Turn off all borders */
        border-top: 1px solid #ccc;
        width: 540px;
    }
    #data-table caption {
        color: #545454;
        font-size: 14px;
        font-weight: normal;
        line-height: 20px;
        margin: 0 0 20px 0;
        padding: 0;
        text-align: center;
    }
    #data-table thead {
        background: #f0f0f0;
    }
    #data-table th,
    #data-table td {
        border: none; /* Turn off all borders */
        border-bottom: 1px solid #ccc;
        margin: 0;
        padding: 10px;
        text-align: left;
    }

    /* Toggle */
    .toggles {
        background: #ebebeb;
        color: #545454;
        height: 20px;
        padding: 15px;
    }
    .toggles p {
        margin: 0;
    }
    .toggles a {
        background: #222;
        border-radius: 3px;
        color: #fff;
        display: block;
        float: left;
        margin: 0 10px 0 0;
        padding: 0 6px;
        text-decoration: none;
    }
    .toggles a:hover {
        background: #666;
    }
    #reset-graph-button {
        float:right;
    }

    /* Graph */
    /* Containers */
    #wrapper {
        height: 420px;
        left: 50%;
        margin: -210px 0 0 -270px;
        position: absolute;
        top: 50%;
        width: 540px;
    }
    #figure {
        height: 380px;
        position: relative;
    }
    #figure ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .graph {
        height: 283px;
        position: relative;
    }

    /* Legend */
    .legend {
        border-radius: 4px;
        bottom: 0;
        position: absolute;
        text-align: left;
        width: 540px;
    }
    .legend li {
        display: block;
        float: left;
        height: 20px;
        margin: 0;
        padding: 10px 30px;
        width: 120px;
    }
    .legend span.icon {
        background-position: 50% 0;
        border-radius: 2px;
        display: block;
        float: left;
        height: 16px;
        margin: 2px 10px 0 0;
        width: 16px;
    }

    /* X-Axis */
    .x-axis {
        bottom: 0;
        color: #555;
        position: absolute;
        text-align: center;
        width: 540px;
    }
    .x-axis li {
        float: left;
        margin: 0 15px;
        padding: 5px 0;
        width: 76px;
    }

    /* Y-Axis */
    .y-axis {
        color: #555;
        position: absolute;
        text-align: right;
        width: 100%;
    }
    .y-axis li {
        border-top: 1px solid #ccc;
        display: block;
        height: 62px;
        width: 100%;
    }
    .y-axis li span {
        display: block;
        margin: -10px 0 0 -60px;
        padding: 0 10px;
        width: 40px;
    }

    /* Graph Bars */
    .bars {
        height: 253px;
        position: absolute;
        width: 100%;
        z-index: 10;
    }
    .bar-group {
        float: left;
        height: 100%;
        margin: 0 15px;
        position: relative;
        width: 76px;
    }
    .bar {
        border-radius: 3px 3px 0 0;
        bottom: 0;
        cursor: pointer;
        height: 0;
        position: absolute;
        text-align: center;
        width: 24px;
    }
    .bar.fig0 {
        left: 0;
    }
    .bar.fig1 {
        left: 26px;
    }
    .bar.fig2 {
        left: 52px;
    }
    .bar span {
        background: #fefefe;
        border-radius: 3px;
        left: -8px;
        display: none;
        margin: 0;
        position: relative;
        text-shadow: rgba(255, 255, 255, 0.8) 0 1px 0;
        width: 40px;
        z-index: 20;

        -webkit-box-shadow: rgba(0, 0, 0, 0.6) 0 1px 4px;
        box-shadow: rgba(0, 0, 0, 0.6) 0 1px 4px;
    }
    .bar:hover span {
        display: block;
        margin-top: -25px;
    }
</style>
</head>
<div>
    <aside class="left-side">
        <?php include('side2.php');?>
    </aside>
    <aside class="right-side">
        <div id="wrapper">
            <div class="chart">
                <table id="data-table" border="1" cellpadding="10" cellspacing="0" summary="The effects of the zombie outbreak on the populations of endangered species from 2012 to 2016">
                    <caption>Population in thousands</caption>
                    <thead>
                    <tr>
                        <td>&nbsp;</td>
                        <th scope="col">2012</th>
                        <th scope="col">2013</th>
                        <th scope="col">2014</th>
                        <th scope="col">2015</th>
                        <th scope="col">2016</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Earthqueks</th>
                        <td>4080</td>
                        <td>6080</td>
                        <td>6240</td>
                        <td>3520</td>
                        <td>2240</td>
                    </tr>
                    <tr>
                        <th scope="row">Blue Monkey</th>
                        <td>5680</td>
                        <td>6880</td>
                        <td>5760</td>
                        <td>5120</td>
                        <td>2640</td>
                    </tr>
                    <tr>
                        <th scope="row">Tanned Zombie</th>
                        <td>1040</td>
                        <td>1760</td>
                        <td>2880</td>
                        <td>4720</td>
                        <td>7520</td>
                    </tr>
                    </tbody>
                </table>
                <div id="figure"><h4>Disasters Happens in Previous Years</h4><ul class="legend"><li><span class="icon fig0"></span>Floods</li><li><span class="icon fig1"></span>Earthqueks</li><li><span class="icon fig2"></span>Cyclones</li></ul><div class="graph"><ul class="x-axis"><li><span>2012</span></li><li><span>2013</span></li><li><span>2014</span></li><li><span>2015</span></li><li><span>2016</span></li></ul><ul class="y-axis"><li><span>8</span></li><li><span>6</span></li><li><span>4</span></li><li><span>2</span></li><li><span>0</span></li></ul><div class="bars"><div class="bar-group"><div class="bar fig0" style="height: 51%;"><span>4080</span></div><div class="bar fig1" style="height: 71%;"><span>5680</span></div><div class="bar fig2" style="height: 13%;"><span>1040</span></div></div><div class="bar-group"><div class="bar fig0" style="height: 76%;"><span>6080</span></div><div class="bar fig1" style="height: 86%;"><span>6880</span></div><div class="bar fig2" style="height: 22%;"><span>1760</span></div></div><div class="bar-group"><div class="bar fig0" style="height: 78%;"><span>6240</span></div><div class="bar fig1" style="height: 72%;"><span>5760</span></div><div class="bar fig2" style="height: 36%;"><span>2880</span></div></div><div class="bar-group"><div class="bar fig0" style="height: 44%;"><span>3520</span></div><div class="bar fig1" style="height: 64%;"><span>5120</span></div><div class="bar fig2" style="height: 59%;"><span>4720</span></div></div><div class="bar-group"><div class="bar fig0" style="height: 28%;"><span>2240</span></div><div class="bar fig1" style="height: 33%;"><span>2640</span></div><div class="bar fig2" style="height: 94%;"><span>7520</span></div></div></div></div></div></div>
        </div>
    </aside>
</div>



</body>
</html>
