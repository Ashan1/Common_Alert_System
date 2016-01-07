<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
</head>
<script type="text/javascript">
    window.onload = loadTabContent('../app/controller/tab.php?id=1');
</script>
<body>

<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">

            <?php
            include "../../../public/php/connect.php";
            $sql = mysql_query("SELECT * FROM employee where E_nic='333333333v'");

            while($record=mysql_fetch_array($sql)){
                ?>

                <!-- Page Content -->
                <div id="recent">
                    <div class="row">
                    <h2 style="float:left;color:black;">My Account</h2>
                    <br><hr style="margin-top: 50px;colour:black; width:100%; height:5px;">
                    </div>
                </div>

                <div class="page page-profile">
                <div class="row">

                <div class="col-md-6" style="top: 25px;">
                <div class="panel panel-profile">
                <div class="panel-heading bg-primary clearfix" style="background-color: #00080C;">
                    <a href="" class="pull-left profile">
                        <img alt="" src="../../../public/images/pro-pic.png" class="img-circle img80_80">
                    </a>
                    <h3 name="ID" style="margin-right: 175px;"><?php echo $record[E_name]; ?></h3>
                    <p><?php echo $record[E_job_role]; ?></p>
                </div>
                <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal1" >Edit</a></span>
                    <span class="icon glyphicon glyphicon-user"></span>
                    &nbsp;&nbsp;
                    Username
                </li>

                <!--edit_form-->
                <div class="modal fade " id="myModal1" data-backdrop="static" role="dialog" action="../../../public/php/update_myaccount.php" >
                    <div class="modal-dialog">
                        <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                            <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 250px;" >
                                <h4 style="color:white;text-align:left;">CHANGE USERNAME</h4>
                                <p style="color:white;">This is an identification used by a you to access the CAS service.</p>
                                <form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputUserame" class="control-label" style="color:white;">Username :</label>
                                            <input type="text" name="up_userame" class="form-control modal_input" align="center" style="width:276px;margin-top:-25px;margin-left:90px;" id="inputUsername" required value=<?php echo $record[E_username];?> >
                                        </div>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10 move" style="margin-left:175px;">
                                            <button type="Submit" class="btn modal_btn" id="submit"  value="Submit">Save</button>
                                            <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--edit_form-->

                <li class="list-group-item">
                    <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal2">Edit</a></span>
                    <span class="icon glyphicon glyphicon-flag"></span>
                    &nbsp;&nbsp;
                    Password
                </li>
                <!--edit_form-->
                <div class="modal fade" id="myModal2" data-backdrop="static" role="dialog" action="" >
                    <div class="modal-dialog">
                        <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                            <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 420px; height: 350px;" >
                                <h4 style="color:white;text-align:left;">CHANGE PASSWORD</h4>
                                <p style="color:white;">This is a secret word or some unique phase that must be used to gain admission to access the CAS service. </p>
                                <form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputOpass" class="control-label" style="color:white;">Current Password :</label>
                                            <input type="name" name="currentpassword" class="form-control modal_input" align="center"  placeholder="Current Password" style="width: 250px;margin-top: -25px;margin-left: 137px;" id="inputOpass" required>
                                            <?php
                                            $dbpassword=$record[E_password];;
                                            if ($_POST['currentpassword']== $dbpassword)
                                            {
                                                echo("Oops! Password did not match! Try again. ");
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputNewpass" class="control-label" style="color:white;">New Password :</label>
                                            <input type="password" name="formName" class="form-control modal_input" align="center" placeholder="New Password" style="width: 250px;margin-top: -25px;margin-left: 137px;" id="inputNewpass" data-minlength="10" required data-error="Minimum of 6 characters">
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputSavepass" class="control-label" style="color:white;">Re-enter Password:</label>
                                            <input type="password" name="reenterpassword" class="form-control modal_input" align="center" placeholder="Re-enter New Password" style="width: 250px;margin-top: -25px;margin-left: 137px;" id="inputSavepass" data-minlength="10" required>
                                        </div>
                                    </div>
                                    <div class="form-group ext_form">
                                        <div class="col-xs-offset-2 col-xs-10 move" style="margin-left: 195px;">
                                            <button type="Submit" class="btn modal_btn" id="submit"  value="Submit">Save</button>
                                            <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--edit_form-->

                <li class="list-group-item">
                    <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal3">Edit</a></span>
                    <span class="icon glyphicon glyphicon-envelope"></span>
                    &nbsp;&nbsp;
                    E-mail
                </li>

                <!--edit_form-->
                <div class="modal fade" id="myModal3" data-backdrop="static" role="dialog" action="" >
                    <div class="modal-dialog">
                        <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                            <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 250px;" >
                                <h4 style="color:white;text-align:left;">CHANGE EMAIL</h4>
                                <p style="color:white;">This will be the email which you gain updates and special news about CAS.</p>
                                <form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputEmail" class="control-label" style="color:white;">Email :</label>
                                            <input type="email" name="email" class="form-control modal_input" align="center" style="width:276px;margin-top:-25px;margin-left:90px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="inputEmail" data-error="Brush, that email address is invalid" required value=<?php echo $record[E_email];?> >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10 move" style="margin-left:175px;">
                                            <button type="Submit" class="btn modal_btn" id="submit"  value="Submit">Save</button>
                                            <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--edit_form-->

                <li class="list-group-item">
                    <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal4" >Edit</a></span>
                    <span class="icon glyphicon glyphicon-home"></span>
                    &nbsp;&nbsp;
                    Address
                </li>

                <!--edit_form-->
                <div class="modal fade" id="myModal4" data-backdrop="static" role="dialog" action="" >
                    <div class="modal-dialog">
                        <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                            <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 225px;" >
                                <h4 style="color:white;text-align:left;">CHANGE ADDRESS</h4>
                                <p style="color:white;">Add your current address for future use.</p>
                                <form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputAddress" class="control-label" style="color:white;">Address :</label>
                                            <input type="name" name="up_address" class="form-control modal_input" align="center" style="width:276px;margin-top:-25px;margin-left:90px;" id="inputAddress" required value=<?php echo $record[E_address];?> >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10 move" style="margin-left:175px;">
                                            <button type="Submit" class="btn modal_btn" id="submit"  value="Submit">Save</button>
                                            <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--edit_form-->

                <li class="list-group-item">
                    <span class="badge badge-warning" ><a href="#" data-toggle="modal" data-target="#myModal5">Edit</a></span>
                    <span class="icon glyphicon glyphicon-earphone"></span>
                    &nbsp;&nbsp;
                    Contact Number
                </li>

                <!--edit_form-->
                <div class="modal fade" id="myModal5" data-backdrop="static" role="dialog" action="" >
                    <div class="modal-dialog">
                        <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                            <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 250px;" >
                                <h4 style="color:white;text-align:left;">CHANGE CONTACT NUMBER</h4>
                                <p style="color:white;">Add your current contact number to contact you in agent matter.</p>
                                <form class="form-horizontal" action="../../../public/php/update_myaccount.php"  method="post">
                                    <div class="form-group ext_form">
                                        <div class="col-xs-10">
                                            <label for="inputmobile" class="control-label" style="color:white;">Contact No. :</label>
                                            <input type="name" name="up_tel" class="form-control modal_input" align="center" style="width:276px;margin-top:-25px;margin-left:90px;" id="inputmobile" pattern="^\d{10}$" title="Required 10 numbers" required maxlength="10" value=<?php echo $record['E_tel']; ?> >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-offset-2 col-xs-10 move" style="margin-left:175px;">
                                            <button type="Submit" class="btn modal_btn" id="submit"  value="Submit">Save</button>
                                            <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--edit_form-->

                <li class="list-group-item">
                    <span class="badge badge-warning"><a href="#" data-toggle="modal" data-target="#myModal6">Edit</a></span>
                    <span class="icon glyphicon glyphicon-user"></span>
                    &nbsp;&nbsp;
                    Change Profile Picture
                </li>

                <!--edit_form-->
                <div class="modal fade" id="myModal6" data-backdrop="static" role="dialog" action="" >
                    <div class="modal-dialog">
                        <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                            <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 250px;" >
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
                                    <div class="form-group ext_form">
                                        <div class="col-xs-offset-2 col-xs-10 move" style="margin-left:175px;margin-top: -55;">
                                            <button type="Submit" class="btn modal_btn" id="submit"  value="Submit">Save</button>
                                            <button type="button" class="btn modal_btn" data-dismiss="modal" style="margin-left: 10px;">Cancel</button>
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

                <div class="row">
                <div class="col-md-6" style="top: 25px;">

                    <div class="panel panel-default">
                        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Profile Infomation</strong></div>
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
                                            <?php echo $record[E_email]; ?>
                                        </li>
                                        <li>
                                            <span class="icon glyphicon glyphicon-home"></span>
                                            <label>Address</label>
                                            <?php echo $record[E_address]; ?>
                                        </li>
                                        <li>
                                            <span class="icon glyphicon glyphicon-earphone"></span>
                                            <label>Contact Number</label>
                                            <?php echo $record[E_tel]; ?>
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

                    <div style="height:100px; padding: 10px 15px;border-bottom: 1px solid transparent;border-top-right-radius: 1px;border-top-left-radius: 1px;"><h2>Hiiiiiiiiii</h2>
                    </div>
                </div>

                </div>
                </div>

            <?php } ?>
                </div>
            <!-- /page-content-->













            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>