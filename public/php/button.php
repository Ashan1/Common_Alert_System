
<?php

include 'connect.php';
$nic= $_POST['E_nic'];
/*if (isset($_POST['delete'])){
$query = $db->prepare (DELETE * FROM feedback WHERE ID = ?)
$query->execute($id);
}*/

if (isset($name)){
$sql2 =  "DELETE FROM employee WHERE E_nic = $nic";
if(mysql_query($sql2)){
header('location:../../../app/view/home/adduser.php');
} else{
echo "ERROR: Could not able to execute $sql2. " . mysqli_error();
}
echo $nic;
}
?>