<?php
class Reply
{
	private $content;
	private $createTime;

	public function getContent() {
		return $this->content;
	}

	public function setContent($v) {
		$this->content = $v;
	}

	public function getCreateTime() {
		return $this->createTime;
	}

	public function setCreateTime($v) {
		$this->createTime = $v;
	}
}
?>