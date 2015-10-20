
<?php

include '../../../public/php/connect.php';
$name= $_POST['delete'];
/*if (isset($_POST['delete'])){
$query = $db->prepare (DELETE * FROM feedback WHERE ID = ?)
$query->execute($id);
}*/

if (isset($name)){
    $sql2 =  "DELETE FROM employee WHERE E_nic = '$name'";
    if(mysql_query($sql2)){
        header('location:adduser.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysqli_error();
    }
    echo $name;
}
?>