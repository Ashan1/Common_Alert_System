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
    </head>


<?php
    include "../../../public/php/connect.php";
    $result = mysql_query("SELECT * FROM employee");
    $count=mysql_num_rows($result);

    if(isset($_POST['delete'])){
        for($i=0; $i<count($_POST['checkbox']); $i++){
            $del_id = $_POST['checkbox'][$i];
            $sql = "DELETE FROM employee WHERE E_nic='$del_id'";
            if(mysql_query($sql)){
            }
        }
    }

    if(isset($_POST['update'])) {
        for($i=0; $i<count($_POST['checkbox']); $i++){
            $del_id = $_POST['checkbox'][$i];
            $sql = "SELECT E_job_role FROM employee WHERE E_nic='$del_id'";
            $ro = mysql_fetch_assoc( mysql_query($sql) );
            $job=$ro['E_job_role'];
            echo $ro;
                if (mysql_query($sql)) {
                    ?>

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#myModaledit").modal('show');
                });
            </script>

            <!--edit_form-->
            <div class="modal fade " id="myModaledit" action="../../../public/php/update.php>">
                <div class="modal-dialog">
                    <div class="row" style=" margin-top: 150px;margin-left: 90px;">
                        <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 450px; height: 270px;">
                            <h4 style="color:white;text-align:left;">Edit User Job Role</h4>
                            <form class="form-horizontal" action="../../../public/php/update.php?emp_id=<?php echo $del_id?>" method="post">
                                <div class="form-group ext_form">
                                    <div class="col-xs-10">
                                        <div class="input_box" >
                                        <label style="color:white;">Current Job Role :</label>
                                        <input type="text" class="form-control modal_input" name="jobrole"
                                               id="currentjob" align="center"
                                               style="margin-left: 125px;width: 276px;margin-top: -25;"
                                               value="<?php echo $job ?>">
                                        </div>
                                        <label style="color:white;margin-top: 20px;">New Job Role :</label>
                                        <select class="form-control modal_input " name="size" align="center"
                                                style="margin-left: 125px;width: 276px;margin-top: -25px;">
                                            <option value="">Role</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="General User">General User</option>
                                            <option value="Operational User">Operational User</option>
                                            <option value="Executive User">Executive User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="help-block with-errors"></div>
                                <div class="form-group">
                                    <div class="col-xs-offset-2 col-xs-10 move" style="margin-left: 260px;margin-top: 25px;">
                                        <button type="Submit" class="btn modal_btn" id="submit" value="Submit">
                                            Save
                                        </button>
                                        <?php $_SESSION['varname'] = $del_id; ?>
                                        <button type="button" class="btn modal_btn" data-dismiss="modal"
                                                style="margin-left: 10px;">Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--edit_form-->

        <?php
        }
    }
}
?>

<div>
    <aside class="left-side">
        <?php include('side.php');?>
    </aside>
    <aside class="right-side rgt">
        <!-- Page Content -->
        <div class="col-lg-12">

            <div id="layout">

                <div id="recent">
                    <H2 style="color: #000000; float: left">User Accounts</H2>
                </div>

                <div id="content" scrolling="yes"><!--table with users-->

                    <form name="table" method="post" onsubmit="return validate();">
                        <table class="table table_striped" id="table" action="load_table.php">

                            <div>
                                <div style="float: right;">
                                    <button class="div_button" data-toggle="modal" type="submit" id="update" name="update" onclick="validate()"><img src="../../../public/images/refresh.png" class="div_button_img">Update</button>
                                </div>
                                <div style="float: right;">
                                    <button class="div_button" data-toggle="modal" type="submit" id="delete" name="delete" onclick="validate()"><img src="../../../public/images/remove.png" class="div_button_img">Remove</button>
                                </div>
                                <div style="float: right;">
                                    <button class="div_button" data-toggle="modal" data-target="#myModal" type="button" id="add_new" name="add_new"><img src="../../../public/images/add.png" class="div_button_img">New User</button>
                                </div>
                            </div>

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Job Role</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                session_start();
                                while( $row = mysql_fetch_assoc( $result ) ){
                                $id= $row['E_nic'];
                                $_SESSION['sessionVar'] = $id;
                                $name=$row['E_name'];
                                $email=$row['E_email'];
                                $job=$row['E_job_role'];
                                echo
                                    "<tr>
                                        <td>{$row['E_nic']}</td>
                                        <td>{$row['E_name']}</td>
                                        <td>{$row['E_email']}</td>
                                        <td>{$row['E_job_role']}</td>
                                        <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' data-toggle='modal' data-target='#myModal2' value='$id'>"."</td>
		                            </tr>\n";
                                }
                                ?>

                            </tbody>
                        </table>
                    </form>
                </div>

                <div class="modal fade" id="myModal" role="dialog" action="../../../public/php/addnew.php" >
                    <div class="modal-dialog">

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 model_addnew " style="width: 510px;margin-top: 0px;margin-left:150;" >
                                <h4 style="color:white;text-align:left;">ADD USER</h4>
                                <form class="form-horizontal" action="../../../public/php/addnew.php"  onSubmit="return formValidation();" data-toggle="validator" method="post">
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputName" class="control-label" style="color:white;">Name :</label>
                                            <input type="name" name="formName" class="form-control modal_input" id="inputName" align="center"  style="margin-left: 120px;" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputEmail" class="control-label" style="color:white;">Email :</label>
                                            <input type="email" name="formEmail" class="form-control modal_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="inputEmail" style="margin-left: 120px;" align="center" placeholder="Email" data-error="Brush, that email address is invalid" required>
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputnic" class="control-label" style="color:white;">NIC :</label>
                                            <input type="nic" name="formNIC" class="form-control modal_input" id="inputnic" align="center" style="margin-left: 120px;" placeholder="NIC number" pattern="[0-9A-Za-z]{10}" title="Format: XXXXXXXXXV" required maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputmobile" class="control-label" style="color:white;">Contact Number:</label>
                                            <input type="Mobile" class="form-control modal_input" name="formMobile" id="inputmobile" align="center" style="margin-left: 120px;" placeholder="Mobile number" pattern="^\d{10}$" title="Required 10 numbers" required maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputAddress" class="control-label" style="color:white;">Address :</label>
                                            <input type="address" class="form-control modal_input" name="formAddress" id="inputAddress" align="center" style="margin-left: 120px;" placeholder="Adress" required>
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label style="color:white;">Job Role :</label>
                                            <select class="form-control modal_input " name="size" align="center" style="margin-left: 120px;">
                                                <option value="Administrator">Administrator</option>
                                                <option value="General User">General User</option>
                                                <option value="Operational User">Operational User</option>
                                                <option value="Executive User">Executive User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="fileupload fileupload-new" data-provides="fileupload" style="margin-left: 40px;">
                                        <div class="fileupload-preview thumbnail" style="width: 100px; height: 100px;margin-left: 80px;margin-top: 115px;">
                                            <div style="margin-left: 100px;">
                                                <span class="fileupload-exists" style=" color:white;">Change</span><input type="file" /></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer" >
                                        <!--<div class="col-xs-offset-2 col-xs-10" style="margin-left: 280px;margin-top: 10px;">-->
                                        <button type="Submit" class="btn modal_btn" id="submit"  value="Submit" >Add</button>
                                        <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;margin-top: -11;">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>

</body>
</html>