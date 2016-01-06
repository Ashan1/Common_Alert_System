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


                /*$result = mysql_query("SELECT * FROM external_authority");
                $count=mysql_num_rows($result);*/

                if(isset($_POST['update'])) {
                    for($i=0; $i<count($_POST['checkbox']); $i++){
                        $del_id = $_POST['checkbox'][$i];
                        $sql = "SELECT * FROM external_authority WHERE Auth_tel='$del_id'";
                        $update =$db->query($sql);
                        $details=$update->result();
                        $c_job=$details[$i]->E_job_role;
                        $up_name = $details[$i]->Auth_name;
                        $up_tel=$details[$i]->Auth_tel;
                        $up_add=$details[$i]->Auth_address;
                        $up_email=$details[$i]->Auth_email;

                            ?>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#myModal1").modal('show');
                                });
                            </script>

                            <!--edit_form-->
                            <div class='modal fade' id='myModal1' role='dialog' action='delete_update.php' >
                                <div class='modal-dialog'>
                                    <div class='row' style='margin-top: 20px;'>
                                        <div class='col-md-8 col-md-offset-2' style='background-color:black;background: rgba(0, 0, 0, 0.6);height: 430px;width: 560px;'>
                                            <h4 style='color:white;text-align:left;'>UPDATE DETAILS</h4>
                                            <p style='color:white;'>This is an identification used by a you to access the CAS service.</p>
                                            <form class='form-horizontal' action='../controllers/external_update.php?Aauth_id=<?php echo $del_id?>' method='post'>
                                                <div class='form-group ext_form'>
                                                    <div class='col-xs-10'>
                                                        <label for='inputName' class='control-label' style='color:white;'>Department Name:</label>
                                                        <input type='name' name='auth_nameup' class='form-control ext_input' id='inputName' value="<?php echo $up_name ?>" align='center' style='margin-left: 175px;'  required>
                                                    </div>
                                                </div>
                                                <div class='form-group ext_form'>
                                                    <div class='col-xs-10'>
                                                        <label for='inputmobile' class='control-label' style='color:white;'>Department Number:</label>
                                                        <input type='tel' name='auth_telup' class='form-control ext_input' align='center' style='margin-left: 175px;' id='inputEmail' value="<?php echo $up_tel ?>" >
                                                    </div>
                                                </div>
                                                <div class='form-group ext_form'>
                                                    <div class='col-xs-10'>
                                                        <label for='inputAddress' class='control-label' style='color:white;'>Department Address:</label>
                                                        <input type='address' name='auth_addressup' class='form-control ext_input' id='inputAddress' align='center' style='margin-left: 175px;' value="<?php echo $up_add ?>" required>
                                                    </div>
                                                </div>
                                                <div class='form-group ext_form'>
                                                    <div class='col-xs-10'>
                                                        <label for='inputEmail' class='control-label' style='color:white;'>Department Email:</label>
                                                        <input type='email' class='form-control ext_input' name='auth_emailup' align='center' style='margin-left: 175px;' value="<?php echo $up_email ?>" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+[a-z]{2,3}$' id='inputEmail'  data-error='Brush, that email address is invalid' required>>
                                                    </div>
                                                </div>
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
                    }
                ?>


            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
