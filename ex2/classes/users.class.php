<?php

class users {
	
		protected $user_id;
		protected $user_type;
		protected $first_name;
		protected $last_name;
		protected $email_address;
		protected $user_level;
	
	function __construct($user) 
		{
			$this->user_level = $user;
		}
	
	function __get($name)
		{
		
		}
	
	function __set($name, $value)
		{

		}
	
	function __destruct()
		{
		}
	
	
}

?>