<?php
abstract class Model {
	protected $tableName;
	protected $map;

	abstract protected function getTableName();
	abstract protected function getMap();

	public function __construct() {
		$this->tableName = $this->getTableName();
		$this->map = $this->getMap();
	}

	public function __call($method, $param) {
		$type = substr($method, 0, 3);
		$member = substr($method, 3);

		switch ($type) {
			case 'get':
				return $this->getMember($member);
				break;
			case 'set':
				return $this->setMember($member, $param[0]);
				break;
		}

		return false;
	}

	public function getMember($key) {
		if (property_exists($this, $key)) {
			return $this->$key;
		}

		return false;
	}

	public function setMember($key, $val) {
		if (is_numeric($val)) {
			eval('$this->'.$key.' = '.$val.';');
		} else {
			eval('$this->'.$key.' = "'.$val.'";');
		}
	}

	public function load($row) {
		foreach ($row as $key => $val) {
			if (!is_numeric($key)) {
				$member = $this->map[$key];

				if (is_numeric($val)) {
					eval('$this->'.$member.' = '.$val.';');
				} else {
					eval('$this->'.$member.' = "'.$val.'";');
				}
			}
		}
    }
}
?>