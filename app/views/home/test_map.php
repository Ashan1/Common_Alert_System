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
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <?php include('test.php');
        $count = count($posts);
    ?>

    <script>
        $(function() {
            //var latlng = {lat: 7.9500, lng: 81.0000};
            var count = <?php echo $count ?>;
            var lat = <?php echo $arrlat ?>;
            var long = <?php echo $arrlong ?>;

            function initialize() {
                var map;
                var mapOptions = {
                    zoom: 8,
                    center: {lat: 7.9500, lng: 81.0000},
                    mapTypeId: google.maps.MapTypeId.SATELLITE
                };
                map = new google.maps.Map(document.getElementById('map'), mapOptions);

            }

            for (var i = 0; i < 60; i++) {
                var latlng = {lat: lat[i], lng: long[i]};
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    clickable: true
                });
                marker.setIcon('https://www.google.com/mapfiles/marker_green.png');
            }
        }


        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>

<body>
<div id="map"></div>
</body>
</html>
