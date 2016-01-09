<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

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
                            <h2 style="color:#000000; float:left;">External Authority Details</h2>
                        </div> <!--recent ends-->
                    </div>

                    <?php
                    $data=$db->query("SELECT * FROM external_authority");
                    $db_result=$data->result();
                    $count=$data->count();

                    if(isset($_POST['update'])) {

                            $del_id = $_POST['checkbox'][0];
                            $sql_up=$db->query("SELECT * FROM external_authority WHERE Auth_email='$del_id'");
                            $current_data=$sql_up->result();

                            ?>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#Update_Modal").modal('show');
                                });
                            </script>

                    <!--edit_form-->
                    <div class='modal fade' id='Update_Modal' action='../controllers/update_authority.php' >
                        <div class='modal-dialog'>
                            <div class='row' style='margin-top: 20px;'>
                                <div class='col-md-8 col-md-offset-2' style='background-color:black;background: rgba(0, 0, 0, 0.6);height: 430px;width: 560px;'>
                                    <h4 style='color:white;text-align:left;'>UPDATE DETAILS</h4>
                                    <form class='form-horizontal' action='../controllers/update_authority.php?Auth_id=" dmc@gmail.com"' method='post'>
                                        <div class='form-group ext_form'>
                                            <div class='col-xs-10'>
                                                <label for='inputName' class='control-label' style='color:white;'>Department Name:</label>
                                                <input type='name' name='auth_nameup' class='form-control ext_input' id='inputName' value=<?php echo $current_data[0]->Auth_name ?>  align='center' style='margin-left: 175px;'  required>
                                            </div>
                                        </div>
                                        <div class='form-group ext_form'>
                                            <div class='col-xs-10'>
                                                <label for='inputmobile' class='control-label' style='color:white;'>Department Number:</label>
                                                <input type='tel' name='auth_telup' class='form-control ext_input' align='center' style='margin-left: 175px;' id='inputEmail' value=<?php echo $current_data[0]->Auth_tel ?> >
                                            </div>
                                        </div>
                                        <div class='form-group ext_form'>
                                            <div class='col-xs-10'>
                                                <label for='inputAddress' class='control-label' style='color:white;'>Department Address:</label>
                                                <input type='address' name='auth_addressup' class='form-control ext_input' id='inputAddress' align='center' style='margin-left: 175px;' value=<?php echo $current_data[0]->Auth_address ?> required>
                                            </div>
                                        </div>
                                        <!--<div class='form-group ext_form'>
                                            <div class='col-xs-10'>
                                                <label for='inputEmail' class='control-label' style='color:white;'>Department Email:</label>
                                                <input type='email' class='form-control ext_input' name='auth_emailup' align='center' style='margin-left: 175px;' value="<?php /*echo $up_email */?>" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+[a-z]{2,3}$' id='inputEmail'  data-error='Brush, that email address is invalid' required>>
                                            </div>
                                        </div>-->
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

                    <?php

                    }
                    ?>

                    <!--add new authority-->
                    <div class="modal fade" id="myModale" role="dialog" action="../controllers/external_auth.php" >
                        <div class="modal-dialog">
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-8 col-md-offset-2" style="background-color:black;background: rgba(0, 0, 0, 0.6);height: 400px;width: 530px;">

                                    <h4 style="color:white;text-align:left;padding-top: 10px;padding-bottom:10px;">ADD EXTERNAL AUTHORITY</h4>

                                    <form class="form-horizontal" action="../controllers/external_auth.php"  method="post">
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
                    <!--end add new authority-->

                    <div class="row">
                        <div id="content" scrolling="yes">
                            <form name="table" method="post" onsubmit="return validate();">
                                <table class="table table_striped" id="table">

                                    <div>
                                        <div style="float: right;">
                                            <button class="div_button" data-toggle="modal" type="submit" id="update" name="update" >Update</button>
                                        </div>
                                        <div style="float:right;">
                                            <button class="div_button" data-toggle="modal" data-target="#myModale" type="button" >Add New</button>
                                        </div>
                                    </div>

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

                                    for($i=0; $i<$count; $i++){
                                        echo
                                            "<tr>
                                                <td>{$db_result[$i]->Auth_name}</td>
                                                <td>{$db_result[$i]->Auth_tel}</td>
                                                <td>{$db_result[$i]->Auth_address}</td>
                                                <td>{$db_result[$i]->Auth_email}</td>
                                                <td>"."<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' data-toggle='modal' data-target='#myModal2' value={$db_result[$i]->Auth_email}>"."</td>
		                                        </tr>\n";
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>

                </div><!--layout ends-->


            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
