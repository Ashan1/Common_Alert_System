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
echo $
$data=$db->query("SELECT * FROM message WHERE to_user = '$user_nic' AND deleted = 'no'");
$db_result=$data->result();
$count=$data->count();
echo $count;
//var_dump($db_result);
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
<<<<<<< HEAD

=======
>>>>>>> 036c7f2f786891e26ad8b5001c7accada0550780
                for($i=0; $i<$count; $i++){
               /* for($ii=0; $ii<$count1; $ii++){*/
                   $from_user=$db_result[$i]->from_user;
                    echo $from_user;
                    /*$emp_details=$db->query("SELECT * FROM employee WHERE E_nic = '$from_user'");
                    $emp_name=$emp_details->result();
                    $fname=$emp_name[$i]->F_Name;
                    $lname=$emp_name[$i]->L_Name;
                    $space=" ";
                    $full_name=$fname.$space.$lname;*/

                    echo
                        "<tr>
                                        <td></td>
                                        <td></td>
<<<<<<< HEAD
                                        <td>{$db_result[$i]->from_user}</td>
=======
                                        <td>{$full_name}</td>
>>>>>>> 036c7f2f786891e26ad8b5001c7accada0550780
                                        <td>{$db_result[$i]->message}</td>
                                        <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' data-toggle='modal' data-target='#myModal2' value={$db_result[$i]->id}>"."</td>
		                                <td><a href='send_message.php?user=".  $full_name ."'>Reply</a></td>
		                             </tr>\n";
                }/*}*/
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