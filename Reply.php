<?php
require('Model.php');

class Reply extends Model {
	/*
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
	*/
	protected  function getTableName() {
       return "reply";
    }
    protected function getMap() {
        return array(
        	'id' => Id,
        	'content'=> Content,
        	'create_time' => CreateTime
        );
    }
}
?>