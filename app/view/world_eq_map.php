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
                    zoom: 3,
                    center: {lat: 7.9500, lng: 81.0000},
                    mapTypeId: google.maps.MapTypeId.SATELLITE
                });

                var infoWindow = new google.maps.InfoWindow({});

                var xmlhttp = new XMLHttpRequest();
                var url = "../controllers/eq_jsongen.php";

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

                        var mag = parseFloat(response[i].mag);
                        var date = response[i].date;
                        var time = response[i].time;
                        var place = response[i].place;
                        var tsunami = response[i].tsunami;
                        var lat = parseFloat(response[i].lat);
                        var lng = parseFloat(response[i].lng);
                        var point = new google.maps.LatLng(lat, lng);



                        var warning = "";
                        if (tsunami != 0){
                            warning = "Tsunami Warning";
                        }

                        var html = "<table id=\'world-map\' class=\'world-map\' border='1'><tr><td><b>Location</b></td><td>" + place + "</td></tr><tr><td><b>Occurence</b></td><td>" + date + "<br> " + time + "</td></tr><tr><tr><td><b>Magnitude</b></td><td>" + mag + "</td></tr><tr><td><b>Latitude</b></td><td>" + lat + "</td></tr><tr><td><b>Longitude</b></td><td>" + lng + "</td></tr><tr><tr><td><b>Tsunami</b></td><td>" + warning + "</td></tr></table>";

                        var marker = new google.maps.Marker({
                            map: map,
                            position: point
                        });
                        bindInfoWindow(marker, map, infoWindow, html);
                        marker.setIcon('https://www.google.com/mapfiles/marker_green.png');
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