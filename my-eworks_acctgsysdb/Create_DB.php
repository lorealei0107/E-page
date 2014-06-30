<?php
$dbhost = "127.5.153.129"; // Host name 
$dbport = "3306"; // Host port
$dbuser = 'lorealei';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql = 'CREATE Database myacctgsysdb';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database myacctgsysdb created successfully\n";
mysql_close($conn);
?>
