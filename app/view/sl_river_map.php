<html>
<head>
    <style>
        html, body, #map { margin: 0; padding: 0; height: 100%; }
    </style>

    <script
        src="https://maps.googleapis.com/maps/api/js?libraries=visualization">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>

        $(function(){
            var map;
            function initialize() {
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: {lat: 7.9500, lng: 81.0000},
                    mapTypeId: google.maps.MapTypeId.HYBRID
                });

                var infoWindow = new google.maps.InfoWindow({});

                var xmlhttp = new XMLHttpRequest();
                var url = "../controllers/river_jsongen.php";

                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        apply(xmlhttp.responseText);
                    }

                };


                xmlhttp.open("GET", url, true);
                xmlhttp.send();

                function apply(out){
                    var response = JSON.parse(out);
                    var i;
                    for (i = 0; i < response.length; i++){

                        var station = response[i].station;
                        var river = response[i].river;
                        var rb_id = response[i].rb_id;
                        var catchment = response[i].catchment;
                        var alert_level = response[i].alert_level;
                        var minor_flood_level = response[i].minor_flood_level;
                        var major_flood_level = response[i].major_flood_level;
                        var current_level = response[i].current_level;
                        var alert = response[i].alert_condition;

                        var lat = parseFloat(response[i].lat);
                        var lng = parseFloat(response[i].lng);
                        var point = new google.maps.LatLng(lat, lng);

                        var html = "<table id = \'sl-map\' class = \'sl-map\' border='1'><th colspan = \'2\'>" + station + "</th><tr><td><b>River</b></td><td>" + river + " (" + rb_id + ")</td></tr><tr><td><b>Co-ordinates</b></td><td>Lati - " + lat + "</br>Long - " + lng + "</td></tr><tr><td><b>Catchment Area(km<sup>2</sup>)</b></td><td>" + catchment + "</td></tr><tr><td><b>Alert Level(m)</b></td><td>" + alert_level + "</td></tr><tr><td><b>Minor Flood Level(m)</b></td><td>" + minor_flood_level + "</td></tr><tr><td><b>Major Flood Level(m)</b></td><td>" + major_flood_level + "</td></tr><tr><td><b>Current Water Level(m)</b></td><td>" + current_level + "</td></tr><tr><td><b>Condition</b></td><td>" + alert + "</td></tr></table>";

                        var marker = new google.maps.Marker({
                            map: map,
                            position: point
                        });
                        bindInfoWindow(marker, map, infoWindow, html);
                        marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
                    }

                }

                function bindInfoWindow(marker, map, infoWindow, html){
                    google.maps.event.addListener(marker, 'click', function(){
                        infoWindow.setContent(html);
                        infoWindow.open(map, marker);
                    });
                }
            }

            initialize();
        });

    </script>
</head>
<body>
<div id="map"></div>
</body>
</html>