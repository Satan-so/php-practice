<?php
require("conn.php");

$now = time();
mysql_query(
	"INSERT INTO reply (content, create_time) VALUES ('$_POST[content]', $now)");

mysql_close($conn);
header("Location:index.php");
?>