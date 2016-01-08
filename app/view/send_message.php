<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$user_nic = $_SESSION['user_session'];
$db = DB::getInstance();
$empty = "";
if($_GET['user'] == $empty){
?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#send_message").click(function () {
            var exampleList = $(#exampleList
            option:selected
            ).
            val();
            if (exampleList == "") {
                <?php echo "Please select a year"?>;
                return false;
            }
        });
    });
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
                        <div id="topic">
                            <h2 style="color:#000000; float:left;"> My Message </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div style="float: right;">
                            <button class="div_button" type="submit" id="outbox" name="outbox">Outbox</button>
                        </div>
                        <div style="float: right;">
                            <button class="div_button" type="submit" id="inbox" name="inbox">Inbox</button>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['outbox'])) {
                        header('location:message_outbox.php');
                    }
                    ?>

                    <div id="content">
                        <?php

                        if (isset($_POST['submit']))
                        {
                            $send_to_user = $_POST['to_user'];
                            list($split_fname, $split_lname) = explode(' ', $send_to_user);
                            $send_details = $db->query("SELECT * FROM employee WHERE F_Name = '$split_fname' AND L_Name='$split_lname'");
                            $emp_name = $send_details->result();

                            $to_user = $emp_name[0]->E_nic;

                            $from_user = $user_nic;
                            $message = $_POST['message'];
                            $no = "no";
                            $send_message = "INSERT INTO message (to_user, message, from_user,read_status,deleted,sent_deleted) VALUES ('$to_user', '$message', '$from_user','$no','$no','$no')";
                            $db->query($send_message);
                        }
                        else
                        {
                        // if the form has not been submitted, this will show the form
                        ?>

                        <div class="row">
                            <div class="message_body">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <tr>
                                        <td></td>
                                        <td>
                                            <!--<input type="hidden" name="from_user" maxlength="32" value = --><?php /*echo $_SESSION['username']; */ ?>
                                            <input type="hidden" name="from_user" maxlength="32" value="Dilini">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>To User:</td>
                                    </tr>

                                    <input type="text" name="to_user" list="exampleList">
                                    <datalist id="exampleList">
                                        <?php
                                        $data = $db->query("SELECT * FROM employee WHERE E_nic <> '$user_nic'");
                                        $db_result = $data->result();
                                        $count = $data->count();

                                        for ($i = 0; $i < $count; $i++) {
                                            $ffname = $db_result[$i]->F_Name;
                                            $llname = $db_result[$i]->L_Name;
                                            $space = " ";
                                            $full_name = $ffname . $space . $llname;
                                            echo
                                            "<option value='{$full_name}'>{$full_name}</option>";
                                        }
                                        ?>
                                    </datalist>

                                    <?php
                                    }
                                    }else{ /*close $user_inbox */
                                    ?>
                                    <form name="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                                        <tr><td>
                                                <input NAME="to_user" id="to_user" value=<?php echo $_GET['user'] ?>>
                                            </td></tr>
                                    </form>

                                    <!--<tr><select class='form-control modal_input' name='to_user' align='center'
                                            style='margin-left: 125px;width: 276px;margin-top: -25px;'>
                                            <option value=""></option>
                                        <?php
                                    /*                                         $data=$db->query("SELECT * FROM employee WHERE E_nic <> '$user_nic'");
                                                                               $db_result=$data->result();
                                                                               $count=$data->count();

                                                                               for($i=0; $i<$count; $i++){
                                                                                echo
                                                                                "<option value='{$db_result[$i]->E_name}'>{$db_result[$i]->E_name}</option>";
                                                                        }
                                                                        */?>
                                    </select></tr>-->


                                    <tr><td>Message: </td><td>
                                            <TEXTAREA NAME="message" id="message" COLS=50 ROWS=10 WRAP=SOFT></TEXTAREA>
                                        </td></tr>
                                    <tr><td colspan="2" align="right">
                                            <input id="send_message" class="div_button"  type="submit" name="submit" style="width: 129px;" value="Send Message">
                                        </td></tr>
                                    </table>
                                </form>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                    </div>

                </div><!--layout ends-->

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>