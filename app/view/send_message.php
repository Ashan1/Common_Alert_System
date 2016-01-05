<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../model/dbConfig.php';
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

                <div id="layout">

                    <div class="row">
                        <div id="topic">
                            <h2 style="color:#000000; float:left;"> My Message </h2>
                        </div>
                    </div>

                            <div class="row">
                                <div style="float: right;">
                                    <button class="div_button" type="submit" id="outbox" name="outbox"><img src="../../../public/images/outbox.png" class="div_button_img">Outbox</button>
                                </div>
                                <div style="float: right;">
                                    <button class="div_button" type="submit" id="inbox" name="inbox"><img src="../../../public/images/inbox.png" class="div_button_img">Inbox</button>
                                </div>
                            </div>

                            <?php
                            if(isset($_POST['outbox'])){
                                header('location:outbox.php');
                            }
                            ?>

                    <div id="content">
                        <?php
                        include "../../../public/php/connect.php";
                        if (isset($_POST['submit']))
                        {
// if the form has been submitted, this inserts it into the Database
                            $to_user = $_POST['to_user'];
                            /*$from_user = $_POST['from_user'];*/
                            $from_user = "Dilini";
                            $message = $_POST['message'];
                            $no = "no";
                            mysql_query("INSERT INTO message (to_user, message, from_user,read_yet,deleted,sent_deleted) VALUES ('$to_user', '$message', '$from_user','$no','$no','$no')") or die(mysql_error());
                            /*echo "Message succesfully sent!";*/
                            if(mysql_query($result)){
                                header('location:send_message.php');
                            }
                        }
                        else
                        {
                            // if the form has not been submitted, this will show the form
                            ?>

                        <div class="row">
                            <div class="message_body">
                                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                    <tr><td></td><td>
                                            <!--<input type="hidden" name="from_user" maxlength="32" value = --><?php /*echo $_SESSION['username']; */?>
                                            <input type="hidden" name="from_user" maxlength="32" value = "Dilini">
                                        </td></tr>
                                    <tr><td>To User: </td><td>
                                            <input type="text" name="to_user" id="to_user" maxlength="32" value = "">
                                        </td></tr>
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