<?php

class USER {
    private $db;

    function __construct($db_con){
        $this->db = $db_con;
    }

    public function signup($fname,$lname,$email,$nic,$title,$mob_no){
        try {
            $def_pass= "cas@123";
            $new_pass = password_hash($def_pass, PASSWORD_DEFAULT);

            $stmtu = $this->db->prepare("INSERT INTO employee(F_Name,L_Name,E_nic,E_email,E_tel,E_jobrole,E_password) VALUES('$fname','$lname','$nic','$email','$mob_no','$title','$new_pass')");
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
                if(password_verify($upass,$userRow['E_password']) && $userRow['Admin_auth'] == 1){
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
