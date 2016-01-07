<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$user_nic = $_SESSION['user_session'];
$db = DB::getInstance();
$user_inbox=$_GET['user'];
?>

</head>

<script language="javascript">
    var table = $('#table').DataTable();

    var data = table
        .rows()
        .data();

    alert( 'The table has '+data.length+' records' );
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

                    <div class="row" style="">
                        <div style="width: 500px;float: left;">
                            <table class="table table_striped" id="table">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $data=$db->query("SELECT * FROM employee WHERE E_nic <> '$user_nic'");
                                $db_result=$data->result();
                                $count=$data->count();

                                    for($i=0; $i<$count; $i++){
                                        $F_name=$db_result[$i]->F_Name;
                                        $L_name=$db_result[$i]->L_Name;
                                        $space=" ";
                                        $E_name= $F_name.$space. $L_name;
                                        echo
                                            "<tr>
                                             <td>{$E_name}</td>
                                             <td></td>
                                             </tr>\n";
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>

                        <script language="javascript">

                            var tbl = document.getElementById("table");
                            if (tbl != null) {
                                for (var i = 0; i < tbl.rows.length; i++) {
                                    for (var j = 0; j < tbl.rows[i].cells.length; j++)
                                        tbl.rows[i].cells[j].onclick = function () { getval(this); };
                                }
                            }

                            function getval(cel) {
                                alert((cel.innerHTML));

                            }


                            /*function showUser(str) {
                                if (str == "") {
                                    document.getElementById("to_user").innerHTML = "";
                                    return;
                                } else {
                                    if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                            document.getElementById("to_user").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET","getuser.php?q="+str,true);
                                    xmlhttp.send();
                                }
                            }*/
                        </script>

                        <div style="width: 532px;float: right;"><!--message body-->
                            <?php

                            if (isset($_POST['submit']))
                            {
                                $send_to_user = $_POST['to_user'];
                                $send_details=$db->query("SELECT * FROM employee WHERE E_name = '$send_to_user'");
                                $emp_name=$send_details->result();

                                $to_user= $emp_name[0]->E_nic;

                                /*$from_user = $_POST['from_user'];*/
                                $from_user = $user_nic;
                                $message = $_POST['message'];
                                $no = "no";
                                $send_message = "INSERT INTO message (to_user, message, from_user,read_yet,deleted,sent_deleted) VALUES ('$to_user', '$message', '$from_user','$no','$no','$no')";
                                $db->query($send_message);
                            }
                            else
                            {
                            ?>
                            <tr><td>To : </td><td>
                                    <input NAME="to_user" id="to_user" value=<?php $value?>>
                                </td></tr>
                            <tr><td>Message: </td><td>
                                    <TEXTAREA NAME="message" id="message" COLS=50 ROWS=10 WRAP=SOFT></TEXTAREA>
                                </td></tr>
                            <tr><td colspan="2" align="right">
                                    <input id="send_message" class="div_button"  type="submit" name="submit" style="width: 129px;" value="Send Message">
                                </td></tr>

                            <?php
                            }
                            ?>
                        </div>
                    </div>

                 </div> <!--end of layout-->
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>