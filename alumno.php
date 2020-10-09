<?php
	
	class alumno
	{
		//atributos
		private $nombre;
		private $apellido;
		private $edad;
		
		//getters y setters
		public function get_nombre(){ return $this->nombre;}
		public function set_nombre($value) {$this->nombre = $value;}
		public function get_apellido() {return $this->apellido;}
		public function set_apellido($value) {$this->apellido=$value;}
		public function get_edad () {return $this->edad;}
		public function set_edad($value) {$this->edad=$value;}
		
		//constructor
		public function __construct()
		{
			if(func_num_args()==3)
			{
				$args = func_get_args();
				$this->nombre = $args[0];
				$this->apellido = $args[1];
				$this->edad = $args[2];
				
			}
			
		}
		//funciones
		public function NombreCompleto()
		{
			return $this->nombre." ".$this->apellido;
		}
		
	}
?>