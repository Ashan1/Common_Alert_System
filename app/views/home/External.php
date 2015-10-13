<?php include('head.php');?>

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

<div >
    <aside class="left-side">
        <?php include('../app/views/home/side.php');?>
    </aside>
    <aside class="right-side rgt">
    <!-- Page Content -->
                <div class="col-lg-12">
					<div id="layout">
	
						<div style="background-color:green;">
							<div id="recent">
	 
								<h2 style="float:left;">EXTERNAL AUTHORITY DETAILS</h2>
		
									<div style="float:right;">
										<button class="div_button" data-toggle="modal"  type="button"  ><img src="../../../public/images/refresh.png" class="div_button_img">Update</button>
									</div>
									<div style="float:right;">
										<button class="div_button" data-toggle="modal" type="button" ><img src="../../../public/images/delete.png" class="div_button_img">Remove</button>
									</div>
									<div style="float:right;">
										<button class="div_button" data-toggle="modal" data-target="#myModal" type="button" ><img src="../../../public/images/building.png" class="div_button_img">Add New</button>
									</div>
									<div class="modal fade" id="myModal" role="dialog" action="../../../public/php/addnew.php" style="padding-top:100px;" >
										<div class="modal-dialog" >
											<div class="row">
												<div class="col-md-8 col-md-offset-2" style="background-color:black;background: rgba(0, 0, 0, 0.6);height:310px;">
  
												<h4 style="color:white;text-align:left;padding-top: 10px;padding-bottom:10px;">ADD EXTERNAL AUTHORITY</h4>
													
													<form class="form-horizontal" action="../../../public/php/external_auth.php"  method="post">
														<div class="form-group">
															<div class="col-xs-10">
																<input type="name" name="auth_name" class="form-control" align="center"style="margin-left: 40px;"  placeholder="Name">
															</div>
														</div>
														<div class="form-group">
															<div class="col-xs-10">
																<input type="tel" name="auth_tel" class="form-control" align="center"style="margin-left: 40px;" id="inputEmail" placeholder="Telphone Number">
															</div>
														</div>
														<div class="form-group">
															<div class="col-xs-10">
																<input type="address" name="auth_address" class="form-control" align="center"style="margin-left: 40px;" placeholder="Address">
															</div>
														</div>
														<div class="form-group">
															<div class="col-xs-10">
																<input type="email" class="form-control" name="auth_email" align="center"style="margin-left: 40px;" placeholder="Email Address">
															</div>
														</div>
														<div class="form-group">
															<div class="col-xs-offset-2 col-xs-10">
																<button type="Submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" name="formSubmit" onClick="f_validateForm()" value="Submit" Style="background-color:#FF4000; fload:right;margin-left: 240px;margin-bottom:15px;">Add</button>
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
      include "php/connect.php";

      //execute the SQL query and return records
      $result = mysql_query("SELECT Auth_name, Auth_tel, Auth_address, Auth_email FROM external_authority ");
      ?>
      
		<table class="table" >
		<thead>
            <tr>
                <th>Authority-Name</th>
                <th>Authority-Telephonr No.</th>
                <th>Authority-Address</th>
                <th>Authority-Email</th>
            </tr>
        </thead>
        <tbody>	
	
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Auth_name']}</td>
              <td>{$row['Auth_tel']}</td>
              <td>{$row['Auth_address']}</td>
              <td>{$row['Auth_email']}</td>
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