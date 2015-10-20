
<?php

include '../../../public/php/connect.php';
$name= $_POST['delete'];
/*if (isset($_POST['delete'])){
$query = $db->prepare (DELETE * FROM feedback WHERE ID = ?)
$query->execute($id);
}*/

if (isset($name)){
    $sql2 =  "DELETE FROM external_authority WHERE Auth_tel = $name";
    if(mysql_query($sql2)){
        header('location:External.php');
    } else{
        echo "ERROR: Could not able to execute $sql2. " . mysqli_error();
    }
    echo $name;
}
?>