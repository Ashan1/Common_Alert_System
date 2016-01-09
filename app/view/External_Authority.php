<?php include "../templates/header.php";

require_once '../core/init.php';
require_once '../models/dbConfig.php';
if($user->is_loggedin()==""){
    $user->redirect('../../public/index.php');
}

$db = DB::getInstance();
?>
</head>

<body>
<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">


                <div id="layout">

                    <div class="row">
                        <div id="recent">
                            <h2 style="color:#000000; float:left;">External Authority Details</h2>
                        </div> <!--recent ends-->
                    </div>

                    <div class="row">
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


            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
