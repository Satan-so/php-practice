<?php
require('Model.php');

class Reply extends Model {
	protected function getTableName() {
       return 'reply';
    }

    protected function getMap() {
    	return array(
        	'id' => 'Id',
        	'content'=> 'Content',
        	'create_time' => 'CreateTime'
        );
    }
}
?>