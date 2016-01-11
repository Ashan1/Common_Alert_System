<?php include "../templates/header.php";
require_once '../models/dbConfig.php';
require_once '../controllers/recent_alert.php';
?>
</head>
<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">
            <div class="container-fluid">
                <?php include 'mail.php' ?>
            </div>
        </div>
    </div>
</