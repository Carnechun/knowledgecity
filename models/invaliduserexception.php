<?php
	class InvalidUserException extends Exception
	{
		protected $message = 'Invalid User, Access Denied';
		
		public function get_message() { return $this->message; }
	}
?>