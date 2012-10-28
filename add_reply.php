<?php
require_once('ReplyModel.php');

$reply = new Reply();

$reply->setContent($_POST['content']);
$reply->setCreateTime(time());

ReplyModel::add($reply);

header("Location:index.php");
?>