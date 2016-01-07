<?php
require_once '../models/dbConfig.php';

if(isset($_POST)) {
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $title = $_POST['title'];
    $mobile = $_POST['mobile'];
    
    $user->signup($Fname,$Lname,$email,$nic,$title,$mobile);
    $user->redirect('../../public/index.php');
}
?>