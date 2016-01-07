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

<?php
$data=$db->query("SELECT * FROM message WHERE to_user = '$user_nic' AND deleted = 'no'");
$db_result=$data->result();
$count=$data->count();

$delete = "yes";
if(isset($_POST['delete1'])) {
    $checked_arr = $_POST['checkbox'];
    $count_check = count($checked_arr);
    for ($i = 0; $i < $count_check; $i++) {
        $del_id = $_POST['checkbox'][$i];
        $sql = "UPDATE message SET deleted='$delete' WHERE id='$del_id'";
        $update =$db->query($sql);
    }
}

if(isset($_POST['reply'])) {
    echo "To : <input NAME='to_user' id='to_user' value=''>";
}

if(isset($_POST['new_message'])){
    header('location:send_message.php');
}
?>

<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">

                <div class="row">
                    <div id="topic">
                        <h2 style="color:#000000; float:left;"> My Message </h2>
                    </div>
                </div>

                <div class="row">
                <div style="width: 600px;float: left;"><!--start message inbox-->
                    <form name="form1" method="post" action="">
                        <table class="table table-striped" id="table">

                            <div class="row">
                                <div style="float:right;">
                                    <button class="div_button"  type="submit" id="remove" name="delete1" ><img src="../../../public/images/remove.png" class="div_button_img">Remove</button>
                                </div>
                                <div style="float: right;">
                                    <button class="div_button" type="submit" id="outbox" name="outbox"><img src="../../../public/images/outbox.png" class="div_button_img">Outbox</button>
                                </div>
                                <div style="float:right;">
                                    <button class="div_button" type="submit" name="new_message" style="width: 129px;"><img src="../../../public/images/Add.png" class="div_button_img">New Message</button>
                                </div>
                            </div>

                            <thead>
                            <tr>
                                <th>Time</th>
                                <th>Date</th>
                                <th>To</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            for($i=0; $i<$count; $i++){
                                /* for($ii=0; $ii<$count1; $ii++){*/
                                $from_user=$db_result[$i]->from_user;
                                $emp_details=$db->query("SELECT * FROM employee WHERE E_nic = '$from_user'");
                                $emp_name=$emp_details->result();
                                $F_name=$emp_name[0]->F_Name;
                                $L_name=$emp_name[0]->L_Name;
                                $space = " ";
                                $from_user_name= $F_name.$space.$L_name;

                                echo
                                    "<tr>
                                        <td></td>
                                        <td></td>
                                        <td>{$from_user_name}</td>
                                        <td>{$db_result[$i]->message}</td>
                                        <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' data-toggle='modal' data-target='#myModal2' value={$db_result[$i]->id}>"."</td>
		                                <td><a href='send_message.php?user=".  $from_user_name ."'>Reply</a></td>
		                             </tr>\n";
                            }/*}*/
                            ?>

                            <!--  <input name="update" type="submit" data-toggle="modal" data-target="#myModal4" value="Update">-->

                            </tbody>
                        </table>
                    </form>
                </div><!--end of message inbox-->

                <div style="width: 432px;float: right;"><!--start message content-->
                    <form>
                        Message:<TEXTAREA NAME="message" id="message" COLS=55 ROWS=18 WRAP=SOFT></TEXTAREA>
                        <div style="float:right;">
                            <button class="div_button"  type="submit" id="reply" name="reply" ><img src="../../../public/images/remove.png" class="div_button_img">Reply</button>
                        </div>
                    </form>
                </div><!--end of message content-->
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>