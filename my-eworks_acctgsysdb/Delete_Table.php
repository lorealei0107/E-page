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
$sql = 'DROP TABLE employee';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete table employee: ' . mysql_error());
}
echo "Table deleted successfully\n";
mysql_close($conn);
?>