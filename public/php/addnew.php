
<?php
include "connect.php";

$button = $_POST['update'];
$button2 = $_POST['delete'];
$name = $_POST['formName'];
$email = $_POST['formEmail'];
$nic =  $_POST['formNIC'];
$mobile = $_POST['formMobile'];
$add = $_POST['formAddress'];
$role = $_POST['size'];
$image=addslashes(file_get_contents($_FILES['image']));
$pw = "CAS@123";

// attempt insert query execution
$sql = "INSERT INTO employee (E_name, E_nic, E_email, E_tel, E_address, E_job_role, E_image, E_username, E_password) VALUES ('$name', '$nic' ,'$email', '$mobile', '$add', '$role', '$image','$email','$pw')";

if(mysql_query($sql)){
    header('location:../../app/views/home/adduser.php');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}
 
// close connection
mysql_close();
?>
</body>
</html>
