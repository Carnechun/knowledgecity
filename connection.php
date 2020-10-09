<?php
	
	$config = parse_ini_file("config.ini");
	$server;
	$database;
	$user;
	$password;
	
	if(isset($config["server"])){ $server = $config["server"]} else { echo "error de conexion"; die;}
	if(isset($config["database"])){ $database = $config["database"]} else{ echo "error de conexion"; die;}
	if(isset($config["user"])){ $user = $config["user"] } else { echo "error de conexion"; die;}
	if(isset($config["password"])){$password = $config["password"]} else{ echo "error de conexion"; die;}
	
	$connection = mysql_connect($server,$database,$user,$password);
	
	if($connection===false)
	{
		echo "error de conexion"; 
		die;
		
	}
	return $connection;
	
	
?>