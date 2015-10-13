<?php
error_reporting(0);
$hostname="127.0.0.1"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="mydb";  //database name which you created
$conn=mysql_connect($hostname,$username,$password);
if(! $conn)
{
die('Connection Failed'.mysql_error());
}else{
echo "Connection Successfull<br>";
mysql_select_db($database,$conn);
}
?>