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
                        <div class="col-lg-2">
						
						<?php
                echo "Date : " . date('Y/m/d')."<br>";
              date_default_timezone_set("Asia/colombo");
              echo "Time : " . date("h:i:sa");
            ?>
						
						</div>

                    </div>

                    <!--/Status bar-->
                    <div><!--/Content-->
						<div>
							<div class="tabbable tabs-below">
								<div class="tab-content">
									<h3>Recent Activities</h3>
								</div>
									<ul class="nav nav-tabs">
										<li><a href="#"> Summary </a></li>
										<li><a href="#"> Notifications </a></li>
										<li><a href="#"> Activities </a></li>
										<li class="active"><a href="#"> Advisor Panel </a></li>
									</ul>
							</div>
						</div>
						<div>
							  <div id="content" scrolling="yes" >
		 <?php
      include "php/connect.php";

      //execute the SQL query and return records
      $result = mysql_query("SELECT E_name, email, tel FROM employee WHERE role='Executive User'");
      ?>
      
		<table class="table" >
		<thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone </th>
            </tr>
        </thead>
        <tbody>	
	
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['E_name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['tel']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
	</div>
	
	 
	 
	</div><!--layout ends-->
						</div>
					
					</div><!--/Content ends-->

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