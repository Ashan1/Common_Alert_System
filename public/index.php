<?php

require_once '../app/init.php'; ?>

<html>
    <head>
        <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap.css">
        <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap-theme.css">
        <link rel="stylesheet" media="screen" href="../public/stylesheets/main.css">
    </head>

    <body>
        <?php include ('../app/views/home/login.php');
        $options = array('cost' => 11);
        echo password_hash("test", PASSWORD_BCRYPT, $options);?>

        <script src="javascripts/cas.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <script src="javascripts/bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript" src="javascripts/validation.js"></script>


    </body>
</html>
