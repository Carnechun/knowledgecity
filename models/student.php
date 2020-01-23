<?php
    require_once("connection.php");//use conection
    
    class Student
    {
        private $username;
        private $firstname;
        private $surname;
        private $group;
        private $password;
        private $school;
        private $foundedOrNot;
        private $tokenFounded;

        public function get_username (){return $this->username;}
        public function set_username ($value){$this->username = $value;}
        public function get_firstname (){return $this->firstname;}
        public function set_firstname ($value){$this->firstname = $value;}
        public function get_surname (){return $this->surname;}
        public function set_surname ($value){$this->surname = $value;}
        public function get_group (){return $this->group;}
        public function set_group ($value){$this->group = $value;}
        public function get_password (){return $this->password;}
        public function set_password ($value){$this->password = $value;}
        public function get_school (){return $this->school;}
        public function set_school ($value){$this->school = $value;}
        public function get_foundedOrNot(){return $this->foundedOrNot;}
        public function get_tokenFounded(){return $this->tokenFounded;}

        public function __construct()
        {
            if(func_num_args()==0)
            {
                $this->username ='';
                $this->firstname='';
                $this->surname='';
                $this->group='';
                $this->school='';
            }else if(func_num_args()==5)
            {
                $args = func_get_args();
                $this->username = $args[0];
                $this->firstname = $args[1];
                $this->surname = $args[2];
                $this->group = $args[3];
                $this->school = $args[4];  
            }
            else if (func_num_args() == 2)
			{
				
				//get arguments
				$args = func_get_args();
				$username = $args[0];
				$password = $args[1];
				//get connection
				$connection = get_connection();
				$query = 'SELECT username FROM student where username = ? and password= ?;';
				//command
				$command = $connection->prepare($query);
				//bind params
				$command->bind_param('ss', $username, $password);
				//execute
                $command->execute();
                //bind result
                $command->bind_result($this->username);
				//fetch data
				$found = $command->fetch();
				//close command
				mysqli_stmt_close($command);
				//close connection
				$connection->close();
				//throw exception if user not found
                if (!$found)
                {
                    $this->foundedOrNot = "Record Not Found Exception";

                }else
                {
                    $this->foundedOrNot = 'logged succefully';

                }
			}


        }
        public function to_array()
        {

            return array("username" => $this->username, "firstname" => $this->firstname,"surname" =>$this->surname, "group"=> $this->group, "school" => $this->school);

        }
        public function add_token($token,$username)
        {
            $connection = get_connection();
				$query = 'INSERT INTO api_users(id, token, username) VALUES (0,?,?)';
				//command
				$command = $connection->prepare($query);
				//bind params
				$command->bind_param('ss', $token, $username);
				//execute
                $command->execute();

                mysqli_stmt_close($command);

        }
        public function destroyToken()
        {

            $connection = get_connection();
				$query = 'delete from api_users';
				//command
				$command = $connection->prepare($query);
				//bind params
				$command->bind_param('ss', $token, $username);
				//execute
                $command->execute();

                mysqli_stmt_close($command);

        }
        public function findToken()
        {
            $connection = get_connection();
				$query = 'SELECT id, token, username FROM api_users ;';
				//command
				$command = $connection->prepare($query);
				
				//execute
                $command->execute();
              
				//fetch data
				$found = $command->fetch();
				//close command
				mysqli_stmt_close($command);
				//close connection
                $connection->close();
                
                if (!$found)
                {
                    $this->tokenFounded = 'no token yet';

                }else
                {
                    
                    $this->tokenFounded = "Token in system";
                }
                return $this->tokenFounded;

        }
    }
?>