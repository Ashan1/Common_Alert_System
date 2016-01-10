<?php

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
 <div id="layout">

                    <div>
                        <div id="recent">
                            <h2 style="color:#000000; float:left;">External Authority Details</h2>
                        </div> <!--recent ends-->
                    </div>

                    <div>
                    <div id="content" scrolling="yes">
                        <?php
                        $data=$db->query("SELECT Auth_name, Auth_tel, Auth_address, Auth_email FROM external_authority");
                        $db_result=$data->result();
                        $count=$data->count();
                        ?>

                        <form name="table" method="post" onsubmit="return validate();">
                            <table class="table table_striped" id="table">

                                <thead>
                                <tr>
                                    <th>Authority-Name</th>
                                    <th>Authority-Telephone No.</th>
                                    <th>Authority-Address</th>
                                    <th>Authority-Email</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                for($i=0; $i<$count; $i++){
                                    echo
                                        "<tr>
              <td>{$db_result[$i]->Auth_name}</td>
              <td>{$db_result[$i]->Auth_tel}</td>
              <td>{$db_result[$i]->Auth_address}</td>
              <td>{$db_result[$i]->Auth_email}</td>
             </tr>\n";
                                }
                                ?>

                                </tbody>
                            </table>
                        </form>
                    </div>
                        </div>

                </div><!--layout ends-->

