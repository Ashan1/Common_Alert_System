<?php
error_reporting(0);
$hostname="localhost"; //local server name default localhost
$username="ucas";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="cas";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
echo "wede del";
die('Connection Failed'.mysql_error());
}else{
}
mysql_select_db($database,$con);
?>