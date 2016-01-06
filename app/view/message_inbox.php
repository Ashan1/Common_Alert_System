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

<script type="text/javascript">
    window.onload = loadTabContent('../app/controller/tab.php?id=1');
</script>
<body>

<?php
$data=$db->query("SELECT * FROM message WHERE to_user = '$user_nic' AND deleted = 'no'")or die(mysql_error());
$emp_detail=$db->query("SELECT * FROM employee WHERE E_nic = '$user_nic'")or die(mysql_error());
$db_result=$data->result();
$emp_name=$emp_detail->result();
$count=$data->count();
$count1=$emp_detail->count();

$delete = "yes";
if(isset($_POST['delete1'])) {
    for ($i = 0; $i < $count; $i++) {
        $del_id = $_POST['checkbox'][$i];
        $sql = "UPDATE message SET deleted='$delete' WHERE id='$del_id'";
        $update =$db->query($sql);
    }
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
                                        <button class="div_button"  type="submit" id="remove" name="delete1" ><img src="../../../public/images/remove.png" class="div_button_img">Remove</button>
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
                </tr>
                </thead>
                <tbody>

                <?php

                for($i=0; $i<$count; $i++){

                    echo
                        "<tr>
                                        <td>{$emp_name[$i]->E_name}</td>
                                        <td>{$db_result[$i]->from_user}</td>
                                        <td>{$db_result[$i]->message}</td>
                                        <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' data-toggle='modal' data-target='#myModal2' value={$db_result[$i]->id}>"."</td>
		                            </tr>\n";
                }
                ?>

                <!--  <input name="update" type="submit" data-toggle="modal" data-target="#myModal4" value="Update">-->

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