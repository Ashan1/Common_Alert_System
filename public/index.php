<?php

require_once '../app/init.php'; ?>

<html>
    <head>
        <?php
        include ('../app/views/includes/css.php');
        include ('../app/views/includes/js.php');
        ?>

        <link rel="stylesheet" media="screen" href="../public/stylesheets/main.css">
        <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap.css">
        <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap-theme.css">
    </head>

    <body>
        <?php include ('../app/views/home/login.php');?>
        <?php
        if (isset($_POST['signup'])){
            header("location: ../app/views/home/signup.php");
        }
        ?>
    </body>
</html>

