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
<body>
<div>
    <aside class="left-side">
        <?php include('side.php');?>
    </aside>
    <aside class="right-side">
        <div id="page-content-wrap per" class="page-content-wrapper">
            <div class="container-fluid main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div>


                            <div id="layout">

                                <div style="background-color:green;">


                                    <div id="recent">

                                        <h2 style="float:left;">USER ACCOUNTS</h2>

                                        <div style="float:right;">
                                            <button class="div_button" data-toggle="modal"  type="button"  ><img src="../../../public/images/refresh.png" class="div_button_img">Update</button>
                                        </div>

                                        <div style="float:right;">
                                            <button class="div_button" data-toggle="modal" type="button" ><img src="../../../public/images/remove.png" class="div_button_img">Remove</button>
                                        </div>

                                        <div style="float:right;">
                                            <button class="div_button" data-toggle="modal" data-target="#myModal" type="button" ><img src="../../../public/images/Add.png" class="div_button_img">Add New</button>
                                        </div>

                                        <div class="modal fade" id="myModal" role="dialog" action="../../../public/php/addnew.php" >
                                            <div class="modal-dialog">

                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2 model_addnew" >
                                                        <h4 style="color:white;text-align:left;">ADD USER</h4>
                                                        <form class="form-horizontal" action="../../../public/php/addnew.php"  method="post">
                                                            <div class="form-group">
                                                                <div class="col-xs-10">
                                                                    <input type="name" name="formName" class="form-control modal_input" align="center" placeholder="Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-10">
                                                                    <input type="email" name="formEmail" class="form-control modal_input" align="center" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-10">
                                                                    <input type="nic" name="formNIC" class="form-control modal_input" align="center" placeholder="NIC number">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-10">
                                                                    <input type="Mobile" class="form-control modal_input" name="formMobile" align="center" placeholder="Mobile number">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-10">
                                                                    <input type="address" class="form-control modal_input" name="formAddress" align="center" placeholder="Adress">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-10">
                                                                    <select class="form-control modal_input " name="size" align="center" >
                                                                        <option value="">Role</option>
                                                                        <option value="Administrator">Administrator</option>
                                                                        <option value="General User">General User</option>
                                                                        <option value="Operational User">Operational User</option>
                                                                        <option value="Executive User">Executive User</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                    <div class="fileupload-preview thumbnail" style="width: 100px; height: 100px;margin-left: 40px;">
                                                                        <div style="margin-left: 100px;">
                                                                            <span class="fileupload-exists" style=" color:white;">Change</span><input type="file" /></span>
                                                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-xs-offset-2 col-xs-10">
                                                                        <button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal1" name="formSubmit" onClick="f_validateForm()" value="Submit">Add</button>
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
                                include "connect.php";

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
              <td>{$row['role']}</td>
			  </tr>\n";
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
    </aside>


    <!-- Page Content -->

    <!-- /page-content-->

</div>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



</body>
