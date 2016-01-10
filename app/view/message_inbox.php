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
$data=$db->query("SELECT * FROM message WHERE to_user = '$user_nic' AND deleted = '0'");
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
        if(!$update->error()){
            echo '<script>
                                        window.location.href=window.location.href;
                                        </script>';

        }
    }
}

if(isset($_POST['outbox'])) {
    header('Location: message_outbox.php');
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

                <div id="layout">

                    <div class="row">
                        <div id="topic">
                            <h2 style="color:#000000; float:left;">Message Inbox</h2>
                        </div>
                    </div>

                    <div id="content" >

                    <div class="row">
                        <form name="form1" method="post" action="">
                            <table class="table table-striped" id="table">
                                <div class="row">
                                    <div style="float:right;">
                                        <button class="div_button"  type="submit" id="remove" name="delete1" >Remove</button>
                                    </div>
                                   <!-- <div style="float:right;">
                                         <button class="div_button" type="submit" name="new_message" style="width: 129px;">New Message</button>
                                    </div>-->
                                    <div style="float:right;">
                                        <button class="div_button" type="submit"  name="outbox" id="outbox" style="width: 129px;">Outbox</button>
                                    </div>
                                    <div style="float:right;">
                                        <button class="div_button" type="button" data-toggle="modal" data-target="#NewMsg" name="new_message" style="width: 129px;">New Message</button>
                                    </div>
                                </div>

                <thead>
                <tr>
                    <th>Time</th>
                    <th>Date</th>
                    <th>From</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Status</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php
                for($i=0; $i<$count; $i++){
                   $from_user=$db_result[$i]->from_user;
                    $emp_details=$db->query("SELECT * FROM employee WHERE E_nic = '$from_user'");
                    $emp_name=$emp_details->result();
                    $fname=$emp_name[0]->F_Name;
                    $lname=$emp_name[0]->L_Name;
                    $space=" ";
                    $full_name=$fname.$space.$lname;
                    $name_display = substr($full_name, 0, 25);

                    $db_msg=$db_result[$i]->message;
                    $msg_display = substr($db_msg, 0, 25);

                    echo
                        "<tr>
                                        <td>{$db_result[$i]->msg_time}</td>
                                        <td>{$db_result[$i]->msg_date}</td>
                                        <td>{$name_display}</td>
                                        <td>{$msg_display}...</td>
                                        <td type='button' name='view_msg' id='view_msg' data-toggle='modal' data-id='$db_msg' data-target='#ViewMsg'>View</td>
                                        <td type='button' name='reply_user' id='reply_user' data-toggle='modal' data-id='$full_name' data-target='#ReplyMsg'>Reply</td>
                                        <td type='button' name='forward_user' id='forward_user' data-toggle='modal' data-id='$db_msg' data-target='#ForwardMsg'>Forward</td>
                                        <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' value={$db_result[$i]->id}>"."</td>

		                             </tr>\n";
                }
                ?>


                </tbody>
                </table>
                        </form>
                        </div>
            </div>
                    <script type="text/javascript">
                        $(document).on("click", "#reply_user", function () {
                            var myBookId = $(this).data('id');
                            $("#ReplyMsg #to_user").val( myBookId );
                        });

                        $(document).on("click", "#forward_user", function () {
                            var myBookId = $(this).data('id');
                            $("#ForwardMsg #msg").val( myBookId );
                        });

                        $(document).on("click", "#view_msg", function () {
                            var myBookId = $(this).data('id');
                            $("#ViewMsg #msg_dis").val( myBookId );
                        });

                    </script>

                    <!--pop up newmsg modal-->
                    <div class="modal fade" id="NewMsg" role="dialog" action="" >
                        <div class="modal-dialog">
                            <div>
                                <div class="col-lg-10 col-lg-offset-2 model_addnew">
                                    <h4 style="color:white;text-align:left;">New Message</h4>
                                    <form class="form-horizontal" action="../controllers/sendmsg_modal.php"  data-toggle="validator" method="post" id="admin-adduser">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">To:</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="to_user" id="to_user" placeholder="Receiver Name" list="exampleList">
                                                <datalist id="exampleList">
                                                    <?php
                                                    $data = $db->query("SELECT * FROM employee WHERE E_nic <> '$user_nic'");
                                                    $db_result = $data->result();
                                                    $count = $data->count();
                                                    for ($i = 0; $i < $count; $i++) {
                                                        $ffname = $db_result[$i]->F_Name;
                                                        $llname = $db_result[$i]->L_Name;
                                                        $space = " ";
                                                        $fulli_name = $ffname . $space . $llname;
                                                        echo
                                                        "<option value='{$fulli_name}'>{$fulli_name}</option>";
                                                    }
                                                    ?>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Message:</label>
                                            <div class="col-sm-8">
                                                <textarea name="msg" id="msg" class="form-control" placeholder="Text Message" COLS=50 ROWS=10 WRAP=SOFT value=""></TEXTAREA>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-7 controls">
                                            <button type="submit" id="send_btn" name="send_btn" class="btn btn-default btn-primary">
                                                <i class="fa fa-hand-o-right"></i>&nbsp;Send Message
                                            </button>
                                            <button type="button" name="btn-cancel" class="btn btn-default btn-primary" data-dismiss="modal">
                                                <i class="fa fa-ban"></i>&nbsp;Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--end pop up new msg modal-->

                    <!--pop up reply modal-->
                    <div class="modal fade" id="ReplyMsg" role="dialog" action="" >
                        <div class="modal-dialog">
                            <div>
                                <div class="col-lg-10 col-lg-offset-2 model_addnew">
                                    <h4 style="color:white;text-align:left;">New Message</h4>
                                    <form class="form-horizontal" action="../controllers/replymsg_modal.php"  data-toggle="validator" method="post" id="admin-adduser">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">To:</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="to_user" class="form-control" id="to_user" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Message:</label>
                                            <div class="col-sm-8">
                                                <textarea name="msg" id="msg" class="form-control" placeholder="Text Message" COLS=50 ROWS=10 WRAP=SOFT value=""></TEXTAREA>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-7 controls">
                                            <button type="submit" id="send_btn" name="send_btn" class="btn btn-default btn-primary">
                                                <i class="fa fa-hand-o-right"></i>&nbsp;Send Message
                                            </button>
                                            <button type="button" name="btn-cancel" class="btn btn-default btn-primary" data-dismiss="modal">
                                                <i class="fa fa-ban"></i>&nbsp;Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--end pop up reply modal-->

                    <!--pop up forward modal-->
                    <div class="modal fade" id="ForwardMsg" role="dialog" action="" >
                        <div class="modal-dialog">
                            <div>
                                <div class="col-lg-10 col-lg-offset-2 model_addnew">
                                    <h4 style="color:white;text-align:left;">New Message</h4>
                                    <form class="form-horizontal" action="../controllers/ForwardMsg_modal.php"  data-toggle="validator" method="post" id="admin-adduser">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">To:</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="to_user" id="to_user" placeholder="Receiver Name" list="exampleList">
                                                <datalist id="exampleList">
                                                    <?php
                                                    $data = $db->query("SELECT * FROM employee WHERE E_nic <> '$user_nic'");
                                                    $db_result = $data->result();
                                                    $count = $data->count();
                                                    for ($i = 0; $i < $count; $i++) {
                                                        $ffname = $db_result[$i]->F_Name;
                                                        $llname = $db_result[$i]->L_Name;
                                                        $space = " ";
                                                        $fulli_name = $ffname . $space . $llname;
                                                        echo
                                                        "<option value='{$fulli_name}'>{$fulli_name}</option>";
                                                    }
                                                    ?>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Message:</label>
                                            <div class="col-sm-8">
                                                <textarea name="msg" id="msg" class="form-control" placeholder="Text Message" COLS=50 ROWS=10 WRAP=SOFT value=""></TEXTAREA>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-7 controls">
                                            <button type="submit" id="send_btn" name="send_btn" class="btn btn-default btn-primary">
                                                <i class="fa fa-hand-o-right"></i>&nbsp;Send Message
                                            </button>
                                            <button type="button" name="btn-cancel" class="btn btn-default btn-primary" data-dismiss="modal">
                                                <i class="fa fa-ban"></i>&nbsp;Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--end pop up forward modal-->

                    <!--pop up View modal-->
                    <div class="modal fade" id="ViewMsg" role="dialog" action="" >
                        <div class="modal-dialog">
                            <div>
                                <div class="col-lg-10 col-lg-offset-2 model_addnew">
                                    <h4 style="color:white;text-align:left;">Message</h4>
                                    <form class="form-horizontal" action=""  data-toggle="validator" method="post" id="admin-adduser">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Messageo:</label>
                                            <div class="col-sm-8">
                                                <TEXTAREA name="msg_dis" id="msg_dis" class="form-control" placeholder="Text Message" COLS=50 ROWS=10 WRAP=SOFT ></TEXTAREA>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-7 controls">
                                            <button type="button" id="send_btn" name="send_btn" class="btn btn-default btn-primary">
                                                <i class="fa fa-hand-o-right"></i>&nbsp;Reply
                                            </button>
                                            <button type="button" id="send_btn" name="send_btn" class="btn btn-default btn-primary">
                                                <i class="fa fa-hand-o-right"></i>&nbsp;Forward
                                            </button>
                                            <button type="button" formaction="../controllers/vie_inboxmsg.php" name="btn-cancel" class="btn btn-default btn-primary" data-dismiss="modal">
                                                <i class="fa fa-ban"></i>&nbsp;Ok
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--end pop up view modal-->

        </div><!--layout ends-->

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>