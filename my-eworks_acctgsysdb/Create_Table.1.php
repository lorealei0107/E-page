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
$query_file = 'sql_query.txt';

$fp    = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp); 

mysql_select_db('test_db');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "List created successfully\n";
mysql_close($conn);
?>