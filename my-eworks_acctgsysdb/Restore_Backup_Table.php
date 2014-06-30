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
$sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";

mysql_select_db('myacctgsysdb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not load data : ' . mysql_error());
}
echo "Loaded  data successfully\n";
mysql_close($conn);
?>