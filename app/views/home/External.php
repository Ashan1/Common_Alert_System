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

    <script>
        $(document).ready(function(){
            $("#up_date").click(function(){
                $("#table").each(function(){$(".box").toggle()});

            });
            $("#remove").click(function(){
                $("#table").each(function(){$(".box").toggle()});

            });
            $("#table").each(function(){$(".box").hide()});
            ;
        });

        function ConfirmDelete()
        {
            if (confirm("Delete Account?"))
                location.href='linktoaccountdeletion';
        }</script>

</head>

    <div >
        <aside class="left-side">
            <?php include('side.php');?>
        </aside>
        <aside class="right-side rgt">
            <!-- Page Content -->

                <div class="col-lg-12">
					<div id="layout">

						<div style="background-color:green;">
							<div id="recent">

								<h2 style="color:#000000; float:left;">EXTERNAL AUTHORITY DETAILS</h2>

									<div style="float:right;">
										<button class="div_button" data-toggle="modal"  type="button"  name="update" id="up_date"><img src="../../../public/images/refresh.png" class="div_button_img">Update</button>
									</div>

                                <div style="float:right;">
                                    <button class="div_button" data-toggle="modal" data-target="#myModale" type="button" ><img src="../../../public/images/Add.png" class="div_button_img">Add New</button>
                                </div>

                                <div class="modal fade" id="myModale" role="dialog" action="../../../public/php/addnew.php" >
                                    <div class="modal-dialog">
                                    <div class="row" style="margin-top: 20px;">
												<div class="col-md-8 col-md-offset-2" style="background-color:black;background: rgba(0, 0, 0, 0.6);height: 400px;width: 530px;">

												<h4 style="color:white;text-align:left;padding-top: 10px;padding-bottom:10px;">ADD EXTERNAL AUTHORITY</h4>

													<form class="form-horizontal" action="../../../public/php/external_auth.php"  method="post">
                                                        <div class="form-group ext_form">
															<div class="col-xs-10">
                                                                <label for="inputName" class="control-label" style="color:white;">Department Name:</label>
                                                                <input type="name" name="auth_name" class="form-control ext_input" id="inputName" align="center"style="margin-left: 150px;"  placeholder="Name" required>
															</div>
														</div>
                                                        <div class="form-group ext_form">
															<div class="col-xs-10">
                                                                <label for="inputmobile" class="control-label" style="color:white;">Department Number:</label>
                                                                <input type="tel" name="auth_tel" class="form-control ext_input" align="center" style="margin-left: 150px;" id="inputEmail" placeholder="Telphone Number" pattern="^\d{10}$" title="Required 10 numbers" required maxlength="10">
															</div>
														</div>
                                                        <div class="form-group ext_form">
															<div class="col-xs-10">
                                                                <label for="inputAddress" class="control-label" style="color:white;">Department Address:</label>
                                                                <input type="address" name="auth_address" class="form-control ext_input" id="inputAddress" align="center"style="margin-left: 150px;" placeholder="Address" required>
															</div>
														</div>
                                                        <div class="form-group ext_form">
															<div class="col-xs-10">
                                                                <label for="inputEmail" class="control-label" style="color:white;">Department Email:</label>
                                                                <input type="email" class="form-control ext_input" name="auth_email" align="center"style="margin-left: 150px;" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="inputEmail"  data-error="Brush, that email address is invalid" required>>
															</div>
														</div>
														<div class="form-group ext_form">
															<div class="col-xs-offset-2 col-xs-10"style="margin-left: 310px;">
                                                                <button type="Submit" class="btn modal_btn" id="submit"  value="Submit">Add</button>
                                                                <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;">Cancel</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>

                            </div> <!--recent ends-->
						</div>

	<div id="content" scrolling="yes">
		 <?php
      include "../../../public/php/connect.php";

      //execute the SQL query and return records
      $result = mysql_query("SELECT Auth_name, Auth_tel, Auth_address, Auth_email FROM external_authority ");
      ?>

		<table class="table" id="table">
		<thead>
            <tr>
                <th>Authority-Name</th>
                <th>Authority-Telephone No.</th>
                <th>Authority-Address</th>
                <th>Authority-Email</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
             </tr>
        </thead>
        <tbody>

        <?php
        session_start();
          while( $row = mysql_fetch_assoc( $result ) ){
              $id= $row['Auth_tel'];
              $_SESSION['sessionVar'] = $id;
              $name = $row['Auth_name'];
              $tel=$row['Auth_tel'];
              $add=$row['Auth_address'];
              $email=$row['Auth_email'];
            echo
            "<tr>
              <td>{$row['Auth_name']}</td>
              <td>{$row['Auth_tel']}</td>
              <td>{$row['Auth_address']}</td>
              <td>{$row['Auth_email']}</td>
             <td>"."<input name='checkbox' type='checkbox' id='checkbox[]' class='box' onclick='toggle(this)' id='check'
                                       value='$id' data-toggle='modal' data-target='#myModal1'>

                                       <!--edit_form-->
        <div class='modal fade' id='myModal1' role='dialog' action='delete_update.php' >
                                    <div class='modal-dialog'>
                                    <div class='row' style='margin-top: 20px;'>
												<div class='col-md-8 col-md-offset-2' style='background-color:black;background: rgba(0, 0, 0, 0.6);height: 430px;width: 560px;'>
                 <h4 style='color:white;text-align:left;'>UPDATE DETAILS</h4>
                        <p style='color:white;'>This is an identification used by a you to access the CAS service.</p>
                        <form class='form-horizontal' action='delete_update.php'  method='post'>
                            <div class='form-group ext_form'>
															<div class='col-xs-10'>
                                                                <label for='inputName' class='control-label' style='color:white;'>Department Name:</label>
                                                                <input type='name' name='auth_name' class='form-control ext_input' id='inputName' align='center' style='margin-left: 175px;'  value=$name required>
															</div>
														</div>
                                                        <div class='form-group ext_form'>
															<div class='col-xs-10'>
                                                                <label for='inputmobile' class='control-label' style='color:white;'>Department Number:</label>
                                                                <input type='tel' name='auth_tel' class='form-control ext_input' align='center' style='margin-left: 175px;' id='inputEmail' value=$tel >
															</div>
														</div>
                                                        <div class='form-group ext_form'>
															<div class='col-xs-10'>
                                                                <label for='inputAddress' class='control-label' style='color:white;'>Department Address:</label>
                                                                <input type='address' name='auth_address' class='form-control ext_input' id='inputAddress' align='center' style='margin-left: 175px;' value=$add required>
															</div>
														</div>
                                                        <div class='form-group ext_form'>
															<div class='col-xs-10'>
                                                                <label for='inputEmail' class='control-label' style='color:white;'>Department Email:</label>
                                                                <input type='email' class='form-control ext_input' name='auth_email' align='center' style='margin-left: 175px;' value=$email pattern='[a-z0-9._%+-]+@[a-z0-9.-]+[a-z]{2,3}$' id='inputEmail'  data-error='Brush, that email address is invalid' required>>
															</div>
														</div>
														<div class='form-group ext_form'>
															<div class='col-xs-offset-2 col-xs-10' style='margin-left: 310px;'>
                                                                <button type='Submit' class='btn modal_btn' id='submit'  name='update' id='update' value='Submit'>Update</button>
                                                                 <button type='button' class='btn modal_btn' data-dismiss='modal' style='margin-left: 10px;'>Cancel</button>
															</div>
														</div>

                        </form>
                    </div>
                </div>
            </div>
        </div><!--edit_form-->

                                       "."</td>
		    </tr>\n";
          }
        ?>

        </tbody>
    </table>
     <?php mysql_close($connector); ?>
	</div>



					</div><!--layout ends-->
				</div>
	</aside>
			<!--<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">|||</a>-->
</div><!-- /page-content-->


</body>
</html>