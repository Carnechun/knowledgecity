<?php
	include_once("student.php");
	$semana = array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
	$message = implode(", ", $semana);
	echo $message;
	
	$student = new Student("josue leonardo","galindo miranda", 24, "male", "UTT");
	echo $student->FullName();
	
?>