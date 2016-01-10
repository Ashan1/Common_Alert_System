<?php include "../app/templates/header.php";
require_once '../app/models/dbConfig.php';
require_once '../app/controllers/recent_alert.php';

    if($user->is_loggedin()==""){
        $user->redirect('../index.php');
    }
?>
</head>
<script type="text/javascript">
    /*---------------------Tab Change Home----------------------------*/
    function loadTabContent(tabUrl){
        $("#preloader").show();
        jQuery.ajax({
            url: tabUrl,
            cache: false,
            success: function(message) {
                jQuery("#home-content1").empty().append(message);
                $("#preloader").hide();
            }
        });
    }

    jQuery(document).ready(function(){
        $("#preloader").hide();
        jQuery("[id^=tab]").click(function(){

            // get tab id and tab url
            tabId = $(this).attr("id");
            tabUrl = jQuery("#"+tabId).attr("href");
            //console.log(tabUrl);

            jQuery("[id^=tab]").removeClass('sub-menu-active');
            $("#"+tabId).addClass('sub-menu-active');
            loadTabContent(tabUrl);
            return false;
        });

        jQuery('#alert-close').on('click', function(event) {
            jQuery('#disaster-alert').toggle('show');
        });
1

    });
    /*---------------------End Tab Change Home----------------------------*/
    window.onload = loadTabContent('../app/controllers/tab.php?id=1');
</script>
<body>
<div>
    <div><?php include "../app/templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../app/templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">
                <div class="row disaster-alert" id="disaster-alert">
                    <div class="bulb col-lg-2">
                        <span><img src="images/alert_bulb.png" class="img-responsive"></span>
                    </div>
                    <div class="description col-lg-10">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="alert-close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                        <h1>Flood in Anuradhapura</h1> </div>
                </div>
                <div class="row">
                    <div class="recent-activity">
                        <div>
                            <h3>Recent Activity</h3>
                            <ul>
                                <?php if($dtable == 'earthquake'){?>
                                <li> <i class="dis-cracked2" style="font-size: 40px"></i></li>
                                <?php }
                                else if($dtable == 'earthquake'){?>
                                    <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                                <?php }
                                else if($dtable == 'earthquake'){?>
                                    <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                                <?php }
                                else if($dtable == 'earthquake'){?>
                                    <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                                <?php }?>
                                <!--<li><h4><?php /*echo $r[0]->place; */?></h4><?php /*echo $r[0]->time; */?></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sub-menu">
                        <ul class="nav nav-tabls">
                            <li role="presentation"><a id="tab1" href="../app/controllers/tab.php?id=1">SUMMARY</a></li>
                            <li role="presentation"><a id="tab2" href="../app/controllers/tab.php?id=2">NOTIFICATIONS</a></li>
                            <li role="presentation"><a id="tab3" href="../app/controllers/tab.php?id=3">External Authority</a></li>
                            <li role="presentation"><a id="tab4" href="../app/controllers/tab.php?id=4">ADVISOR BOARD</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="preloader">
                        <img src="images/loading.gif" align="absmiddle"> Loading...
                    </div>
                    <div id="home-content1">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>

