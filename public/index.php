<?php

require_once '../app/init.php'; ?>

<html>
    <head>
        <script src="javascripts/jquery-1.9.0.min.js" type="text/javascript"></script>
        <script src="javascripts/bootstrap.js" type="text/javascript"></script>
        <script src="javascripts/bootstrap.js" type="text/javascript"></script>
        <script src="javascripts/cas.js" type="text/javascript"></script>

        <link rel="stylesheet" media="screen" href="../public/stylesheets/main.css">
        <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap.css">
        <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap-theme.css">
    </head>

    <body>
        <?php include ('../app/views/home/login.php');?>

        <script type="text/javascript">
            document.getElementById("signup").onclick = function () {
                window.event.returnValue = false;
                window.location = '../app/views/home/signup.php';
            };
        </script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <script type="text/javascript" src="javascripts/validation.js"></script>


    </body>
</html>

