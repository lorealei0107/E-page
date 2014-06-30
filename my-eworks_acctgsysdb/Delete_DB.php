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
$sql = 'DROP DATABASE myacctgsysdb';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete database db_test: ' . mysql_error());
}
echo "Database deleted successfully\n";
mysql_close($conn);
?>