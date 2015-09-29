<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/bootstrap.css">
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/bootstrap-theme.css">
    <link rel="stylesheet" media="screen" href="../../../public/stylesheets/menu.css">

    <script src="../../../public/javascripts/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="../../../public/javascripts/bootstrap.js" type="text/javascript"></script>
<script src="../../../public/javascripts/jquery.min.js"></script>
  <script src="../../../public/javascripts/popup.min.js"></script>
	
    <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/stylesheets/new.css" rel="stylesheet">

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
                        <div class="col-lg-2"> March 23<sup>rd</sup></div>

                    </div>

                    <!--/Status bar-->
                    <div>
					
					
					<div id="layout">
	
<div style="background-color:green;">
		  
	 
	 <div id="recent">
	 
	 <h2 style="float:left;">ADMINISTRATION PANEL</h2>
		
		<div style="float:right;"><button class="btn btn-default" data-toggle="modal" data-target="#myModal" type="button" style=" background-color:#FF4000; padding-left: 0px;padding-right: 0px;padding-top: 0px;padding-bottom: 0px; margin-left:5px;  width:130px" ><img src="../../../public/images\Add_user.png" style="width: 40px;height:40px;margin-top: 5px;">Add New</button></div>
	
		<div class="modal fade" id="myModal" role="dialog" action="../../../public/php/addnew.php" >
			<div class="modal-dialog">
				
				<div class="row">
  <div class="col-md-8 col-md-offset-2" style="background-color:black;background: rgba(0, 0, 0, 0.6);height:500px;">
  
	<h4 style="color:white;text-align:left;">ADD USER</h4>
           <form class="form-horizontal" action="../../../public/php/addnew.php"  method="post">
        <div class="form-group">
            <div class="col-xs-10">
                <input type="name" name="formName" class="form-control" align="center"style="margin-left: 40px;"  placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-10">
                <input type="email" name="formEmail" class="form-control" align="center"style="margin-left: 40px;" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-10">
                <input type="nic" name="formNIC" class="form-control" align="center"style="margin-left: 40px;" placeholder="NIC number">
            </div>
        </div>
		<div class="form-group">
            <div class="col-xs-10">
                <input type="Mobile" class="form-control" name="formMobile" align="center"style="margin-left: 40px;" placeholder="Mobile number">
            </div>
        </div>
		<div class="form-group">
            <div class="col-xs-10">
                <input type="address" class="form-control" name="formAddress" align="center"style="margin-left: 40px;" placeholder="Adress">
            </div>
        </div>
		<div class="form-group">
            <div class="col-xs-10">
                <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size" align="center"style="margin-left: 40px;margin-left: 25px;width:320px;" >
                <option value="">Role</option>
				<option value="Administrator">Administrator</option>
                <option value="General User">General User</option>
                <option value="Operational User">Operational User</option>
                <option value="Executive User">Executive User</option>
            </select>
        </div>
            </div>
        </div>
		<div>
			<div class="fileupload fileupload-new" data-provides="fileupload">
			<div class="fileupload-preview thumbnail" style="width: 100px; height: 100px;margin-left: 40px;">
			<div style="margin-left: 100px;">
			<span class="btn btn-file" name="image"><span class="fileupload-new" style="margin-right: 100px;">Select image</span>
			<span class="fileupload-exists" style="margin-right:100px;">Change</span><input type="file" /></span>
			<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
			</div>
			</div>
		</div>
		 <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="Submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" name="formSubmit" onClick="f_validateForm()" value="Submit" Style="background-color:#FF4000; fload:right;margin-left: 240px;">Add</button>
			</div>		
         </div>
    </form>
        </div>
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
      $result = mysql_query("SELECT E_nic, E_name, email, role FROM employee ");
      ?>
      
		<table class="table" >
		<thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
				<th>Action</th>
				<th>Status</th>
            </tr>
        </thead>
        <tbody>	
	
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['E_nic']}</td>
              <td>{$row['E_name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['role']}</td>"
			  ?>
			  
			   <td><input name="edit" type="submit" value="Edit"/><br><input name="remove" type="submit" value="Remove" style="margin-top: 5px;"/></td>
			  
			  <?php
            echo"</tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
	</div>
	
	 
	 
	</div><!--layout ends-->
					
					
					
					
					</div>

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