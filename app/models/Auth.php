<?php
session_start();
session_unset();

if(isset($_SESSION['user_id'])){
    echo "User is already logged in";
}

else{
    $mysql_hostname = 'localhost';
    $mysql_username = 'root';
    $mysql_password = '';
    $mysql_db_name = 'cas';

    try{
        $conn = new PDO("mysql:host=$mysql_hostname; dbname=$mysql_db_name;", $mysql_username, $mysql_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $E_username = filter_var($_POST['User_Name'], FILTER_SANITIZE_STRING);
        $E_pwd = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);

        $stmt = $conn->prepare("SELECT *  FROM employee WHERE email = :email");
        $stmt->bindParam('email', $E_username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (count($result)>0 && (password_verify($E_pwd, $result['password']))){

            header('Location: ../../public/index1.php');
        }
        else{
            echo "Login Failed";
        }



    }
    catch(Exception $e){
        echo "Connection failed: " . $e->getMessage();
    }


}