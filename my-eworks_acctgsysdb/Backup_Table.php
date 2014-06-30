<?php
$host = "127.5.153.129"; // Host name 
$port = "3306"; // Host port
$user = 'lorealei';
$pass = '';
$name = 'myacctgsysdb';
$conn = mysql_connect($host, $user, $pass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$table_name = "employee";
$backup_file  = "/tmp/employee.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";

mysql_select_db('myacctgsysdb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not take data backup: ' . mysql_error());
}
echo "Backedup  data successfully\n";
mysql_close($conn);
?>