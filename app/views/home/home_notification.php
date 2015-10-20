<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
           <div class="home-tabheader row disaster-notify">
               <div class="col-lg-4">
                   <ul>
                       <li><i class="dis-cracked2" style=""></i> <span>EARTHQUAKES - 018</span></li>
                       <li><i class="dis-snowslide" style=""></i> <span>LANDSLIDES - 118</span></li>
                       <li><i class="dis-fire14" style=""></i> <span>FIRE - 017</span></li>
                   </ul>
               </div>
               <div class="col-lg-4">
                   <ul>
                       <li><i class="dis-hurricane" style=""></i> <span>CYCLONES - 066</span></li>
                       <li><i class="dis-waves8" style=""></i> <span>FLOODS - 028</span></li>
                       <li><i class="dis-tsunami1" style=""></i> <span>TSUNAMI - 033</span></li>
                   </ul>
               </div>
               <div class="col-lg-4">
                   <ul>
                       <li><i class="dis-erupting" style=""></i> <span>VOLCANO - 044</span></li>
                       <li><i class="dis-snowslide" style=""></i> <span>LANDSLIDES - 088</span></li>
                       <li><i class="dis-fire14" style=""></i> <span>FIRE - 099</span></li>
                   </ul>
               </div>
           </div>


        </div>
    </div>
</div>
<div>
        <?php
        include "connect.php";
        $result = mysql_query("SELECT * FROM notification ");
        ?>
        <table class="table table-striped th" >
            <col width="200">
            <col width="200">
            <col width="200">
            <col width="200">
            <col width="200">
            <col width="200">
            <thead>
            <tr CLASS="thcolor">
                <th>DATE</th>
                <th>COUNTRY</th>
                <th>CITY</th>
                <th>TIME</th>
                <th style="width:100px;">SCALE</th>
                <th>CONDITION</th>
            </tr>
            </thead>
            <tbody>

            <?php
            while( $row = mysql_fetch_assoc( $result ) ){
                echo
                "<tr>
             <td>{$row['Date']}</td>
             <td>{$row['Country']}</td>
             <td>{$row['City']}</td>
             <td>{$row['Time']}</td>
             <td >{$row['Scale']}</td>
             <td>{$row['N_Condition']}</td>
             </tr>\n";
            }
            ?>
            </tbody>
        </table>
        <?php mysql_close($connector); ?>

    </div>