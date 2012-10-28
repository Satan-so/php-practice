<?php
if (filter_has_var(INPUT_POST, 'content')) {
	require_once('ReplyModel.php');

	$reply = new Reply();

	//$reply->setContent($_POST['content']);
	$reply->setContent(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING));
	$reply->setCreateTime(time());

	ReplyModel::add($reply);
}

header("Location:index.php");
?>