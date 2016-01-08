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
                var url = "../controllers/reservoir_jsongen.php";

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

                        var reservoir = response[i].reservoir_name;
                        var district = response[i].district;
                        var basin = response[i].major_basin;
                        var catchment = response[i].catchment_area;
                        var capacity = response[i].capacity;
                        var acerage = response[i].specified_acerage;
                        var bund_height = response[i].max_bund_height;
                        var supply_depth = response[i].full_supply_depth;
                        var water_level = response[i].water_depth_above_sluice;
                        var spilling = response[i].spilling;
                        var gate_open = response[i].gate_open;

                        var lat = parseFloat(response[i].lat);
                        var lng = parseFloat(response[i].lng);
                        var point = new google.maps.LatLng(lat, lng);

                        var spill = "Normal";
                        if (spilling == "Yes"){
                            spill = "Reservoir overflow";
                        }

                        var sluice = "Sluice gates closed";
                        if (gate_open == "Yes"){
                            sluice = "Sluice gates open";
                        }

                        var html = "<table class = \'colorful\' border='1'><th colspan = \'2\'>" + reservoir + "</th><tr><td><b>District</b></td><td>" + district + "</td></tr><tr><td><b>Co-ordinates</b></td><td>Lati - " + lat + "</br>Long - " + lng + "</td></tr><tr><td><b>Major Basin</b></td><td>" + basin + "</td></tr><tr><td><b>Catchment Area (ha)</b></td><td>" + catchment + "</td></tr><tr><td><b>Capacity @ F.S.L (MCM)</b></td><td>" + capacity + "</td></tr><tr><td><b>Specified Acerage (ha)</b></td><td>" + acerage + "</td></tr><tr><td><b>Maximum Bund Height(m)</b></td><td>" + bund_height + "</td></tr><tr><td><b>Full Supply Depth(m)</b></td><td>" + supply_depth + "</td></tr><tr><td><b>Water Depth above Sluice(m)</b></td><td>" + water_level + "</td></tr><tr><td><b>Reservoir Water Level</b></td><td>" + spill + "</td></tr><tr><td><b>Sluice Gate</b></td><td>" + sluice + "</td></tr></table>";

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