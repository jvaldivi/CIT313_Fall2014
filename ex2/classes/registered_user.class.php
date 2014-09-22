<?php

class registered_user extends users {
	
	
	function __construct($user_level, $user_id) 
		{
			parent::__construct($user_level);
			$this->user_type = '1';
			$this->user_id = $user_id;
		}
	
	function __get($name)
		{
		return $this->$name;
		}
	
	function __set($name, $value)
		{
		$this->$name = $value;
		return;
		}
	
	function __destruct()
		{
		}
	
	
}

?>