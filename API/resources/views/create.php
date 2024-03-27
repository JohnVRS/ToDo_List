<?php 
    require_once("../Model/Connection.class.php");
    require_once("../Model/Task.class.php");
    require_once("../Controller/TaskDAO.class.php");

    $Task = new Task();
    $DAOcontroller = new TaskDAO();

    $Task->setTitle($_POST['title']);
    $Task->setDescription($_POST['description']);
    $Task->setDataTask($_POST['dataTask']);

    $DAOcontroller->create($Task);

?>