<?php
$host = "Mysql1001.webweb.com:4306";
$user = "989ce8_php";
$password = "12345678";
$db_name = "db_989ce8_php";
$conn = mysql_connect($host, $user, $password);
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($db_name, $conn);
?>