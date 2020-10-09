<?php
	
	require_once("alumno.php");
	
	$objeto = new alumno("Jose Luis","Moreno Galindo", 24);
	
	echo $objeto->NombreCompleto()."<br>";
	
	echo $objeto->get_edad();
	

	echo "xd hola";

	
	
	
	
	
?>