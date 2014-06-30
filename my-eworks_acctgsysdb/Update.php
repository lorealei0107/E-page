<html>
<head>
<title>Update a Record in MySQL Database</title>
</head>
<body>

<?php
if(isset($_POST['update']))
{
$dbhost = "127.5.153.129"; // Host name 
$dbport = "3306"; // Host port
$dbusername = "lorealei"; // Mysql username 
$dbpassword = ""; // Mysql password 

$conn = mysql_connect($dbhost, $dbusername,$dbpassword);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$emp_id = $_POST['emp_id'];
$emp_salary = $_POST['emp_salary'];

$sql = "UPDATE employee ".
       "SET emp_salary = $emp_salary ".
       "WHERE emp_id = $emp_id" ;

mysql_select_db('myacctgsysdb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Employee ID</td>
<td><input name="emp_id" type="text" id="emp_id"></td>
</tr>
<tr>
<td width="100">Employee Salary</td>
<td><input name="emp_salary" type="text" id="emp_salary"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>