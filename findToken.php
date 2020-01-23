<?php
require_once('models/student.php');
require_once('models/security.php');
require_once('models/recordnotfoundexception.php');
require_once('models/invaliduserexception.php'); // use exception
header('Access-Control-Allow-Origin:*');
$response ='';
try
	{
		//create user
		$u=new Student();
		$response = $u->findToken();
		
			

		
		
		//display user info
		//$response['status']=0;
		//$response['user'] = $u->to_array();
		//$response['token'] = $s->generate_token($u->get_nickname());	
	}
	catch(InvalidUserException $ex)
	{
			
	}
    echo $response;
?>