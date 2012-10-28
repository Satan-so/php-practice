<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>留言板</title>
</head>
<body>
<ul>
<?php
require_once('ReplyModel.php');

$replies = ReplyModel::getAll();

while (list($key, $reply) = each($replies)) {
	echo '<li>';
	echo $reply->getContent();
	echo '——';
	echo strftime('%b %d %Y %X', $reply->getCreateTime());
	echo '</li>';
}
?>
</ul>

<form action="add_reply.php" method="post">
	<input type="text" name="content" />
	<input type="submit" value="留言" />
</form>

</body>
</html>