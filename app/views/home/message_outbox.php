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
    <a href="../../../index.php" class="logo">
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


<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/bootstrap.css">
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/bootstrap-theme.css">
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/menu.css">
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/addusercss.css">
    <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/stylesheets/new.css" rel="stylesheet">

    <script src="../../../public/javascripts/jquery.min.js"></script>
    <script src="../../../public/javascripts/popup.min.js"></script>

    <script language="javascript">
        function loadQueryResults() {
            $('#DisplayDiv').load('test2.php');
            return false;
        }
        function validate()
        {
            var chks = document.getElementsByName('checkbox[]');
            var hasChecked = false;
            for (var i = 0; i < chks.length; i++)
            {
                if (chks[i].checked)
                {
                    hasChecked = true;
                    break;
                }
            }
            if (hasChecked == false)
            {
                alert("Please select at least one.");
                return false;
            }
            return true;
        }
    </script>
</head>


<?php

include "../../../public/php/connect.php";
$delete = "yes";
if(isset($_POST['delete1'])) {
    for ($i = 0; $i < count($_POST['checkbox']); $i++) {
        $del_id = $_POST['checkbox'][$i];
        $sql = "UPDATE message SET sent_deleted='$delete' WHERE id='$del_id'";
        echo $del_id;

        if (mysql_query($sql)) {
        }
    }
}

if(isset($_POST['new_message'])){
    header('location:send_message.php');
}

$_SESSION['sessionVar'] = $del_id;

?>

<div >
    <aside class="left-side">
        <?php include('side.php');?>
    </aside>
    <aside class="right-side rgt">
        <!-- Page Content -->
        <div class="col-lg-12">
            <div id="layout">

                <div>
                    <div id="topic">
                        <h2 style="color:#000000; float:left;">Message Outbox</h2>
                    </div>
                </div>

                <div id="content" >


                    <?php
                    session_start();
                    require("../../../public/php/connect.php");

                    /*if (isset($_POST['view_old'])) {*/
                    $user = $_SESSION['user'];
                    $query = mysql_query("SELECT * FROM message WHERE from_user = 'Dilini' AND sent_deleted = 'no'")or die(mysql_error());
                    ?>

                    <form name="form1" method="post" action="">
                        <table class="table table-striped" id="table">

                            <div>
                                <div style="float:right;">
                                    <button class="div_button"  type="submit" id="remove" name="delete1" ><img src="../../../public/images/remove.png" class="div_button_img">Remove</button></form>
                </div>

                <div style="float:right;">
                    <button class="div_button" type="submit" name="new_message" style="width: 129px;"><img src="../../../public/images/Add.png" class="div_button_img">New Message</button>
                </div>
            </div>

            <thead>
            <tr>
                <th>Fromo</th>
                <th>To</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>

            <?php
            while( $row = mysql_fetch_assoc( $query ) ){
                $dbrow_id=$row['id'];
                echo
                    "<tr>
                          <td>{$row['from_user']}</td>
                          <td>{$row['to_user']}</td>
                          <td>{$row['message']}</td>
                          <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' value=$dbrow_id>"."</td>
		            </tr>\n";
            }
            ?>

            <?php
            /* }*/

            if (isset($_POST['delete'])) {
                $id = $_POST['id'];
                $user = $_SESSION['username'];
                $sql = mysql_query("UPDATE message SET send_deleted = 'yes' WHERE id = '$id' AND from_user = 'Dilini'")or die(mysql_error());
                echo "Your message has been succesfully deleted.";
            }
            ?>
            <!--  <input name="update" type="submit" data-toggle="modal" data-target="#myModal4" value="Update">-->

            </form>
            </tbody>
            </table>

        </div>

</div><!--layout ends-->
</div>

<!--<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">|||</a>-->
<!-- /page-content-->
</aside>
</div>

</body>
</html>