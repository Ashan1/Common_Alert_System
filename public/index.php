<html>
<head>
    <link href="stylesheets/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include('../app/views/home/head.php');?>

<div>
    <aside class="left-side">
        <?php include('../app/views/home/side.php');?>
    </aside>
    <aside class="right-side rgt">
        <div class="container-fluid">
            <div class="row recent-activity">
                <h3>Recent Activity</h3>
                <div>
                 <ul>
                     <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                     <li><h4>Pacific Ocean</h4>09.51 a.m <a href="#">more</a></li>
                 </ul>
                </div>
            </div>
            <div class="row sub-menu">

            </div>
            <div class="row summary-circles">
                <div class="circles col-lg-12">
                    <div class="col-lg-4 circle01"></div>
                    <div class="col-lg-4 circle02"></div>
                    <div class="col-lg-4 circle03"></div>
                    <div class="col-lg-4 circle04"></div>
                </div>
                <div class="col-lg-12 map-menu">
                    <ul class="nav nav-tabls">
                        <li role="presentation" class=""><a href="#slmap" aria-controls="slmap" role="tab" data-toggle="tab">Sri Lanka</a></li>
                        <li role="presentation" class=""><a href="#worldmap" aria-controls="worldmap" role="tab" data-toggle="tab">World</a></li>
                    </ul>
                </div>
            </div>
            <div class="row maps tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="slmap">
                    <p>Srilanka map goes here</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="worldmap">
                    <p>worls map goes here</p>
                </div>
            </div>
        </div>
    </aside>
</div>


</body>

</html>