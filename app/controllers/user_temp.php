<?php
require_once '../core/init.php';
$db = DB::getInstance();

if(isset($_POST['userNIC'])) {
    $uid = $_POST['userNIC'];
    $query = "SELECT * FROM employee WHERE E_nic = '$uid'";

    $users = $db->query($query);
    $pduser_count = $users->count();
    $pdusers = $users->result();

    if ($pduser_count > 0) {
        $output = "[";
        for ($i = 0; $i < $db->count(); $i++) {
            if ($output != "[") {
                $output .= ",";
            }

            $output .= '{"Tname":"' . $pdusers[$i]->F_Name . " " . $pdusers[$i]->L_Name . '",';
            $output .= '"EEmail":"' . $pdusers[$i]->E_email . '",';
            $output .= '"ETel":"' . $pdusers[$i]->E_tel . '",';
            $output .= '"Enic":"' . $pdusers[$i]->E_nic . '",';
            $output .= '"EJb":"' . $pdusers[$i]->E_jobrole . '"}';
        }
        $output .= "]";
        echo $output;
    }

}

