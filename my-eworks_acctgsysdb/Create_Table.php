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
echo 'Connected successfully';
$sql = 'CREATE TABLE employee( '.
       'emp_id INT NOT NULL AUTO_INCREMENT, '.
       'emp_name VARCHAR(20) NOT NULL, '.
       'emp_address  VARCHAR(20) NOT NULL, '.
       'emp_salary   INT NOT NULL, '.
       'join_date    timestamp(14) NOT NULL, '.
       'primary key ( emp_id ))';

mysql_select_db('myacctgsysdb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table employee created successfully\n";
mysql_close($conn);
?>