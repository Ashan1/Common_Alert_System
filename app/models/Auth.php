<?php
session_start();

if(isset($_SESSION['user_id'])){
    echo "User is already logged in";
}

else{

    $E_username = filter_var($_POST['User_Name'], FILTER_SANITIZE_STRING);
    $E_pass = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);

    $options = array('cost' => 11);
    $E_pwd = password_hash($E_pass, PASSWORD_BCRYPT, $options);

    $mysql_hostname = 'localhost';
    $mysql_username = 'root';
    $mysql_password = '';
    $mysql_db_name = 'common_alert_system';

    try{
        $dbh = new PDO("mysql:host=$mysql_hostname; dbname=$mysql_db_name;", $mysql_username, $mysql_password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbh->prepare("SELECT Employee_ID, E_Email, E_Password  FROM employee WHERE E_EMAIL = :E_username AND E_PASSWORD = :E_pwd");

        $stmt->bindParam(':E_username', $E_username);
        $stmt->bindParam(':pwd', $E_pwd);

        $stmt->execute();

        $user_id = $stmt->fetchColumn();

        if($user_id == false)
        {
            echo 'Login Failed';
        }

        else{
            $_SESSION['user_id'] = $user_id;
            echo 'Login Successful';
        }
    }
    catch(Exception $e){
        echo "Connection failed: " . $e->getMessage();
    }
}