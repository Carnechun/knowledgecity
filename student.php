<?php
	class Student
	{
		//attributes
		private $name;
		private $surname;
		private $age;
		private $gender;
		private $school;
		
		//getters and setters
		public function get_name () { return $this->name;}
		public function set_name ($value) {$this->name = $value;}
		public function get_surname () { return $this->surname;}
		public function set_surname ($value) {$this->surname = $value;}
		public function get_age () { return $this->age;}
		public function set_age ($value) {$this->age = $value;}
		public function get_gender () { return $this->gender;}
		public function set_gender ($value) {$this->gender = $value;}
		public function get_school () { return $this->school;}
		public function set_school ($value) {$this->school = $value;}
		
		//construct
		public function __construct()
		{
			if(func_num_args()==0)
			{
				$this->name = "";
				$this->surname = "";
				$this->age = 0;
				$this->gender = "";
				$this->school = "";
				
			}else if(func_num_args()==5)
			{
				$args = func_get_args();
				$this->name = $args[0];
				$this->surname = $args[1];
				$this->age = $args[2];
				$this->gender = $args[3];
				$this->school = $args[4];
			}
			
		}
		//methods
		public function FullName()
		{
			return $this->name." ".$this->surname;
		}
	}

?>