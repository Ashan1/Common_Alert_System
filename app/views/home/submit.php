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
$nameErr = $emailErr =$nicErr = $titleErr = $addressErr = $mobileErr ="";
$name = $email =$nic = $title = $address = $mobile ="";

$name = test_input($_POST['formName']);
$email = test_input($_POST['formEmail']);
$nic =  test_input($_POST['formNIC']);
$title = test_input($_POST['formTitle']);
$mobile = test_input($_POST['formMobile']);
$address = test_input($_POST['formAddress']);

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["formName"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["formName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["formEmail"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["formEmail"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }


    if (empty($_POST["formNIC"])) {
        $nicErr = "NIC is required";
    } else {
        $nic = ($_POST["formNIC"]);
        if (strlen($nic) <> 10) {
            $nicErr = "Invalid NIC number";
        }
    }
    if (empty($_POST["title"])) {
        $titleErr = "Title is required";
    } else {
        $title = test_input($_POST["formTitle"]);
    }

    if (empty($_POST["formMobile"])) {
        $mobileErr = "Mobile Number is Required";
    } else {
        $mobile = test_input($_POST["formMobile"]);
        if ((strlen($mobile) <> 10) && (!preg_match("/^[0-9 ]*$/", $name))) {
            $mobileErr = "Invalid mobile number";
        }
    }
    if (empty($_POST["address"])) {
        $addressErr = "";
    } else {
        $address = test_input($_POST["formAddress"]);
    }
}*/
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$mydata = array($name,$email,$nic,$title,$mobile,$address);
$myname = array("Name: ","Email: ","NIC: ","Title: ","Mobile: ","Address: ");
echo "<h2>Your Input:</h2>";
$arrlength =count($mydata);
for ($x =0 ;$x < $arrlength; $x++){
    echo $myname[$x];
    echo $mydata[$x];
    echo "<br>";
}

?>

</body>
</html>
