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
$data=$db->query("SELECT * FROM message WHERE from_user = '$user_nic' AND sent_deleted = 'no'");
$db_result=$data->result();
$count=$data->count();

/*$emp_details=$db->query("SELECT * FROM employee WHERE E_nic = '$user_nic'");
$emp_name=$emp_details->result();
$count1=$emp_details->count();*/

$delete = "yes";
if(isset($_POST['delete1'])) {
    $checked_arr = $_POST['checkbox'];
    $count_check = count($checked_arr);
    for ($i = 0; $i < $count_check; $i++) {
        $del_id = $_POST['checkbox'][$i];
        $sql = "UPDATE message SET sent_deleted='$delete' WHERE id='$del_id'";
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
                            <h2 style="color:#000000; float:left;">Message Outbox</h2>
                        </div>
                    </div>

                    <div id="content" >

                        <?php

                        ?>

                     <div class="row">
                        <form name="form1" method="post" action="">
                            <table class="table table-striped" id="table">

                                <div class="row">
                                    <div style="float:right;">
                                        <button class="div_button"  type="submit" id="remove" name="delete1" >Remove</button>
                                    </div>
                                    <div style="float:right;">
                                        <button class="div_button" type="submit" name="new_message" style="width: 129px;">New Message</button>
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
                    $to_user=$db_result[$i]->to_user;
                    $emp_details=$db->query("SELECT * FROM employee WHERE E_nic = '$to_user'");
                    $emp_name=$emp_details->result();
                    $F_name=$emp_name[0]->F_Name;
                    $L_name=$emp_name[0]->L_Name;
                    $space = " ";
                    $from_user_name= $F_name.$space.$L_name;
                    /*for($ii=0; $ii<$count1; $ii++){*/
                        echo
                            "<tr>
                                        <td></td>
                                        <td></td>
                                        <td>{$from_user_name}</td>
                                        <td>{$db_result[$i]->message}</td>
                                        <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box'  value={$db_result[$i]->id}>"."</td>
		                            </tr>\n";
                    }/*}*/
                ?>

                <?php
                /* }*/

                if (isset($_POST['delete'])) {
                    $id = $_POST['id'];
                    $user = $_SESSION['username'];
                    $sql = mysql_query("UPDATE message SET send_deleted = 'yes' WHERE id = '$id' AND from_user = 'Dilini'")or die(mysql_error());
                    echo "Your message has been succesfully deleted.";
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