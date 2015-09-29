<?php
error_reporting(0);
include "connect.php";

$.post( "test.php", { last_update: var_with_last_time })
.done(function( data ) {
    alert( "Data Loaded: " + data );
    // here check if the server returned something like {"changed":"true"}
    if(value == true){
        alert( "Data CHANGED");
        //Here fire new update request to refresh content, or you could do this in the same ajax call
        // You must change some php : )
    });
?>