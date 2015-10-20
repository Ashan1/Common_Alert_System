<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CAS</title>
 <script src="js/jquery.min.js"></script>
  <script src="js/popup.min.js"></script>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet"> 
	
    <!--<link href="dashboard.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/npm.js"></script> -->

</head>
<body>
<?php
include 'connect.php';
$nameErr = $emailErr =$nicErr = $titleErr = $addressErr = $mobileErr ="";
$name = $email =$nic = $title = $address = $mobile ="";

$name = test_input($_POST['formName']);
$email = test_input($_POST['formEmail']);
$nic =  test_input($_POST['formNIC']);
$title = test_input($_POST['formTitle']);
$mobile = test_input($_POST['formMobile']);
$address = test_input($_POST['formAddress']);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
/*$mydata = array($name,$email,$nic,$title,$mobile,$address);
$myname = array("Name: ","Email: ","NIC: ","Title: ","Mobile: ","Address: ");
echo "<h2>Your Input:</h2>";
$arrlength =count($mydata);
for ($x =0 ;$x < $arrlength; $x++){
    echo $myname[$x];
    echo $mydata[$x];
    echo "<br>";
}*/



try {
    $conn = new PDO("mysql:host=$hostrname;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO temporary (T_name,T_email,T_nic,T_title,T_mobile,T_address,T_password)
VALUES ('$name', '$email','$nic','$title','$mobile','$address','cas@123')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<label type="button" name="back">
</body>
</html>
