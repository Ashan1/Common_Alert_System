<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
<script src="../../public/js/user/exauthority.js"></script>

<script language="javascript">
    function validate()
    {
        var chks = document.getElementsByName('checkbox[]');
        var hasChecked = false;
        for (var i = 0; i < chks.length; i++)
        {
            if (chks[i].checked)
            {
                hasChecked = true;
                break;
            }
        }
        if (hasChecked == false)
        {
            alert("Please select at least one.");
            return false;
        }
        return true;
    }
</script>

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

                    if(isset($_POST['delete'])){
                        for($i=0; $i<count($_POST['checkbox']); $i++){
                            $del_id = $_POST['checkbox'][$i];
                            $delete=$db->query("DELETE FROM external_authority WHERE Auth_ID='$del_id'");
                            if(!$delete->error()){
                                echo '<script>
                                        window.location.href=window.location.href;
                                      </script>';
                            }
                        }
                    }

                    if(isset($_POST['update'])) {
                            $del_id = $_POST['checkbox'][0];
                            $sql_up=$db->query("SELECT * FROM external_authority WHERE Auth_ID='$del_id'");
                            $current_data=$sql_up->result();
                            ?>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#Update_Modal").modal('show');
                                });
                            </script>

                    <!--edit_form-->
                    <div class='modal fade' id='Update_Modal' class="Update_Modal">
                        <div class='modal-dialog'>
                            <div>
                                <div class='col-lg-12 col-lg-offset-2 Update_Modal'>
                                    <h4 style='color:white;text-align:left;'>UPDATE DETAILS</h4>
                                    <form class='form-horizontal' action='../controllers/update_authority.php?Auth_eid=<?php echo $del_id ?>' method='post' id="ex_update">
                                        <div class='form-group'>
                                                <label for='inputName' class='col-sm-4 control-label'>Department Name:</label>
                                            <div class="col-sm-8">
                                                <input type='name' name='auth_nameup' class='form-control ext_input' id='inputName' value=<?php echo $current_data[0]->Auth_name ?>  align='center'  >
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                                <label for='inputmobile' class='col-sm-4 control-label'>Department Number:</label>
                                            <div class="col-sm-8">
                                                <input type='tel' name='auth_telup' class='form-control ext_input' align='center'  id='inputEmail' value=<?php echo $current_data[0]->Auth_tel ?> >
                                                </div>
                                        </div>
                                        <div class='form-group'>
                                                <label for='inputAddress' class='col-sm-4 control-label' >Department Address:</label>
                                            <div class="col-sm-8">
                                                <input type='text' name='auth_addressup' class='form-control ext_input' id='inputAddress' align='center'  value=<?php echo $current_data[0]->Auth_address ?> >
                                                </div>
                                        </div>
                                        <div class='form-group'>
                                                <label for='inputEmail' class='col-sm-4 control-label' >Department Email:</label>
                                            <div class="col-sm-8">
                                                <input type='email' class='form-control ext_input' name='auth_emailup' align='center'  value=<?php echo $current_data[0]->Auth_email ?> id='inputEmail'  data-error='Brush, that email address is invalid'>
                                                </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-7 controls">
                                                <button type='Submit' class='btn modal_btn' id='submit'  name='update' id='update' value='Submit'>Update</button>
                                                <button type='button' class='btn modal_btn' data-dismiss='modal' style='margin-left: 10px;'>Cancel</button>
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
                    <div class="modal fade" id="myModale" role="dialog" >
                        <div class="modal-dialog">
                            <div>
                                <div class="col-lg-12 col-lg-offset-2 model_exaddnew" >

                                    <h4 style="color:white;text-align:left;padding-top: 10px;padding-bottom:10px;">ADD EXTERNAL AUTHORITY</h4>

                                    <form class="form-horizontal" action="../controllers/external_auth.php"  method="post" id="ex_auth">

                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">Department Name:</label>
                                            <div class="col-sm-8">
                                                <input type="name" name="auth_name" class="form-control ext_input" id="auth_name" align="center"  placeholder="Name">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                                <label for="inputmobile" class="col-sm-4 control-label">Department Number:</label>
                                            <div class="col-sm-8">
                                                <input type="tel" name="auth_tel" class="form-control" align="center" id="auth_tel" placeholder="Telphone Number" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="inputAddress" class="col-sm-4 control-label">Department Address:</label>
                                            <div class="col-sm-8">
                                                <input type="address" name="auth_address" class="form-control ext_input" id="inputAddress" align="center" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="inputEmail" class="col-sm-4 control-label">Department Email:</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control ext_input" name="auth_email" align="center" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-7 controls">
                                            <button type="submit" id="submit" name="btn-adduser" class="btn btn-default btn-primary" value="Submit">
                                                <i class="fa fa-hand-o-right"></i>&nbsp;Add
                                            </button>

                                            <button type="button" name="btn-cancel" class="btn btn-default btn-primary" data-dismiss="modal">
                                                <i class="fa fa-ban"></i>&nbsp;Cancel
                                            </button>
                                        </div>
<!--                                        <div class="form-group">
                                                <button type="Submit"  id="submit"  value="Submit">Add</button>
                                                <button type="button"  data-dismiss="modal">Cancel</button>
                                        </div>-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end add new authority-->

                    <div class="row">
                        <div id="content" scrolling="yes">
                            <form name="table" method="post">
                                <table class="table table_striped" id="table">

                                    <div>
                                        <div style="float:right;">
                                            <button class="btn btn-default btn-primary div_button" data-toggle="modal" type="submit" name="delete" >Delete</button>
                                        </div>
                                        <div style="float: right;">
                                            <button class="btn btn-default btn-primary div_button" data-toggle="modal" type="submit" id="update" name="update" >Update</button>
                                        </div>
                                        <div style="float:right;">
                                            <button class="btn btn-default btn-primary div_button" data-toggle="modal" data-target="#myModale" type="button" >Add New</button>
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
                                                <td>"."<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' data-toggle='modal' data-target='#myModal2' value={$db_result[$i]->Auth_ID}>"."</td>
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
