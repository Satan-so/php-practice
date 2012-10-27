<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>留言板</title>
</head>
<body>
<ul>
<?php
require("conn.php");

$result = mysql_query('SELECT * FROM reply ORDER BY id DESC');
while($row = mysql_fetch_array($result)) {
	echo '<li>';
	echo $row['content'];
	echo '——';
	echo strftime('%b %d %Y %X', $row['create_time']);
	echo '</li>';
}
mysql_close();
?>
</ul>

<form action="add_reply.php" method="post">
	<input type="text" name="content" />
	<input type="submit" value="留言" />
</form>

</body>
</html>