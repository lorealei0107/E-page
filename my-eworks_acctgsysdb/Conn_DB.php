<?php


// Database Connection Setting

$dbhost = "localhost"; // Host name 
$dbport = "3306"; // Host port
$dbusername = "lorealei"; // Mysql username 
$dbpassword = ""; // Mysql password 
$db_name = "myacctgsysdb"; // Database name 

$mysqlCon = mysqli_connect($dbhost, $dbusername, $dbpassword, "", $dbport) or die("Error: " . mysqli_error($mysqlCon));
mysqli_select_db($mysqlCon, $db_name) or die("Error: " . mysqli_error($mysqlCon));
echo 'Connected successfully';
mysql_select_db( 'myacctgsysdb' );
mysql_close($mysqlCon);
?>
