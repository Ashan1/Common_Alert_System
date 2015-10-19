<?php include('../app/views/home/head.php');?>

<div>
    <aside class="left-side">
        <?php include('../app/views/home/side.php');?>
    </aside>
    <aside class="right-side rgt">
        <div class="col-lg-12">
            <div class="row recent-activity">

                <div>
                    <h3>Recent Activity</h3>
                 <ul>
                     <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                     <li><h4>Pacific Ocean</h4>09.51 a.m <a href="#">more</a></li>
                 </ul>
                </div>
            </div>
            <div class="row sub-menu">
                <ul class="nav nav-tabls">
                    <li role="presentation" class=""><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">SUMMARY</a></li>
                    <li role="presentation" class=""><a href="#notifications" aria-controls="worldmap" role="tab" data-toggle="tab">NOTIFICATIONS</a></li>
                    <li role="presentation" class=""><a href="#activities" aria-controls="worldmap" role="tab" data-toggle="tab">ACTIVITIES</a></li>
                    <li role="presentation" class=""><a href="#advicerboard" aria-controls="worldmap" role="tab" data-toggle="tab">ADVICER BOARD</a></li>
                </ul>
            </div>
            <div class="row tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="summary">
                    <div>
                    <div class="row summary-circles home-tabheader">
                        <div class="center1">
                            <div class="circles">
                                <?php include('../app/views/home/disastercircles.php'); ?>
                            </div>
                            <div class="map-menu">
                                <div class="center">
                                    <ul class="nav nav-tabls">
                                        <li role="presentation" class=""><a href="#slmap" aria-controls="slmap" role="tab" data-toggle="tab">Sri Lanka</a></li>
                                        <li role="presentation" class=""><a href="#worldmap" aria-controls="worldmap" role="tab" data-toggle="tab">World</a></li>
                                    </ul>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="row maps tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="slmap">
                            <object type="text/html" data="../app/views/home/test_map.php"
                                    style="width:100%; height:100%; margin:1%;">
                            </object>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="worldmap">
                            <object type="text/html" data="../app/views/home/test_disaster.php" style="width:100%; height:100%; margin:1%;">
                            </object>
                        </div>
                    </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade in active" id="notifications">
                    <?php include '../app/views/home/home_notification.php' ; ?>
                </div>
            </div>
        </div>
    </aside>
</div>



</body>
</html>