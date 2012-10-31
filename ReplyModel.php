<?php
require_once('Reply.php');

class ReplyModel
{
	public static function getAll() {
		require('conn.php');
		$result = mysql_query('SELECT * FROM reply ORDER BY id DESC');
		$replies = array();

		while($row = mysql_fetch_array($result)) {
			$reply = new Reply();

			$reply->setId($row['id']);
			$reply->setContent($row['content']);
			$reply->setCreateTime($row['create_time']);
			//print_r($reply);

			//array_push($replies, $reply);
			$replies[] = $reply;
		}

		mysql_close();
		return $replies;
	}

	public static function add($reply) {
		require('conn.php');
		$content = $reply->getContent();
		$createTime = $reply->getCreateTime();
		mysql_query(
			"INSERT INTO reply (content, create_time) VALUES ('$content', $createTime)");

		mysql_close($conn);
	}
}
?>