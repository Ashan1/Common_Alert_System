<!DOCTYPE html>
<html>
<head>
    <style>
        html, body, #map { margin: 0; padding: 0; height: 100%; }
    </style>
    <script
        src="https://maps.googleapis.com/maps/api/js?libraries=visualization">
    </script>
    <script>
        var map;

        function initialize() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 3,
                center: {lat: 7.9500, lng: 81.0000},
                mapTypeId: google.maps.MapTypeId.SATELLITE
            });

            // Create a <script> tag and set the USGS URL as the source.
            var script = document.createElement('script');
            // (In this example we use a locally stored copy instead.)
            script.src = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp';
            document.getElementsByTagName('head')[0].appendChild(script);
        }

        // Loop through the results array and place a marker for each
        // set of coordinates.
        var infowindow = new google.maps.InfoWindow({});

        function getHandler(place, mag){
            return function handler() {
                infowindow.setContent("<table><tr><td>Place</td><td>" + place + "</td></tr><tr><td>Magnitude</td><td>" + mag + "</td></tr></table>");
                infowindow.open(map, this);
            }
        }

        window.eqfeed_callback = function(results) {
            for (var i = 0; i < results.features.length; i++) {
                var coords = results.features[i].geometry.coordinates;
                var place = results.features[i].properties.place;
                var mag = results.features[i].properties.mag;
                var latLng = new google.maps.LatLng(coords[1],coords[0]);
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    clickable: true
                });
                marker.setIcon('https://www.google.com/mapfiles/marker_green.png');
                google.maps.event.addListener(marker, 'click', getHandler(place, mag));
            }
        }


        google.maps.event.addDomListener(window, 'load', initialize)

    </script>
</head>
<body>
<div id="map"></div>
</body>
</html>