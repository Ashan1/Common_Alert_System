
<?php
include "connect.php";

$name = $_POST['formName'];
$email = $_POST['formEmail'];
$nic =  $_POST['formNIC'];
$title = $_POST['formTitle'];
$mobile = $_POST['formMobile'];
$address = $_POST['formAddress'];
$image=addslashes(file_get_contents($_FILES['image']));


// attempt insert query execution
$sql = "INSERT INTO temporary ( T_name, T_email,T_nic, T-tel, T_title, T_address, T_image) VALUES ($name, $email, $nic , $mobile,$title, $address, $image)";
if(mysql_query($sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}
 
// close connection
mysql_close();
?>
</body>
</html>
