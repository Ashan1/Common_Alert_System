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
if(isset($_POST['outbox'])){
    header('location:message_outbox.php');
}
if(isset($_POST['reply'])){
    echo "<p> <a href='send_message.php?user=".  $from_user_name ."'>"."</a>";
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
                                    <button class="div_button"  type="submit" id="remove" name="delete1" >Remove</button>
                                </div>
                                <div style="float: right;">
                                    <button class="div_button" type="submit" id="outbox" name="outbox">Outbox</button>
                                </div>
                                <div style="float:right;">
                                    <button class="div_button" type="submit" name="new_message" style="width: 129px;">New Message</button>
                                </div>
                            </div>

                            <thead>
                            <tr>
                                <th>Time</th>
                                <th>Date</th>
                                <th>From</th>
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

                               /* $str = 'abcdef'; /*character count
                                echo strlen($str); */

                               /* $db_msg=$db_result[$i]->message;
                                $msg_display = str_pad($db_msg, 5);*/

                                $db_msg=$db_result[$i]->message;
                                $msg_display = substr($db_msg, 0, 15);

                                echo
                                    "  <tr>
                                        <td></td>
                                        <td></td>
                                        <td>{$from_user_name}</td>
                                        <td><a href='msg_inbox.php?msg=".  $db_result[$i]->message ."'>{$msg_display}</a></td>
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

                    <!--<script language="javascript">
                        $('#table').click(function(e){
                            $("#message").html($(e.target).text());
                        })
                    </script>-->


                    <div style="width: 432px;float: right;"><!--start message content-->
                    <form>
                        <?php
                        if(isset($_GET['msg'])) {
                            $display_msg=$_GET['msg'];
                            ?>
                            <form method="post"><table>
                            Message:<TEXTAREA NAME="message" id="message" COLS=55 ROWS=18 WRAP=SOFT><?php echo $display_msg ?></TEXTAREA>
                            <div style="float:right;">
                                <button class="div_button" type="submit" id="reply" name="reply" formaction="send_message.php?user='<?php echo $from_user_name ?>" >Reply</a></button>
                            </div>
                            <div style="float:right;">
                                <button class="div_button" type="submit" id="forward" name="forward" formaction="">Forward</button>
                            </div>
                                </table></form>
                        <?php
                        }else{
                            ?>
                            <form method="post"><table>
                            Message:<TEXTAREA NAME="message" id="message" COLS=55 ROWS=18 WRAP=SOFT></TEXTAREA>
                            <div style="float:right;">
                                <button class="div_button" type="submit" id="reply" name="reply">Reply</button>
                            </div>
                            <div style="float:right;">
                                <button class="div_button" type="submit" id="forward" name="forward" formaction="">Forward</button>
                            </div>
                                </table></form>
                        <?php
                        }
                        ?>
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