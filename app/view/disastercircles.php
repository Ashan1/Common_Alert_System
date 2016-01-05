<?php /*include'connect.php';
include'disasterCount.php';
*/?>
<div>
    <div class="summary-circles home-tabheader">
        <div class="center1">
            <div class="circles">
               <ul>
                   <li><div id="circle1"class="circle1"></div></li>
                   <li><div id="circle2"class="circle2"></div></li>
                   <li><div id="circle3"class="circle3"></div></li>
                   <li><div id="circle4"class="circle4"></div></li>
               </ul>
            </div>

            <div>
                <div class="map-menu">
                    <div class="center">
                        <ul class="nav nav-tabls">
                            <li role="presentation" class=""><a href="#slmap" aria-controls="slmap" role="tab" data-toggle="tab">Sri Lanka</a></li>
                            <li role="presentation" class=""><a href="#worldmap" aria-controls="worldmap" role="tab" data-toggle="tab">World</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="row maps tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="slmap">
                <object type="text/html" data="test_map.php"
                        style="width:100%; height:100%; margin:1%;">
                </object>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="worldmap">
                <object type="text/html" data="test_disaster.php" style="width:100%; height:100%; margin:1%;">
                </object>
            </div>
        </div>
    </div>

</div>

<script>
    var c1 = $('.circle1').circleProgress({
        startAngle: -Math.PI / 4*2,
        value: <?php echo /*$earthq/$totalDisasters*/ .55?>,
        size: 200,
        lineCap: 'round',
        fill: { color: '#f56d18' }
    });

    var c2 = $('.circle2').circleProgress({
        startAngle: -Math.PI / 4*2,
        value: <?php echo /*$cyclone/$totalDisasters*/.34 ?>,
        size: 200,
        lineCap: 'round',
        fill: { color: '#5bb503' }
    });

    var c3 = $('.circle3').circleProgress({
        startAngle: -Math.PI / 4*2,
        value: <?php echo /*$flood/$totalDisasters*/ .65?>,
        size: 200,
        lineCap: 'round',
        fill: { color: '#0ca2d3' }
    });

    var c4 = $('.circle4').circleProgress({
        startAngle: -Math.PI / 4*2,
        value: <?php echo /*$landslides/$totalDisasters*/ .50 ?>,
        size: 200,
        lineCap: 'round',
        fill: { color: '#ed054c' }
    });

    c1.on('circle-animation-progress', function(e, v) {
        var obj = $(this).data('circle-progress'),
                ctx = obj.ctx,
                s = obj.size,
                x = 100 * obj.value,
                sv = (x * v).toFixed(),
                fill = obj.arcFill,
                d = "test";

        ctx.save();
        ctx.fillStyle = "#424141";
        ctx.textAlign = 'center';
        ctx.font ="50px disasters";
        ctx.fillText("\ue800",s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("Earthquakes",s/2,2*s/3);
        ctx.restore();
    });

    c2.on('circle-animation-progress', function(e, v) {
        var obj = $(this).data('circle-progress'),
            ctx = obj.ctx,
            s = obj.size,
            x = 100 * obj.value,
            sv = (x * v).toFixed(),
            fill = obj.arcFill,
            d = "test";

        ctx.save();
        ctx.fillStyle = "#424141";
        ctx.textAlign = 'center';
        ctx.font ="50px disasters";
        ctx.fillText("\ue803",s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("Cyclones",s/2,2*s/3);
        ctx.restore();
    });

    c3.on('circle-animation-progress', function(e, v) {
        var obj = $(this).data('circle-progress'),
            ctx = obj.ctx,
            s = obj.size,
            x = 100 * obj.value,
            sv = (x * v).toFixed(),
            fill = obj.arcFill,
            d = "test";

        ctx.save();
        ctx.fillStyle = "#424141";
        ctx.textAlign = 'center';
        ctx.font ="50px disasters";
        ctx.fillText("\ue806",s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("Flood",s/2,2*s/3);
        ctx.restore();
    });

    c4.on('circle-animation-progress', function(e, v) {
        var obj = $(this).data('circle-progress'),
            ctx = obj.ctx,
            s = obj.size,
            x = 100 * obj.value,
            sv = (x * v).toFixed(),
            fill = obj.arcFill,
            d = "test";

        ctx.save();
        ctx.fillStyle = "#424141";
        ctx.textAlign = 'center';
        ctx.font ="50px disasters";
        ctx.fillText("\ue804",s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("Landslides",s/2,2*s/3);
        ctx.restore();
    });


</script>