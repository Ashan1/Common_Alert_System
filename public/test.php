<?php

require_once '../app/core/init.php';

$one = DB::getInstance()->query("SELECT * FROM employee");
var_dump($one->result());

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