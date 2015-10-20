<html><body>

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
    <script src="../../../public/javascripts/bootstrap.js"></script>
    <script src="../../../public/javascripts/jquery.min.js"></script>
    <script src="../../../public/javascripts/popup.min.js"></script>
</head>


<div >
    <aside class="left-side">
        <?php include('side.php');?>
    </aside>
    <aside class="right-side rgt">
        <!-- Page Content -->
        <div class="col-lg-12">
            <div id="layout">

                <div>
                    <div id="recent">

                        <h2 style="color:#000000; float:left;">USER ACCOUNTS</h2>

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
                                    <div class="col-md-8 col-md-offset-2 model_addnew " style="width: 510px;margin-top: 0px;margin-left:150;" >
                                        <h4 style="color:white;text-align:left;">ADD USER</h4>
                                        <form class="form-horizontal" action=""  method="post">
                                            <div class="form-group ext_form">
                                                <div class="col-xs-10">
                                                    <label style="color:white;">Name :</label>
                                                    <input type="name" name="formName" class="form-control modal_input" align="center" style="margin-left: 120px;" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group ext_form">
                                                <div class="col-xs-10">
                                                    <label style="color:white;">Email :</label>
                                                    <input type="email" name="formEmail" class="form-control modal_input" align="center" style="margin-left: 120px;" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group ext_form">
                                                <div class="col-xs-10">
                                                    <label style="color:white;">NIC :</label>
                                                    <input type="nic" name="formNIC" class="form-control modal_input" align="center" style="margin-left: 120px;" placeholder="NIC number">
                                                </div>
                                            </div>
                                            <div class="form-group ext_form">
                                                <div class="col-xs-10">
                                                    <label style="color:white;">Contact Number:</label>
                                                    <input type="Mobile" class="form-control modal_input" name="formMobile" align="center" style="margin-left: 120px;" placeholder="Mobile number">
                                                </div>
                                            </div>
                                            <div class="form-group ext_form">
                                                <div class="col-xs-10">
                                                    <label style="color:white;">Address :</label>
                                                    <input type="address" class="form-control modal_input" name="formAddress" align="center" style="margin-left: 120px;" placeholder="Adress">
                                                </div>
                                            </div>
                                            <div class="form-group ext_form">
                                                <div class="col-xs-10">
                                                    <label style="color:white;">Job Role :</label>
                                                    <select class="form-control modal_input " name="size" align="center" style="margin-left: 120px;">
                                                        <option value="">Role</option>
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
                                            <div class="form-group">
                                                <div class="col-xs-offset-2 col-xs-10" style="margin-left: 280px;margin-top: 10px;">

                                                    <button type="Submit" class="btn modal_btn" data-toggle="modal" data-target="#myModal1" name="formSubmit"  value="Submit">Add</button>
                                                    <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;;">Cancel</button>
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
                    $result = mysql_query("SELECT E_nic, E_name, E_email, E_job_role FROM employee ");
                    ?>

                    <table class="table table-striped" >
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
              <td>{$row['E_email']}</td>
              <td>{$row['E_job_role']}</td>
              <td></td>
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
        <!-- /page-content-->
    </aside>
</div>


</body>
</html>