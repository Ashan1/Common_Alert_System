<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/bootstrap.css">
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/bootstrap-theme.css">
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/menu.css">
	 <link rel="stylesheet" media="screen" href="../../../public/stylesheets/addusercss.css">
	  <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/stylesheets/new.css" rel="stylesheet">
	<link href="../../../public/stylesheets/myaccount.css" rel="stylesheet">
	<link href="../../../public/stylesheets/myaccountmain.css" rel="stylesheet">

    <script src="../../../public/javascripts/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="../../../public/javascripts/bootstrap.js" type="text/javascript"></script>
<script src="../../../public/javascripts/jquery.min.js"></script>
  <script src="../../../public/javascripts/popup.min.js"></script>
	
   
</head>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">

        <div class="logo">
            <img src="../../../public/images/logo.png">
        </div>
        <div class="profile">
           <div><img src="../../../public/images/pro-pic.png"></div>
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
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Disasters</a>
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
	<div id="page-content-wrapper" class="page-content-wrapper">
        <div class="container-fluid main-content">
            <div class="row">
                <div class="col-lg-12">
                    <!--status bar-->

                    <div class="status-bar row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 menu-icon">
                            <a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
                        </div>
                        <div class="col-lg-7 search">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <input type="text" value="Search Disaster"/>
                        </div>
						
						<div class="col-lg-1 bell"> <span >
						<div class="top-nav">
        <ul class="nav-left list-unstyled">
		
            <li class="dropdown" style="
    height: 60px;
    width: 80px;
">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class=" badge mails"><img class="request_img" src="../../../public/images/request.png"></i>
                    <span class="badge badge-success" style="margin-left: -28;">2</span>
                </a>
                <div class="dropdown-menu with-arrow panel panel-default">
                    <div class="panel-heading">
                        You have 2 messages.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-info"><i class="fa fa-comment-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Jane sent you a message</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li></ul>
						
                    <div class="panel-footer">
                        <a href="javascript:;">Show all messages.</a>
                    </div>
                </div>
            </li>
            
        </ul>       
    </div>
						</span> </div>
						
						
						
                        <div class="col-lg-1 bell"> <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> </div>
                        <div class="col-lg-2">
						
						<?php
                echo "Date : " . date('Y/m/d')."<br>";
              date_default_timezone_set("Asia/colombo");
              echo "Time : " . date("h:i:sa");
            ?>
						
						
						</div>

                    </div>

                    <!--/Status bar-->

<?php
	include "../../../public/php/connect.php";
	$sql = mysql_query("SELECT * FROM employee");
	
	while($record=mysql_fetch_array($sql)){
?>
					
					
  <!-- Page Content -->
	<div id="recent">
		<h2 style="float:left;color:black;">My Account</h2>
		<br><hr style="margin-top: 50px;colour:black; width:100%; height:5px;">
	</div>
  
	<div class="page page-profile">

    <div class="row">
        <div class="col-md-6" style="top: 25px;">

            <div class="panel panel-profile">
                <div class="panel-heading bg-primary clearfix"     style="background-color: #00080C;">
                    <a href="" class="pull-left profile">
                        <img alt="" src="../../../public/images/g1.jpg" class="img-circle img80_80">
                    </a>
                    <h3 name="ID"><?php echo $record[E_name]; ?></h3>
                    <p><?php echo $record[role]; ?></p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal1" >Edit</a></span>
						<i class="fa fa-envelope-o"></i>
                       Username
                    </li>
					
			<!--edit_form-->		
			<div class="modal fade " id="myModal1" data-backdrop="static" role="dialog" action="" >
			<div class="modal-dialog">	
			<div class="row" style=" margin-top: 150px;margin-left: 100px;">
				<div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 200px;" >
				<h4 style="color:white;text-align:left;">CHANGE USERNAME</h4>
				<p style="color:white;">This is an identification used by a you to access the CAS service.</p>
				<form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
					<div class="form-group">
						<div class="col-xs-10">
							<label style="color:white;">Username:</label><input type="text" name="up_userame" class="form-control modal_input" align="center" value=<?php echo $record[username]; ?>  style="width: 276px;margin-top: -25px;">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10 move" style="margin-left:225px;">
							<button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal1" name="formSubmit" onClick="f_validateForm()" value="Submit">Save</button>
						
							<button type="button" class="btn modal_btn" data-dismiss="modal">Cancel</button>
						</div>		
					</div>
				</form>
				</div>
			</div>
			</div>
			</div><!--edit_form-->
						
					<li class="list-group-item">
                        <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal2">Edit</a></span>
                        <i class="fa fa-comments-o"></i>
                        Password
                    </li>
					
					<!--edit_form-->		
			<div class="modal fade" id="myModal2" data-backdrop="static" role="dialog" action="" >
			<div class="modal-dialog">	
			<div class="row" style=" margin-top: 150px;margin-left: 100px;">
				<div class="col-md-8 col-md-offset-2 model_addnew" style="width: 420px; height: 300px;" >
				<h4 style="color:white;text-align:left;">CHANGE PASSWORD</h4>
				<p style="color:white;">This is a secret word or some unique phase that must be used to gain admission to access the CAS service. </p>
				<form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
					<div class="form-group">
						<div class="col-xs-10">
							<label style="color:white;">Current Password:</label><input type="name" name="formName" class="form-control modal_input" align="center" placeholder="Current Password" style="width: 250px;margin-top: -25px;margin-left: 133px;">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-10">
							<label style="color:white;">New Password:</label><input type="name" name="formName" class="form-control modal_input" align="center" placeholder="New Password" style="width: 250px;margin-top: -25px;margin-left: 133px;">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-10">
							<label style="color:white;">Re-enter Password:</label><input type="name" name="reenterpassword" class="form-control modal_input" align="center" placeholder="Re-enter New Password" style="width: 250px;margin-top: -25px;margin-left: 133px;">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10 move" style="margin-left:250px;">
							<button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal2" name="formSubmit" onClick="f_validateForm()" value="Submit">Save</button>
						
							<button type="button" class="btn modal_btn" data-dismiss="modal">Cancel</button>
						</div>		
					</div>
				</form>
				</div>
			</div>
			</div>
			</div><!--edit_form-->
					
                    <li class="list-group-item">
                        <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal3">Edit</a></span>
                        <i class="fa fa-heart-o"></i>
                        E-mail
                    </li>
					
					<!--edit_form-->		
			<div class="modal fade" id="myModal3" data-backdrop="static" role="dialog" action="" >
			<div class="modal-dialog">	
			<div class="row" style=" margin-top: 150px;margin-left: 100px;">
				<div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 200px;" >
				<h4 style="color:white;text-align:left;">CHANGE EMAIL</h4>
				<p style="color:white;">This will be the email which you gain updates and special news about CAS.</p>
				<form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
					<div class="form-group">
						<div class="col-xs-10">
							<label style="color:white;">Email:</label><input type="name" name="up_email" class="form-control modal_input" align="center" value=<?php echo $record[email]; ?> style="width: 276px;margin-top: -25px;">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10 move" style="margin-left:225px;">
							<button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal3" name="formSubmit" onClick="f_validateForm()" value="Submit">Save</button>
						
							<button type="button" class="btn modal_btn" data-dismiss="modal">Cancel</button>
						</div>		
					</div>
				</form>
				</div>
			</div>
			</div>
			</div><!--edit_form-->
					
                    <li class="list-group-item">
                        <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal4" >Edit</a></span>
                        <i class="fa fa-folder-open-o"></i>
                        Address
                    </li>
					
					<!--edit_form-->		
			<div class="modal fade" id="myModal4" data-backdrop="static" role="dialog" action="" >
			<div class="modal-dialog">	
			<div class="row" style=" margin-top: 150px;margin-left: 100px;">
				<div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 200px;" >
				<h4 style="color:white;text-align:left;">CHANGE ADDRESS</h4>
				<p style="color:white;">Add your current address for future use.</p>
				<form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
					<div class="form-group">
						<div class="col-xs-10">
							<label style="color:white;">Address:</label><input type="name" name="up_address" class="form-control modal_input" align="center" value=<?php echo $record[address]; ?> style="width: 276px;margin-top: -25px;">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10 move" style="margin-left:225px;">
							<button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal1" name="formSubmit" onClick="f_validateForm()" value="Submit">Save</button>
						
							<button type="button" class="btn modal_btn" data-dismiss="modal">Cancel</button>
						</div>		
					</div>
				</form>
				</div>
			</div>
			</div>
			</div><!--edit_form-->
					
					<li class="list-group-item">
                        <span class="badge badge-warning" ><a href="#" data-toggle="modal" data-target="#myModal5">Edit</a></span>
                        <i class="fa fa-folder-open-o"></i>
                        Contact Number
                    </li>
					
					<!--edit_form-->		
			<div class="modal fade" id="myModal5" data-backdrop="static" role="dialog" action="" >
			<div class="modal-dialog">	
			<div class="row" style=" margin-top: 150px;margin-left: 100px;">
				<div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 200px;" >
				<h4 style="color:white;text-align:left;">CHANGE CONTACT NUMBER</h4>
				<p style="color:white;">Add your current contact number to contact you in agent matter.</p>
				<form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
					<div class="form-group">
						<div class="col-xs-10">
							<label style="color:white;">Contact No.:</label><input type="name" name="up_tel" class="form-control modal_input" align="center" value=<?php echo $record[tel]; ?> style="width: 276px;margin-top: -25px;">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10 move" style="margin-left:225px;">
							<button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal1" name="formSubmit" onClick="f_validateForm()" value="Submit">Save</button>
						
							<button type="button" class="btn modal_btn" data-dismiss="modal">Cancel</button>
						</div>		
					</div>
				</form>
				</div>
			</div>
			</div>
			</div><!--edit_form-->
					
					<li class="list-group-item">
                        <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal6">Edit</a></span>
                        <i class="fa fa-folder-open-o"></i>
                        Change Profile Picture
                    </li>
					
					<!--edit_form-->		
			<div class="modal fade" id="myModal6" data-backdrop="static" role="dialog" action="" >
			<div class="modal-dialog">	
			<div class="row" style=" margin-top: 150px;margin-left: 100px;">
				<div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 200px;" >
				<h4 style="color:white;text-align:left;">CHANGE ACOOUNT IMAGE</h4>
				<p style="color:white;">Add your Image to identify</p>
				<form class="form-horizontal" action=""  method="post">
					
					<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-preview thumbnail" style="width: 100px; height: 100px;margin-left: 40px;">
							<div style="margin-left: 100px;">
								<span class="fileupload-exists" style=" color:white;">Change</span><input type="file" /></span>
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
							</div>
							</div>
						</div>
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10 move" style="margin-left:225px;margin-top: -55;">
							<button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal1" name="formSubmit" onClick="f_validateForm()" value="Submit">Save</button>
						
							<button type="button" class="btn modal_btn" data-dismiss="modal">Cancel</button>
						</div>		
					</div>
				</form>
				</div>
			</div>
			</div>
			</div><!--edit_form-->
					
                </ul>
            </div>

        
        </div>
        <div class="col-md-6" style="top: 25px;">

            <div class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Profile Info</strong></div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-body">
                            <ul class="list-unstyled list-info">
                                <li>
                                    <span class="icon glyphicon glyphicon-user"></span>
                                    <label>Name</label>
                                    <?php echo $record[E_name]; ?>
                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-envelope"></span>
                                    <label>Email</label>
                                    <?php echo $record[email]; ?>
                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-home"></span>
                                    <label>Address</label>
                                    <?php echo $record[address]; ?>
                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-earphone"></span>
                                    <label>Contact Number</label>
                                    <?php echo $record[tel]; ?>
                                </li>
                                <li>
                                    <span class="icon glyphicon glyphicon-flag"></span>
                                    <label>NIC</label>
                                    <?php echo $record[E_nic]; ?>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
				</div>
            </div>
			
					<div style="height:100px; padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;"><h2>Hiiiiiiiiii</h2></div>
        </div>
    </div>

</div>
	<?php } ?>
    <!-- /page-content-->

				</div>
            </div>
        </div>
    </div>


<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


</div>
</body>
</html>