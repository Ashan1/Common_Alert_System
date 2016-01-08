<?php
/**
 * Created by CAS Team
 */
require_once '../models/dbConfig.php';

if($_POST) {
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $output = json_encode(array( //create JSON data
            'type' => 'error',
            'text' => 'Sorry your request not a valid request'
        ));
        die($output); //exit script outputting json data
    }

    $username		= filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password		= filter_var($_POST["password"], FILTER_SANITIZE_STRING);

    $r = $user->login($username,$password);
    if($r){
        $output = json_encode(array( //create JSON data
            'type'=>'text',
            'text' => 'login success'
        ));
    }
    else{
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'login fail'
        ));
    }

    die($output);


}




/*if(isset($_POST['btn-login'])){
    $uname = $_POST['username'];
    $upass = $_POST['password'];

    if($user->login($uname,$upass)){
        $user->redirect('home.php');
    }
    else{
        $user->redirect('index.php');
    }
}*/

?>