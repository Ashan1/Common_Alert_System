<?php
include "../templates/header.php";

require_once '../models/dbConfig.php';
    if($user->is_loggedin()==""){
        $user->redirect('index.php');
    }
?>
</head>

<body>
<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">
                    <p>Alerts</p>
            </div>
        </div>
    </div>
</div>

