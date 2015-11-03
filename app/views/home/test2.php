
<?php

include '../../../public/php/connect.php';
$delete = $_POST['delete'];
$checkbox = $_GET['checkbox'];
$count=$_GET['count'];
// Check if delete button active, start this
if(isset($delete)){
    echo "hiiiiiiiiiiiiiiiiiiiiiiiiiiiii";
    for($i=0;$i<$count;$i++){
        echo "hiiiiiiiiiiiiiiiiiiiiiiiiiiiiitttttttttttttttt"; $del_id = $checkbox[$i];
        //$sql = "DELETE FROM employee WHERE E_nic='$del_id'";
        $result = mysql_query("DELETE FROM employee WHERE E_nic='$del_id'");
    }
    // if successful redirect to delete_multiple.php
    if($result){
        header('location:adduser.php');
    }
}
mysql_close();
/*if (isset($name)){
    $sql2 =  "DELETE FROM employee WHERE E_nic = '$name'";
    if(mysql_query($sql2)){
       echo "done";// header('location:adduser.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysql_error();
    }
    echo $name;*/


?>