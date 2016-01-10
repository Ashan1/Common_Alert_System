<?php

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
<div class="container-fluid col-lg-12">
    <?php
    $result = $db->query("SELECT * FROM `employee` WHERE E_jobrole='Executive User' ")->result();
    $count= $db->query("SELECT * FROM `employee` WHERE E_jobrole='Executive User' ")->count();
    if ($count>0){
        for ($i=0;$i<$count;$i++){
            echo "
                </div>

                <div class='panel col-lg-12'>
                    <div >
                        <div class='col-lg-4 panel-photo'>
                            <img src='images/user.png'>
                        </div>
                        <div class='col-lg-8' >
                            <ul><br><br>
                            <li>Name    : {$result[$i]->F_Name}  {$result[$i]->L_Name}</li>
                            <li>Title   :  {$result[$i]->E_jobrole}</li>
                            <li>Email   : {$result[$i]->E_email}</li>
                            <li>Mobile  : {$result[$i]->E_tel}</li>
                            <li><br>Responsible Areas: </li>
                            </ul>
                            </table>
                        </div>
                    </div>
                </div>";
        }
}
else{echo "qsqede";}
