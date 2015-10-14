<html>
<head>
    <meta charset="UTF-8">
    <title>CAS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../../../public/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- disaster fonts -->
    <link href="../../../public/stylesheets/disasterfonts.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../../../public/stylesheets/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="../../../public/stylesheets/menuf.css" rel="stylesheet" type="text/css" />

    <link href="../../../public/stylesheets/index.css" rel="stylesheet" type="text/css" />
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="../../../public/public/javascripts/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap -->
    <script src="../../../public/javascripts/bootstrap.min.js" type="text/javascript"></script>
    <!-- Director App -->
    <script src="../../../public/javascripts/menu.js" type="text/javascript"></script>


</head>
<body class="skin-black pace-done">
<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>

<header class="header">
    <a href="index.php" class="logo">
        <!--<img src="../../../public/images/logo.png"/>-->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-success">4</span>
                    </a>

                </li>
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="label label-danger">9</span>
                    </a>

                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        <span>Pasan <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                        <li class="dropdown-header text-center">Account</li>

                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o fa-fw pull-right"></i>
                                <span class="badge badge-success pull-right">10</span> Updates</a>
                            <a href="#">
                                <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                <span class="badge badge-danger pull-right">5</span> Messages</a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw pull-right"></i>
                                Profile
                            </a>
                            <a data-toggle="modal" href="#modal-user-settings">
                                <i class="fa fa-cog fa-fw pull-right"></i>
                                Settings
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../../../public/images/pro-pic.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, Pasan</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!--                 <form action="#" method="get" class="sidebar-form">
                                 <div class="input-group">
                                     <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                     <span class="input-group-btn">
                                         <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                     </span>
                                 </div>
                             </form>-->
            <ul class="sidebar-menu">
                <li>
                    <a href="">
                        <i class="fa fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-globe"></i> <span>Disasters</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-exclamation-triangle"></i> <span>Alerts</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-envelope"></i> <span>E-mails</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

            </ul>
        </section>
    </aside>
    <aside class="right-side rgt">
        <div class="col-lg-12">
            <div class="row recent-activity">
                <h3>Recent Activity</h3>
                <div>
                    <ul>
                        <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                        <li><h4>Pacific Ocean</h4>09.51 a.m <a href="#">more</a></li>
                    </ul>
                </div>
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
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="summary">
                <p>Notification extended</p>
            </div>
            <div role="tabpanel" class="tab-pane fade in active" id="notifications">

                <p>Notification extended</p>
            </div>
            <div role="tabpanel" class=" tab-pane fade in active" id="activities">
                <p>Notification extended</p>
            </div>
            <div role="tabpanel" class=" tab-pane fade in active" id="advicerboard">
                <div>
                    <p><br><br></p>
                    <div class="advicerpanel">
                        <tbody>

                        <?php include('connect.php');
                        while( $row = mysql_fetch_assoc( $result ) ){
                            echo
                            "<tr>
              <td>{$row['A_date']}</td>
              <td>{$row['A_time']}</td>
              <td >{$row['A_description']}</td>
              <td>{$row['A_status']}</td>
		  </tr>\n";
                        }
                        ?>
                        </tbody>
                        </div>
                </div>>
            </div>
        </div>

</div>
</div>
</body>
</html>