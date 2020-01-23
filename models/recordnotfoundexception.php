<?php
class RecordNotFoundException extends Exception
{
	protected $message = 'Record Not Found Exception';
	
	public function get_message()
	{
		return $this->message;
	}
}
?>
