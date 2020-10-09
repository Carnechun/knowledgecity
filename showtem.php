<?php
require("mqtt/phpMQTT.php");
require("mqtt/config.php");
ini_set( 'max_execution_time' , 10 );
error_reporting(0);
$mqtt = new bluerhinos\phpMQTT($server, $port, "carnechun".rand());

if(!$mqtt->connect(true,NULL,$username,$password)){
  exit(1);
}

//currently subscribed topics
$topics['arlogic/temperatura'] = array("qos"=>0, "function"=>"procmsg");
$mqtt->subscribe($topics,0);

while($mqtt->proc()){
}

$mqtt->close();
function procmsg($topic,$msg){
         ob_clean() ;
  echo "$msg";
}

?>