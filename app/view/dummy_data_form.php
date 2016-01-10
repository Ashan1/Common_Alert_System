<div>Dummy Data Form</div>
<div><ul>
    <li><button id="earthquake"><i class="dis-cracked2" style=""></i> <span>EARTHQUAKES</span></button><br>
        <div id="earthquake1" style="display: none" >
            <form method="post" id1="earthquake" action="../controllers/dummy_data.php">
                <ul>
                    <li>ID: <input type="text" name="id"></li><br>
                    <li>Date: <input type="date" name="date"></li><br>
                    <li>Time: <input type="time" name="time"></li><br>
                    <li>Magnitude: <input type="text" name="magnitude"></li><br>
                    <li>Tsunami: <input type="number" name="tsunami"></li><br>
                    <li>Place: <input type="text" name="place"></li><br>
                    <li>Longitude: <input type="text" name="longitude"></li><br>
                    <li>Latitude: <input type="text" name="latitude"></li><br>
                </ul>
                <button type="submit" id1="123"name="save" value="earthquake">Save Data</button>
            </form>
        </div></li>
    <li><button id="landslide"><i class="dis-snowslide" style=""></i> <span>LANDSLIDES</span></button><br>
        <div id="landslide1" style="display: none">
            <form method="post" action="../controllers/dummy_data.php">
                <ul>

                    <li>Date: <input type="date" name="date"></li><br>
                    <li>Time: <input type="time" name="time"></li><br>
                    <li>Place: <input type="text" name="place"></li><br>
                    <li>Longitude: <input type="text" name="longitude"></li><br>
                    <li>Latitude: <input type="text" name="latitude"></li><br>
                    <li>Effective Area: <input type="text" name="ef_area"></li><br>
                </ul>
                <button type="submit" name="save" value="landslide">Save Data</button>
            </form>
        </div></li>

    </ul>
</div>
<div class="col-lg-4">
    <ul>
        <li><button id="cyclone"> <i class="dis-hurricane" style=""></i> <span>CYCLONES</span></button><br>
            <div id="cyclone1" style="display: none">
                <form method="post" action="../controllers/dummy_data.php">
                    <ul>

                        <li>Date: <input type="date" name="date"></li><br>
                        <li>Time: <input type="time" name="time"></li><br>
                        <li>Longitude: <input type="text" name="longitude"></li><br>
                        <li>Latitude: <input type="text" name="latitude"></li><br>
                        <li>Pressure: <input type="text" name="pressure"></li><br>
                        <li>Wind Speed: <input type="number" name="wind_speed"></li><br>
                        <li>Stage: <input type="number" name="stage"></li><br>

                    </ul>
                    <button type="submit" name="save" value="cyclone">Save Data</button>
                </form>
            </div></li>


        <li><button id="flood"> <i class="dis-waves8" style=""></i> <span>FLOODS</span></button><br>
            <div id="flood1" style="display: none">
                <form method="post" action="../controllers/dummy_data.php">
                    <ul>
                        <li>Station: <input type="text" name="station"></li><br>
                        <li>River/Basin: <input type="text" name="river_basin"></li><br>
                        <li>RB_ID: <input type="text" name="rb_ID"></li><br>
                        <li>Longitude: <input type="text" name="longitude"></li><br>
                        <li>Latitude: <input type="text" name="latitude"></li><br>
                        <li>Flood Type: <input type="text" name="flood_type"></li><br>
                    </ul>
                    <button type="submit" name="save" value="flood">Save Data</button>
                </form>
            </div></li>

    </ul>
</div>
<div class="col-lg-4">
    <ul>
        <li><button id="tsunami"> <i class="dis-tsunami1" style=""></i> <span>TSUNAMI</span></button><br>
            <div id="tsunami1" style="display: none">
                <form method="post" action="../controllers/dummy_data.php">
                    <ul>
                        <li>Date: <input type="date" name="date"></li><br>
                        <li>Time: <input type="time" name="time"></li><br>
                        <li>Magnitude: <input type="text" name="magnitude"></li><br>
                        <li>Place: <input type="text" name="place"></li><br>
                    </ul>
                    <button type="submit" name="save" value="tsunami">Save Data</button>
                </form>
            </div></li>
        <li><button id="reservoir"><i class="dis-fire14" style=""></i> <span>RESERVOIR</span></button><br>
            <div id="reservoir1" style="display: none">
                <form method="post" action="../controllers/dummy_data.php">
                    <ul>
                        <li>RESERVOIR NAME: <input type="text" name="reservoir_name"></li><br>
                        <li>Distric: <input type="text" name="district"></li><br>
                        <li>Longitude: <input type="text" name="longitude"></li><br>
                        <li>Latitude: <input type="text" name="latitude"></li><br>
                        <li>Major Basin: <input type="text" name="major_basin"></li><br>
                        <li>Catchment Area: <input type="text" name="catchment_area"></li><br>
                        <li>Capacity: <input type="number" name="capacity"></li><br>
                        <li>Max Bund Height: <input type="text" name="max_bund_height"></li><br>
                        <li>Full Supply Depth: <input type="text" name="full_supply_depth"></li><br>
                        <li>Spilling: <input type="text" name="spilling"></li><br>
                        <li>Gate Open: <input type="text" name="gate_open"></li><br>
                    </ul>
                    <button type="submit" name="save" value="reservoir">Save Data</button>                </form>
            </div></li>
</div>






<script src="../../public/js/jquery.js"></script>
<script>
    $(document).ready(function() {
        $("#earthquake").click(function () {
            $("#earthquake1").toggle(500)
        });
        $("#landslide").click(function () {
            $("#landslide1").toggle(500);
        });
        $("#cyclone").click(function () {
            $("#cyclone1").toggle(500)
        });
        $("#flood").click(function () {
            $("#flood1").toggle(500)
        });
        $("#tsunami").click(function () {
            $("#tsunami1").toggle(500)
        });
        $("#reservoir").click(function () {
            $("#reservoir1").toggle(500)
        });

    });
</script>