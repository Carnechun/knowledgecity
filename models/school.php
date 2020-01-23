<?php
    require_once('connection.php');
    require_once('student.php');

    class School
    {
        private $name;
        private $city;

        public function get_name(){return $this->name;}
        public function set_name($value){$this->$value;}
        public function get_city(){return $this->$city;}
        public function set_city($value){$this->$city = $value;}

        public function __construct()
        {
            if(func_num_args()==0)
            {
                $this->name = '';
                $this->city ='';

            }else if(func_num_args()==1)
            {
                $args = func_get_args();
                $this->name = $args[0];
                
                $connection =  get_connection();
                $query = "SELECT `name`, `city` FROM `school` WHERE `name`= ?";
                $command = $connection->prepare($query);
                $command->bind_param("s",$this->name);
                $command->execute();
                $command->bind_result($this->name,$this->city);
                mysqli_stmt_close($command);


            }


        }
        public function get_students($page,$rows_per_page)
        {
            $limit_start=($page-1)* $rows_per_page;
            $list =array();
            $connection = get_connection();
            $query = "SELECT username, firstname, surname, `group`, school FROM student WHERE school = ? limit ?,?";
            $command = $connection->prepare($query);
            $command->bind_param("sii",$this->name,$limit_start,$rows_per_page);
            $command->execute();
            $command->bind_result($username,$firstname,$surname,$group,$school);
            

            while($command->fetch())
            { 
               
                $o=new Student($username,$firstname,$surname,$group,$school);
                array_push($list, $o->to_array());
            }
            mysqli_stmt_close($command);
            $connection->close();
            $json = json_encode($list);
            return $json;
        }
    }

?>