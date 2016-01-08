<?php
error_reporting(10);
require_once '../controllers/notification_connect.php';

/**
 * Created by CAS Team.
 */
?>

<div class="home-tabheader disaster-notify">
    <div class="col-lg-4">
        <ul>
            <li><i class="dis-cracked2" style=""></i> <span>EARTHQUAKES - <?php  $edata=$db->query("SELECT * FROM earthquake WHERE date='$tdy'")->count();echo $edata;?></span></li>
            <li><i class="dis-snowslide" style=""></i> <span>LANDSLIDES - <?php  $ldata=$db->query("SELECT * FROM landslide WHERE date='$tdy'")->count();echo$ldata;?></span></li>
            <li><i class="dis-fire14" style=""></i> <span>FIRE -<?php  $cdata=$db->query("SELECT * FROM cyclone WHERE date='$tdy'");echo$ccount=$cdata->count();?></span></li>
        </ul>
    </div>
    <div class="col-lg-4">
        <ul>
            <li><i class="dis-hurricane" style=""></i> <span>CYCLONES - <?php  $cdata=$db->query("SELECT * FROM cyclone WHERE date='$tdy'");echo$ccount=$cdata->count();?></span></li>
            <li><i class="dis-waves8" style=""></i> <span>FLOODS -<?php $fdata=$db->query("SELECT * FROM flood WHERE date='$tdy'");echo$fcount=$fdata->count();?></span></li>
            <li><i class="dis-tsunami1" style=""></i> <span>TSUNAMI -<?php $tdata=$db->query("SELECT * FROM tsunami WHERE date='$tdy'");echo$tcount=$tdata->count();?></span></li>
        </ul>
    </div>
    <div class="col-lg-4">
        <ul>
            <li><i class="dis-erupting" style=""></i> <span>VOLCANO - <?php  $vdata=$db->query("SELECT * FROM volcano WHERE date='$tdy'");echo$vcount=$vdata->count();?></span></li>
            <li><i class="dis-snowslide" style=""></i> <span>LANDSLIDES - <?php  $ldata=$db->query("SELECT * FROM landslide WHERE date='$tdy'");echo$lscount=$ldata->count();?></span></li>
            <li><i class="dis-fire14" style=""></i> <span>FIRE - <?php  $ldata=$db->query("SELECT * FROM landslide WHERE date='$tdy'");echo$lscount=$ldata->count();?></span></li>
        </ul>
    </div>
</div>
