<?php 
    require_once("../Model/Connection.class.php");
    require_once("../Model/Task.class.php");
    require_once("../Controller/TaskDAO.class.php");

    $body = file_get_contents('php://input');

    $Task = new Task();
    $DAOcontroller = new TaskDAO();

    $jsonBody = json_decode($body, true);

    if(empty($jsonBody)){
        $Task->setId($_POST['id']);
        $Task->setTitle($_POST['title']);
        $Task->setDescription($_POST['description']);
        $Task->setDataTask($_POST['dataTask']);
    } else{
        $Task->setId($jsonBody['id']);
        $Task->setTitle($jsonBody['title']);
        $Task->setDescription($jsonBody['description']);
        $Task->setDataTask($jsonBody['dataTask']);
    }

    $DAOcontroller->update($Task);
?>