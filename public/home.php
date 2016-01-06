<?php include "../app/templates/header.php";

require_once '../app/models/dbConfig.php';
    if($user->is_loggedin()==""){
        $user->redirect('index.php');
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
                <div class="disaster-alert" id="disaster-alert">
                    <p>sdjhfklsudgflkug jkgahdsfk</p>
                </div>
                <div class="row">
                    <div class="recent-activity">
                        <div>
                            <h3>Recent Activity</h3>
                            <ul>
                                <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                                <li><h4>Pacific Ocean</h4>09.51 a.m <a href="#">more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sub-menu">
                        <ul class="nav nav-tabls">
                            <li role="presentation" class=""><a id="tab1" href="../app/controllers/tab.php?id=1">SUMMARY</a></li>
                            <li role="presentation" class=""><a id="tab2" href="../app/controllers/tab.php?id=2">NOTIFICATIONS</a></li>
                            <li role="presentation" class=""><a id="tab3" href="../app/controllers/tab.php?id=3">ACTIVITIES</a></li>
                            <li role="presentation" class=""><a id="tab4" href="../app/controllers/tab.php?id=4">ADVISOR BOARD</a></li>
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


<!--                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 test">,dfsdf</div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><?php /*echo $_SESSION['user_session'] */?></div>
                    <div class="col-lg-3 col-md-3 col-sm-3">,dfsdf</div>
                    <div class="col-lg-3 col-md-3 col-sm-3 test">,dfsdf</div>
                </div>-->
            </div>
        </div>
    </div>

</div>
</body>
</html>

