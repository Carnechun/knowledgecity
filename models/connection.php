<?php
	//get connection
	function get_connection()
	{
		//read config
		$config = parse_ini_file('config.ini');
		//parameters
		if (isset($config['server'])) $server = $config['server']; else { echo 'Configuration error : MySql Server name not found'; die; }
		if (isset($config['user'])) $user = $config['user']; else { echo 'Configuration error : Database name not found'; die; } 
		if (isset($config['password'])) $password = $config['password'];  else { echo 'Configuration error : User name not found'; die; }
		if (isset($config['database'])) $database = $config['database']; else { echo 'Configuration error : Password not found'; die; }
		//open connection
		$connection = mysqli_connect($server, $user, $password, $database);
		//error in connection
		if ($connection === false) { echo 'Error al conectar a MySql'; die; }
		//return connection object
		return $connection;
	}
?>