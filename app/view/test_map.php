<!DOCTYPE html>
<html>
<head>
    <style>
        html, body, #map {
            margin: 0;
            padding: 0;
            height: 100%;
        }
    </style>
    <link href="../../../public/stylesheets/main.css" rel="stylesheet" type="text/css" />
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <?php include "test.php"; ?>
    <script>

        var map;
        var jdata;
        jdata = <?php echo $data; ?>;

        function initialize() {
            var mapOptions = {
                center: {lat: 7.9500, lng: 81.0000},
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.SATELLITE
            };
            map = new google.maps.Map(document.getElementById("map"), mapOptions);

            setMarkers(map);
        }

        function setMarkers(map){
            var marker, i;
            var infoWindow = new google.maps.InfoWindow({});

            for (i = 0; i < jdata.length; i++){
                var latlng = new google.maps.LatLng(jdata[i]['lat'], jdata[i]['long']);
                marker = new google.maps.Marker({
                    position: latlng,
                    map: map
                });


                google.maps.event.addListener(marker, 'click', getHandler(i));
            }

            function getHandler(i){
                return function handler() {

                    infoWindow.setContent("<table class = \'colorful\' border='1'><th colspan = \'2\'>" + jdata[i]['reservoir_name'] + "</th><tr><td><b>District</b></td><td>" + jdata[i]['district'] + "</td></tr><tr><td><b>Co-ordinates</b></td><td>Lati - " + jdata[i]['lat'] + "</br>Long - " +  jdata[i]['long']+ "</td></tr><td><b>Capacity @ F.S.L (MCM)</b></td><td>" + jdata[i]['Capacity @ F.S.L (MCM)'] + "</td></tr><tr><td><b>Specified Acerage (ha)</b></td><td>" + jdata[i]['Specified Acerage (ha)'] + "</td></tr></table>");
                    infoWindow.open(map, this);
                }
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>

<body>
<div id="map"></div>
</body>
</html>
