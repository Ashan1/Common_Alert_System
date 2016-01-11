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
                            <li role="presentation" class=""><a class="map-not" href="../app/controllers/mapchange_tab.php?id=slmap" >Sri Lanka</a></li>
                            <li role="presentation" class=""><a class="map-not" href="../app/controllers/mapchange_tab.php?id=worldmap">World</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="disastermap">
    </div>

</div>

<script type="text/javascript">
    $(function() {
        $("a.map-not").on("click", function(e) {
            e.preventDefault();
            $("#disastermap").load(this.href);
        });
    });
    window.onload = $("#disastermap").load('../app/controllers/mapchange_tab.php');
</script>



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
        ctx.fillText("\ue809",s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("Reservoir",s/2,2*s/3);
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
        ctx.fillText('\ue805',s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("River",s/2,2*s/3);
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
        ctx.fillText("\ue804",s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("Rain",s/2,2*s/3);
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
        ctx.image = '';
        ctx.fillText("\ue800",s/2,s/2.5);
        ctx.font = "bold 35px sans-serif";
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(sv, s / 2, s / 2);
        ctx.font = "bold 20px Raleway";
        ctx.fillText("Earthquake",s/2,2*s/3);
        ctx.restore();
    });





</script>
