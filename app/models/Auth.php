<?php
session_start();
session_unset();

if(isset($_SESSION['user_id'])){
    echo "User is already logged in";
}

else{

    $E_username = filter_var($_POST['User_Name'], FILTER_SANITIZE_STRING);
    $E_pwd = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);

    $mysql_hostname = 'localhost';
    $mysql_username = 'root';
    $mysql_password = '';
    $mysql_db_name = 'common_alert_system';

    try{
        $dbh = new PDO("mysql:host=$mysql_hostname; dbname=$mysql_db_name;", $mysql_username, $mysql_password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbh->prepare("SELECT *  FROM employee WHERE E_EMAIL = ?");
        //$stmt->bindParam('E_username', $username);
        $result =$stmt->execute([$E_username]);
        $users = $stmt->fetchAll();
        print_r($users);
        if (isset($users[0])){
            if (passsword_verify($E_pwd, $users[0]->E_Password)){
                echo "Login Successful";
            }
            else{
                echo "Login Failed";
            }
        }

        $stmt->bindParam(':E_username', $E_username);

        $stmt->execute();

    }
    catch(Exception $e){
        echo "Connection failed: " . $e->getMessage();
    }
}