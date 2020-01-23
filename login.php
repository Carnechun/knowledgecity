<?php
require_once('models/student.php');
require_once('models/security.php');
require_once('models/recordnotfoundexception.php');
require_once('models/invaliduserexception.php'); // use exception
header('Access-Control-Allow-Origin:*');

$s = new Security();
$response ='';
if(!isset($_POST['username']) && !isset($_POST['password'])) {
	
} else {
	try
	{
		//create user
		$u=new Student($_POST['username'], $_POST['password']);
		$response = $u->get_foundedOrNot();
		if($response=="logged succefully")
		{
			if(isset($_POST['remember']))		
			{
				$u->add_token($s->generate_token($_POST['username']),$_POST['username']);
				
			}
			echo'<script type="text/javascript">
    alert("Login succefully");
    window.location.href="http://localhost/knowledgecity/students.html";
    </script>';
			
		}else
		{
			echo'<script type="text/javascript">
    alert("Record Not Found Exception");
    window.location.href="http://localhost/knowledgecity/";
    </script>';

		}
		die();
		//display user info
		//$response['status']=0;
		//$response['user'] = $u->to_array();
		//$response['token'] = $s->generate_token($u->get_nickname());	
	}
	catch(InvalidUserException $ex)
	{
			
	}
}

echo json_encode($response);
?>