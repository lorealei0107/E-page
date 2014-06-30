
<?php
$dbhost = "127.5.153.129"; // Host name 
$dbport = "3306"; // Host port
$dbuser = 'lorealei';
$dbpass = '';
$dbname = 'myacctgsysdb';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';
$command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ".
           "myacctgsysdb | gzip > $backup_file";

system($command);
?>