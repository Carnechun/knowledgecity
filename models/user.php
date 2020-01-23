<?php
	require_once('connection.php'); //use connection
	require_once('invaliduserexception.php'); // use exception
	
	class User
	{
		//attributes
		private $id;
		private $nickname;
		private $name;
		private $lastname;
		private $password;
		private $email;
		private $us_editor;
		
		//getters and setters
		public function get_id() { return $this->id; }//name
		public function set_id($value) { $this->id = $value; }
		public function get_nickname() { return $this->nickname; }//name
		public function set_nickname($value) { $this->nickname = $value; }
		public function get_name() { return $this->name; }//name
		public function set_name($value) { $this->name = $value; }
		public function get_lastname() { return $this->lastname; }//father lastname
		public function set_lastname($value) { $this->lastname = $value; }
		public function get_password() { return $this->password; }
		public function set_password($value) { $this->password = $value; }
		public function get_email() { return $this->email; }//email
		public function set_email($value) { $this->email = $value; }
		public function get_us_editor() { return $this->us_editor; }
		public function set_us_editor($value) { $this->us_editor = $value; }

		
		//constructor
		public function __construct()
		{
			//cero arguments : empty object
			if (func_num_args() == 0)
			{
				$id=0;
			    $nickname = '';
			    $name = '';
			    $lastname = '';
				$password='';
				$email = '';
				$us_editor=1;
			}
			//two argument : read data from db
			if (func_num_args() == 2)
			{
				
				//get arguments
				$args = func_get_args();
				$nickname = $args[0];
				$password = $args[1];
				//get connection
				$connection = get_connection();
				$query = 'select us_id, us_nickname, us_name, us_lastname, us_email, us_password
						  from Users.Users where us_nickname = ? and us_password= ?;';
				//command
				$command = sqlsrv_query($connection, $query, array($nickname, $password));
				while ($row = sqlsrv_fetch_object($command))
				{
					$this->id = $row->us_id; 
					$this->name = $row->us_name;
					$this->lastname = $row->us_lastname;
					$this->nickname = $row->us_nickname;
					$this->email = $row->us_email;
					//$this->editor = $row->us_editor;
				}
			}
			if (func_num_args() == 6)
			{
				//get arguments
				$args = func_get_args();
				$this->id=$args[0];
				$this->nickname = $args[1];
				$this->name = $args[2];
				$this->lastname = $args[3];
				$this->password = $args[4];
				$this->email= $args[5];
				$this->us_editor= $args[6];
			}
		}
		
			
		public function to_array() {
			return array('id'=>$this->id,'username' => $this->username, 'name' => $this->name, 'lastname' => $this->lastname,'password'=>$this->password, 
					'email' => $this->email, 'editor' => $this->us_editor);
		}
	}
?>