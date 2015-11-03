
<?php
include "../../../public/php/connect.php";
$del_id=$_GET['pass'];
$del= $_GET['button'];
$up= $_GET['button2'];
$job=$_GET['job'];
$check=$_GET['check'];
 //for ($i = 0; $i < count($_POST['checkbox']); $i++) {
     //$del_id = $_POST['checkbox'];

foreach($check as $del_id) {
    echo$del_id;
    if ($del == "delete_button") {
        $sql = "DELETE FROM employee WHERE E_nic='$del_id'";
        if (mysql_query($sql)) {
            // header('location:adduser.php');
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=adduser.php\">";
        }
    }
}?>