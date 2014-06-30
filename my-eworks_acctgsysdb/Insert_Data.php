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
$sql = 'INSERT INTO employee '.
       '(emp_name,emp_address, emp_salary, join_date) '.
       'VALUES ( "guest", "XYZ", 2000, NOW() )';

mysql_select_db('myacctgsysdb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
?>