<?php

require_once '../app/init.php'; ?>

<html>
<head>
    <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap.css">
    <link rel="stylesheet" media="screen" href="../public/stylesheets/bootstrap-theme.css">
    <link rel="stylesheet" media="screen" href="../public/stylesheets/main.css">
    <link rel="stylesheet" media="screen" href="../public/stylesheets/menu.css">

    <script src="javascripts/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="javascripts/bootstrap.js" type="text/javascript"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="javascripts/map.js" type="text/javascript"></script>
</head>

<body onload="myFunction()">
<?php include ('../app/views/home/menu.php');?>

<script type="text/javascript">
    $('#home').click(function(){
        $("#mcontent").load("../app/views/home/map.php");
        var script = document.createElement('script');
        script.setAttribute('type', 'text/javascript');
        script.setAttribute('src', 'javascripts/map.js');
        document.head.appendChild(script);
        initialize();
        return false;
    });
    $('#disaster').click(function(){
        $("#mcontent").load("../app/views/home/disaster.php");
        return false;
    });

    function myFunction() {
        $("#mcontent").load("../app/views/home/map.php");
        return false;
    }

</script>



</body>
</html>
