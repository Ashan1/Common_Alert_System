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
                    <object type="text/html" data="../app/views/home/test_disaster_sri_lanka.php"
                            style="width:100%; height:100%; margin:1%;">
                    </object>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="worldmap">
                    <object type="text/html" data="../app/views/home/test_disaster.php"
                            style="width:100%; height:100%; margin:1%;">
                    </object>
                </div>
            </div>
        </div>
    </aside>
</div>


</body>

</html>