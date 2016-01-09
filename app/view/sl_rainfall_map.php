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
                    mapTypeId: google.maps.MapTypeId.SATELLITE
                });

                var infoWindow = new google.maps.InfoWindow({});

                var xmlhttp = new XMLHttpRequest();
                var url = "../controllers/rainfall_jsongen.php";

                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        apply(xmlhttp.responseText);
                    }

                };


                xmlhttp.open("GET", url, true);
                xmlhttp.send();

                function apply(out){
                    var response = JSON.parse(out);

                    for (i = 0; i < response.length; i++){

                        var station = response[i].station;
                        var basin = response[i].basin;
                        var rb_id = response[i].rb_id;
                        var rain_fall = response[i].rain_fall;

                        var lat = parseFloat(response[i].lat);
                        var lng = parseFloat(response[i].lng);
                        var point = new google.maps.LatLng(lat, lng);

                        var html = "<table id = \'sl-map\' class = \'sl-map\' border='1'><th colspan = \'2\'>" + station + "</th><tr><td><b>River Basin</b></td><td>" + basin + " (" + rb_id + ")</td></tr><tr><td><b>Co-ordinates</b></td><td>Lati - " + lat + "</br>Long - " + lng + "</td></tr><tr><td><b>Rainfall for Last 24 hours(mm)</b></td><td>" + rain_fall + "</td></tr></table>";

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