<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$user_nic = $_SESSION['user_session'];
$db = DB::getInstance();
?>

</head>
<body>

<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">


            <div id="layout">
            <div class="row">
                <div id="recent">

                    <H2 style="color: #000000; float: left">My Account</H2>
                </div>
            </div>

            <?php
            $data=$db->query("SELECT * FROM employee where E_nic= '$user_nic'");
            $db_result=$data->result();
            $count=$data->count();

            $F_name = $db_result[0]->F_Name;
            $L_name = $db_result[0]->L_Name;
            $space = " ";
            $E_name = $F_name . $space . $L_name;

            ?>
            <!------------------------------------ Modals ----------------------------------->
            <div class="modal fade" id="myModal2" data-backdrop="static" role="dialog" action="" >
                <div class="modal-dialog">
                    <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                        <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 420px; height: 350px;" >
                            <h4 style="color:white;text-align:left;">CHANGE PASSWORD</h4>
                            <form class="form-horizontal" action="../controllers/update_myaccount.php"  method="post">
                                <div class="form-group ext_form">
                                    <div class="col-xs-10">
                                        <label for="inputOpass" class="control-label" style="color:white;">Current Password :</label>
                                        <input type="name" name="currentpassword" class="form-control modal_input" align="center"  placeholder="Current Password" style="width: 250px;margin-top: -25px;margin-left: 137px;" id="inputOpass" required>
                                        <?php
                                        $dbpassword=$db_result[0]->E_password;
                                        /*$user_currentpassword=$_POST['currentpassword'];*/
                                        $user_currentpassword="cas@123";
                                        echo $user_currentpassword;
                                        if(password_verify($user_currentpassword,$dbpassword)){
                                            echo "ds,jgfmjsd d,hfhf";
                                        }
                                        else{
                                            echo "modayaa";
                                        }

                                        /* if ($_POST['currentpassword']== $dbpassword)
                                         {
                                             echo("Oops! Password did not match! Try again. ");
                                         }*/
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
            </div> <!--Password-->

            <div class="modal fade" id="myModal3" data-backdrop="static" role="dialog" action="" >
                <div class="modal-dialog">
                    <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                        <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 250px;" >
                            <h4 style="color:white;text-align:left;">CHANGE EMAIL</h4>
                            <form class="form-horizontal" action="../controllers/update_myaccount.php"  method="post">
                                <div class="form-group ext_form">
                                    <div class="col-xs-10">
                                        <label for="inputEmail" class="control-label" style="color:white;">Email :</label>
                                        <input type="email" name="email" class="form-control modal_input" align="center" style="width:276px;margin-top:-25px;margin-left:90px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="inputEmail" data-error="Brush, that email address is invalid" required value=<?php echo $db_result[0]->E_email?> >
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
            </div>  <!--Email-->

            <div class="modal fade" id="myModal5" data-backdrop="static" role="dialog" action="" >
                <div class="modal-dialog">
                    <div class="row" style=" margin-top: 150px;margin-left: 100px;">
                        <div class="col-md-8 col-md-offset-2 model_addnew" style="width: 410px; height: 250px;" >
                            <h4 style="color:white;text-align:left;">CHANGE CONTACT NUMBER</h4>
                            <form class="form-horizontal" action="../controllers/update_myaccount.php"  method="post">
                                <div class="form-group ext_form">
                                    <div class="col-xs-10">
                                        <label for="inputmobile" class="control-label" style="color:white;">Contact No. :</label>
                                        <input type="name" name="up_tel" class="form-control modal_input" align="center" style="width:276px;margin-top:-25px;margin-left:90px;" id="inputmobile" pattern="^\d{10}$" title="Required 10 numbers" required maxlength="10" value=<?php echo $db_result[0]->E_tel ?> >
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
            </div> <!--contactnumber-->

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
            </div> <!--propic-->

            <!------------------------------------ Modals ----------------------------------->

    </div>


</div>





</body>
</html>
