<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap.css">
    <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap-theme.css">
    <link rel="stylesheet" media="screen" href="../public/stylesheets/menu.css">

    <script src="javascripts/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="javascripts/bootstrap.js" type="text/javascript"></script>


</head>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">

        <div class="logo">
            <img src="images/logo.png">
        </div>
        <div class="profile">
           <div><img src="images/pro-pic.png"></div>
            <div class="pro-name">
            <ul>
                <li>Admin</li>
                <li>Logout</li>
            </ul>
            </div>
        </div>

        <div>
            <ul class="sidebar-nav">
                <li>
                    <a href="#" id="home">Home</a>
                </li>
                <li>
                    <a href="#" id="disaster">Disasters</a>
                </li>
                <li>
                    <a href="#">Alerts</a>
                </li>
                <li>
                    <a href="#">E-mails</a>
                </li>
                <li>
                    <a href="#">Admin Panel</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="page-content-wrapper">
        <div class="container-fluid main-content">
            <div class="row">
                <div class="col-lg-12">
                    <!--status bar-->

                    <div class="status-bar row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 menu-icon">
                            <a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
                        </div>
                        <div class="col-lg-8 search">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <input type="text" value="Search Disaster"/>
                        </div>
                        <div class="col-lg-1 bell"> <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> </div>
                        <div class="col-lg-2"> March 23<sup>rd</sup></div>

                    </div>

                    <!--/Status bar-->
                    <div id="mcontent"><p>Content goes here</p></div>

                    <!--<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">|||</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- /page-content-->

</div>


<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>



</body>
</html>