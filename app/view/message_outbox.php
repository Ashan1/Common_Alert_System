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

<?php

include "../../../public/php/connect.php";
$delete = "yes";
if(isset($_POST['delete1'])) {
    for ($i = 0; $i < count($_POST['checkbox']); $i++) {
        $del_id = $_POST['checkbox'][$i];
        $sql = "UPDATE message SET sent_deleted='$delete' WHERE id='$del_id'";
        echo $del_id;

        if (mysql_query($sql)) {
        }
    }
}

if(isset($_POST['new_message'])){
    header('location:send_message.php');
}

$_SESSION['sessionVar'] = $del_id;

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
                        //session_start();
                        require("../../../public/php/connect.php");

                        /*if (isset($_POST['view_old'])) {*/
                        $user = $_SESSION['user'];
                        $query = mysql_query("SELECT * FROM message WHERE from_user = 'Dilini' AND sent_deleted = 'no'")or die(mysql_error());
                        ?>

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
                    <th>Fromo</th>
                    <th>To</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>

                <?php
                while( $row = mysql_fetch_assoc( $query ) ){
                    $dbrow_id=$row['id'];
                    echo
                        "<tr>
                          <td>{$row['from_user']}</td>
                          <td>{$row['to_user']}</td>
                          <td>{$row['message']}</td>
                          <td>" . "<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' value=$dbrow_id>"."</td>
		            </tr>\n";
                }
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