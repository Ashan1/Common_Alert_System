<?php

class USER {
    private $db;

    function __construct($db_con){
        $this->db = $db_con;
    }

    public function signup($name,$email,$nic,$title,$mob_no,$address){
        try {
            $def_pass= "cas@123";
            $new_pass = password_hash($def_pass, PASSWORD_DEFAULT);

            $stmtu = $this->db->prepare("INSERT INTO employee(E_name,E_nic,email,tel,address,password) VALUES('$name','$nic','$email','$mob_no','$address','$new_pass')");
            $stmtu->execute();
            return $stmtu;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    public function login($uemail,$upass){
        try{
            $stmt = $this->db->prepare("SELECT * FROM employee WHERE E_email= '$uemail'");
            $stmt->execute();
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() > 0){
                if(password_verify($upass,$userRow['E_password'])){
                    $_SESSION['user_session'] = $userRow['E_nic'];
                    return true;
                }
            }
            else{
                return false;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function is_loggedin(){
        if(isset($_SESSION['user_session'])){
            return true;
        }
    }

    public function redirect($url){
        header("Location: $url");
    }

    public function logout(){
        unset($_SESSION['user_session']);
        $_SESSION['user_Session'] = false;
        session_destroy();
        return true;
    }

    public function user_details($user_id){
        $stmt = $this->db->prepare("SELECT * FROM employee WHERE E_nic = '$user_id'");
        $stmt->execute();
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $userRow;
    }

}
