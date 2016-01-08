<?php
require_once '../models/dbConfig.php';

if($_POST){
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry your request not a valid request'
        ));
        die($output); //exit script outputting json data
    }

    //Sanitize input data using PHP filter_var().
    $Fname		= filter_var($_POST["Fname"], FILTER_SANITIZE_STRING);
    $Lname		= filter_var($_POST["Lname"], FILTER_SANITIZE_STRING);
    $email		= filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $nic	= filter_var($_POST["nic"], FILTER_SANITIZE_STRING);
    $title		= filter_var($_POST["title"], FILTER_SANITIZE_STRING);
    $mobile	= filter_var($_POST["mobile"], FILTER_SANITIZE_STRING);

    $result = $user->signup($Fname,$Lname,$email,$nic,$title,$mobile);

    if ($result == 1){
        $output = json_encode(array( //create JSON data
            'type'=>'text',
            'text' => 'You have registered successfully. Please wait for the administration confirmation. You will get a mail with login details.'
        ));
    }else{
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Some thing wrong with database try again later'
        ));

    }


    die($output);

}






/*if(isset($_POST)) {
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $title = $_POST['title'];
    $mobile = $_POST['mobile'];

    $user->signup($Fname,$Lname,$email,$nic,$title,$mobile);
    $user->redirect('../../public/index.php');
}*/
?>