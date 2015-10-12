var c1 = $('.circle01').circleProgress({
    startAngle: -Math.PI / 4*2,
    value: 0.5,
    size: 200,
    lineCap: 'round',
    fill: { color: '#f56d18' }
});

var c2 = $('.circle02').circleProgress({
    startAngle: -Math.PI / 4*2,
    value: 0.5,
    size: 200,
    lineCap: 'round',
    fill: { color: '#f56d18' }
});
var c3 = $('.circle03').circleProgress({
    startAngle: -Math.PI / 4*2,
    value: 0.5,
    size: 200,
    lineCap: 'round',
    fill: { color: '#f56d18' }
});
var c4 = $('.circle04').circleProgress({
    startAngle: -Math.PI / 4*2,
    value: 0.5,
    size: 200,
    lineCap: 'round',
    fill: { color: '#f56d18' }
});

c1.on('circle-animation-progress', function(e, v) {
    var obj = $(this).data('circle-progress'),
        ctx = obj.ctx,
        s = obj.size,
        sv = (50 * v).toFixed(),
        fill = obj.arcFill;

    ctx.save();
    ctx.font = "bold " + s / 2.5 + "px sans-serif";
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillStyle = fill;
    ctx.fillText(sv, s / 2, s / 2);
    ctx.restore();
});
