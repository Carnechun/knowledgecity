<?php
    require_once('models/school.php');
    require_once('models/student.php');
    require_once('models/recordnotfoundexception.php');
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Headers: nickname, token');

    $response = array();
    if(!isset($_GET['name'])&&!isset($_GET['page'])&&!isset($_GET['rows']))
    {

    }else
    {
        try
        {
            $object = new School($_GET['name']);
            $response=$object->get_students($_GET['page'],$_GET['rows']);
        }catch(RecordNotFoundException $ex)
        {


        }

    }
    echo json_encode($response);
?>