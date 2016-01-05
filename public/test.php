<?php

require_once '../app/core/init.php';

$name = "Dilini";

/*$one = DB::getInstance()->query("SELECT * FROM employee WHERE E_name = '$name'");
var_dump($one->result());*/
$two = DB::getInstance()->query("INSERT INTO drought VALUES(1, 4)");
var_dump($two->result());
?><!--

<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
<a href="#">jQuery</a>
<script src="javascripts/jquery.js"></script>
<script>
    $( "a" ).click(function( event ) {

        event.preventDefault();

        $( this ).hide( "slow" );

    });
</script>
</body>
</html>-->